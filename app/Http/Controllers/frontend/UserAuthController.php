<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserAuthController extends Controller
{
    //LOAD LOGIN PAGE
    public function user_login(){
        return view('frontend.auth.login');
    }

    //USER LOGIN
    public function user_login_action(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //dd($req->all());
        $email = $req->email;
        $password = $req->password;

        if (Auth::attempt(["email" => $email, "password" => $password, "status" => 1, "u_type" => "student"])) {
            return Redirect::route('index')->with(["success" => "Login successfully."]);
        } else {
            return Redirect::back()->with(["error" => "Invalid Username & Password."]);
        }
    }

    //USER LOGOUT
    public function user_logout()
    {
        session()->flush();
        Auth::logout();
        return redirect()->route('user_login');
    }

    //LOAD REGISTER PAGE
    public function user_register()
    {
        return view('frontend.auth.register');
    }

    //USER REGISTER
    public function user_register_action(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|digits:10|numeric',
            'password' => 'required|min:8|confirmed|string',
            'password_confirmation' => 'required|min:8|string',
        ]);

        $add_user = new User();
        $add_user->u_type = 'student';
        $add_user->name = $req->name;
        $add_user->email = $req->email;
        $add_user->phone = $req->phone;
        $add_user->password = Hash::make($req->password);
        $add_user->status = 1;

        if($add_user->save()){
            $req->session()->flash('success', 'Registration Successfully.');
            return redirect()->route('user_login');
        }else{
            $req->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
        
    }

    //PROFILE
    public function user_profile(){
        $my_orders = Order::leftjoin('order_items','orders.id', 'order_items.order_id')->leftjoin('users','users.id','orders.user_id')->leftjoin('courses','courses.id', 'order_items.course_id')->where('orders.user_id', Auth::user()->id)->get();
        //dd($my_orders);
        return view('frontend.my_profile',compact('my_orders'));
    }
}
