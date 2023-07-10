<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartPage;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    //LOAD CART DATA
    public function load_cart_data()
    {
        session_start();
        if (auth()->user()) {
            $count  = Cart::where('user_id', Auth::user()->id)->count();
            return response()->json(['count' => $count]);
        } else {
            if (isset($_SESSION['carts'])) {
                $count = count($_SESSION['carts']);
                //dd($count);
                return response()->json(['count' => $count]);
            } else {
                $count = 0;
                return response()->json(['count' => $count]);
            }
        }
    }

    //ADD TO CART 
    public function add_to_cart(Request $req)
    {
        session_start();
        $course_id = $req->input('course_id');
        $course_qty = $req->input('course_qty');

        if (auth()->user()) {
            $course_check = Course::where('id', $course_id)->first();
            if ($course_check) {
                if (Cart::where('course_id', $course_id)->where('user_id', Auth::user()->id)->exists()) {
                    return response()->json(['error' => $course_check->title . ' Already Added to Cart.']);
                } else {
                    $cart = new Cart();
                    $cart->user_id = Auth::user()->id;
                    $cart->course_id = $course_id;
                    $cart->qty = $course_qty;
                    $cart->save();
                    return response()->json(['success' => $course_check->title . ' Added to Cart Successfully.']);
                }
            }
        } else {
            $course_check = Course::where('id', $course_id)->first();
            $_SESSION['carts'][] = ['course_id' => $course_id, 'qty' => 1];
            
            return response()->json(['success' => $course_check->title . ' Added to Cart Successfully.']);
        }
    }

    //DISPLAY CART ITEM IN CART PAGE
    public function view_cart()
    {
        session_start();
        if (auth()->user()) {
            $cart_items = Cart::leftjoin('courses', 'courses.id', '=', 'carts.course_id')->where('courses.user_id', Auth::user()->id)->get();
            $cart = CartPage::where('id', 1)->first();
            return view('frontend.cart', compact('cart_items', 'cart'));
        } else {
            $cart = CartPage::where('id', 1)->first();
            $cart_items = [];
            if (isset($_SESSION['carts'])) {
                foreach ($_SESSION['carts'] as $item) {
                    $product = Course::find($item['course_id']);
                    //dd($product);
                    $cart_items[] = $product;
                }
                //session_destroy();
            } else {
                $cart_items = [];
            }
            //dd($cart_items);
            return view('frontend.cart', compact('cart_items', 'cart'));
        }
    }

    //DELETE CART ITEMS
    public function delete_cart_item(Request $req)
    {
        $course_id = $req->input('course_id');
        if (auth()->user()) {
            if (Cart::where('course_id', $course_id)->where('user_id', Auth::user()->id)->exists()) {
                $cart_item = Cart::where('course_id', $course_id)->where('user_id', Auth::user()->id)->first();
                $cart_item->delete();
                return response()->json(['success' => 'Course Deleted Successfully.']);
            }
        } else {
            session_start();
            $carts = $_SESSION["carts"];
            $updated_carts = [];

            foreach($carts as $item) {
                if($item["course_id"] != $course_id)  {
                    $updated_carts[] = $item;
                }
            }

            $_SESSION['carts'] = $updated_carts;
            return response()->json(['success' => 'Course Deleted Successfully.']);
        }
    }

    //DELETE ALL CART ITEMS
    public function delete_all_cart_data()
    {
        $delete_cart = DB::table('carts')->delete();
        if ($delete_cart) {
            return response()->json(['success' => 'Cart Deleted Successfully.']);
        } else {
            return response()->json(['error' => 'Something went wrong, please try again.']);
        }
    }

}
