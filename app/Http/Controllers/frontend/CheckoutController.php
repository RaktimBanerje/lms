<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    //CHECKOUT PAGE
    public function checkout(Request $req)
    {
        session_start();
        if (auth()->user()) {
            $old_cart_items = Cart::leftjoin('courses', 'courses.id', '=', 'carts.course_id')->where('courses.user_id', Auth::user()->id)->get();
            //dd($cart_items);
            foreach ($old_cart_items as $item) {
                if (!Course::where('id', $item->course_id)->exists()) {
                    $remove_item = Cart::where('user_id', Auth::user()->id)->where('course_id', $item->course_id)->first();
                    $remove_item->delete();
                }
            }
            $cart_items = Cart::leftjoin('courses', 'courses.id', '=', 'carts.course_id')->where('courses.user_id', Auth::user()->id)->get();
        } else {
            $cart_items = [];
            if (isset($_SESSION['carts'])) {
                foreach ($_SESSION['carts'] as $item) {
                    $product = Course::find($item['course_id']);
                    //dd($product);
                    $cart_items[] = $product;
                }
                // session_destroy();
            } else {
                $cart_items = [];
            }
        }

        return view('frontend.checkout', compact('cart_items'));
    }

    //PLACE ORDER
    public function place_order(Request $req)
    {
        // dd($req->all());
        if (User::where('email', $req->email)->exists()) {
            //return redirect()->back()->with('error', 'User already exists, Please login to continue.');
        } else {
            $user = new User();
            $input = $req->all();
            $user->u_type = 'student';
            $user->name = $req->name;
            $user->email = $req->email;
            $user->phone = $req->phone;
            $user->password = Hash::make(Str::random(10));
            $user->raw_password = Str::random(10);
            $user->address = $req->address;
            $user->country = $req->country;
            $user->state = $req->state;
            $user->pincode = $req->pincode;
            $user->status = 1;

            $name = $req->name;
            $email = $input['email'];
            $password = Hash::make(Str::random(10));
            $raw_password = Str::random(10);
            $phone = $req->phone;
            $address = $req->address;
            $country = $req->country;
            $state = $req->state;
            $pincode = $req->pincode;
            $user->save();
            $last_id = User::where('id', $user->id)->first();
            
            Mail::send('frontend.guest-mail', ['name' => $name, 'email' => $email, 'password' => $password, 'raw_password' => $raw_password, 'phone' => $phone, 'address' => $address, 'country' => $country, 'state' => $state, 'pincode' => $pincode], function ($message) use ($input, $last_id) {
                $message->from('abhishekmukherjee.tsm@gmail.com', 'FintechIn');
                $message->to($last_id->email);
                $message->subject('Welcome to FintechIn!');
            });
        }

        $order = new Order();
        $order->user_id =  Auth::user() ? Auth::user()->id : 'student';
        $order->name = $req->name;
        $order->email = $req->email;
        $order->phone = $req->phone;
        $order->address = $req->address;
        $order->state = $req->state;
        $order->country = $req->country;
        $order->pincode = $req->pincode;
        $order->tracking_no = 'fintech' . '-' . rand(1111, 9999);

        if (auth()->user()) {
            $total = 0;
            $cartitems_total = Cart::leftjoin('courses', 'courses.id', '=', 'carts.course_id')->where('user_id', Auth::user()->id)->get();
            foreach ($cartitems_total as $prod) {
                $total += $prod->selling_price * $prod->qty;
                $grand_total = ($total * 18 / 100) + $total;
            }
            $order->total_price = $grand_total;
            $order->save();
            $cart_items = Cart::leftjoin('courses', 'courses.id', '=', 'carts.course_id')->where('user_id', Auth::user()->id)->get();
            foreach ($cart_items as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'course_id' => $item->course_id,
                    'qty' => $item->qty,
                    'price' => $item->selling_price,
                ]);
            }
        } else {
            session_start();
            $carts = $_SESSION['carts'];
            //Calculate the total price

            $total_price = 0;
            foreach ($carts as $cart) {
                $course = Course::find($cart['course_id']);
                $total_price += $course->selling_price * $cart['qty'];
                $grand_total = ($total_price * 18 / 100) + $total_price;
            }

            $order->total_price = $grand_total;
            $order->save();

            foreach ($carts as $item) {
                $course = Course::find($item['course_id']);
                $total_price += $course->selling_price * $item['qty'];
                $grand_total = ($total_price * 18 / 100) + $total_price;
                OrderItem::create([
                    'order_id' => $order->id,
                    'course_id' => $item['course_id'],
                    'qty' => $item['qty'],
                    'price' => $course->selling_price,
                ]);
            }
        }
        if(auth()->user()){
            $cart_items = Cart::where('user_id', Auth::user()->id)->get();
            Cart::destroy($cart_items);
        }else{
            session_destroy();
        }

        $req->session()->flash('success', 'Order Placed Successfully.');
        return redirect()->route('index');
    }

    //COUPON CODE FUNCTIONALITY
    public function check_coupon_code(Request $req)
    {
        $coupon_code = $req->input('coupon_code');
        if (Coupon::where('coupon_code', $coupon_code)->exists()) {
            $coupon = Coupon::where('coupon_code', $coupon_code)->first();
            //dd($coupon);
            if ($coupon->start_date <= Carbon::today()->format('Y-m-d') && Carbon::today()->format('Y-m-d') <= $coupon->end_date) {

                $total = 0;
                $cartitems_total = Cart::leftjoin('courses', 'courses.id', '=', 'carts.course_id')->where('user_id', Auth::user()->id)->get();
                foreach ($cartitems_total as $prod) {
                    $total += $prod->selling_price * $prod->qty;
                }

                //checking coupon type
                if ($coupon->coupon_type == "PFC") { //PFC - percentage for category
                    $category = CourseCategory::leftjoin('coupons', 'course_categories.id', '=', 'coupons.category_id')->first();
                    //dd($category);
                    if (Coupon::where(['category_id' => $category->id, 'coupon_code' => $category->coupon_code])->exists()) {
                        $discount_price = ($total / 100) * $coupon->discount;
                    } else {
                        return response()->json([
                            'status' => 'Coupon is invalid for this category',
                            'error_status' => 'error',
                        ]); 
                    }
                } elseif ($coupon->coupon_type == "PFP") { //PFP - percentage for product
                    $coupon = Coupon::where('course_id', $coupon->course_id)->first();
                    $course = json_decode($coupon->course_id, true);
                    $courses = Course::where('id', $coupon->course_id)->first();

                    if (Coupon::where(['course_id' => $course->id, 'coupon_code' => $course->coupon_code])->exists()) {
                        $discount_price = ($total / 100) * $coupon->discount;
                    } else {
                        return response()->json([
                            'status' => 'Coupon is invalid for this product',
                            'error_status' => 'error',
                        ]);
                    }
                }

                $grand_total = $total - $discount_price;
                return response()->json([
                    'discount_price' => $discount_price,
                    'grand_total_price' => $grand_total,
                ]);
            } else {
                return response()->json([
                    'status' => 'Coupon code has been expired',
                    'error_status' => 'error',
                ]);
            }
        } else {
            return response()->json([
                'status' => 'Coupon code does not exists',
                'error_status' => 'error',
            ]);
        }
    }
}
