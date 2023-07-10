<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\CartPage;
use App\Models\Counter;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //BANNER LIST
    public function banner_list(){
        $get_banner = Banner::latest()->get();
        return view('admin.banner.index',compact('get_banner'));
    }

    //ADD BANNER FORM
    public function add_banner(){
        return view('admin.banner.add');
    }

    //ADD BANNER ACTION
    public function add_banner_action(Request $req){
        $req->validate([
            'heading' => 'required',
            'button_url' => 'required',
            'image' => 'required',
        ]);

        $add_banner = new Banner();

        if ($image = $req->file('image')) {
            $destinationPath = 'public/admin/assets/banner/';
            $profileImage = rand() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $add_banner['image'] = "$profileImage";
        }
        $add_banner->heading = $req->heading;
        $add_banner->button_url = $req->button_url;
        $add_banner->status = 1;

        if ($add_banner->save()) {
            $req->session()->flash('success', 'Banner Added Successfully.');
            return redirect()->route('banner_list');
        } else {
            $req->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
    }

    //EDIT BANNER
    public function edit_banner($id){
        $edit_banner = Banner::find($id);
        return view('admin.banner.edit',compact('edit_banner'));
    }

    //UPDATE BANNER ACTION
    public function edit_banner_action(Request $req){
        $update_banner = Banner::find($req->id);
        $update_banner->heading = $req->heading;
        $update_banner->button_url = $req->button_url;
        $update_banner->status = 1;

        if ($image = $req->file('image')) {
            $destinationPath = 'public/admin/assets/banner/';
            $profileImage = rand() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $update_banner['image'] = "$profileImage";
        }

        if ($update_banner->save()) {
            $req->session()->flash('success', 'Banner Updated Successfully.');
            return redirect()->route('banner_list');
        } else {
            $req->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        } 
    }

    //DELETE BANNER
    public function delete_banner(Request $req){
        Banner::destroy($req->id);
        $req->session()->flash('success', 'Banner Deleted Successfully.');
        return redirect()->route('banner_list');
    }

    //BANNER STATUS UPDATE
    public function banner_status(Request $req, $id){
        $data = DB::table('banners')->select('status')->where('id', $id)->first();

        if($data->status == 1){
            $status = 0;
        }else{
            $status = 1;
        }
        $data = array('status' => $status);
        DB::table('banners')->where('id', $id)->update($data);
        $req->session()->flash('success', 'Status has been updated successfully.');
        return redirect()->route('banner_list');
    }

    //EDIT HOME PAGE
    public function home_page()
    {
        $edit_home_page = HomePage::where('id', 1)->first();
        return view('admin.page.home.edit', compact('edit_home_page'));
    }

    //UPDATE HOME PAGE
    public function edit_home_page_action (Request $req)
    {
        $update_home_page = HomePage::where('id', 1)->first();
    
        $update_home_page->count_no_1 = $req->count_no_1;
        $update_home_page->heading_1 = $req->heading_1;
        $update_home_page->count_no_2 = $req->count_no_2;
        $update_home_page->heading_2 = $req->heading_2;
        $update_home_page->count_no_3 = $req->count_no_3;
        $update_home_page->heading_3 = $req->heading_3;
        $update_home_page->count_no_4 = $req->count_no_4;
        $update_home_page->heading_4 = $req->heading_4;
        $update_home_page->count_no_5 = $req->count_no_5;
        $update_home_page->heading_5 = $req->heading_5;
        $update_home_page->meta_title = $req->meta_title;
        $update_home_page->meta_desc = $req->meta_desc;
        $update_home_page->meta_keyword = $req->meta_keyword;

        if ($update_home_page->save()) {
            $req->session()->flash('success', 'Data updated successfully.');
            return redirect()->back();
        } else {
            $req->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
    }

    //EDIT CART PAGE
    public function cart_page(){
        $edit_cart = CartPage::where('id',1)->first();
        return view('admin.page.cart.edit',compact('edit_cart'));
    }

    //UPDATE CART PAGE
    public function edit_cart_page_action(Request $req){
        $update_cart_page = CartPage::where('id', 1)->first();
        $update_cart_page->meta_title = $req->meta_title;
        $update_cart_page->meta_desc = $req->meta_desc;
        $update_cart_page->meta_keyword = $req->meta_keyword;

        if ($update_cart_page->save()) {
            $req->session()->flash('success', 'Data updated successfully.');
            return redirect()->back();
        } else {
            $req->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
    }
}
