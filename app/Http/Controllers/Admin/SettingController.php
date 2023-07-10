<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeaderAndFooter;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //EDIT HEADER-FOOTER SETTINGS
    public function edit_setting(){
        $edit_settings  = HeaderAndFooter::where('id',1)->first();
        return view('admin.settings.header-footer.edit',compact('edit_settings'));
    }

    //UPDATE HEADER-FOOTER SETTINGS
    public function edit_setting_action(Request $req){
        $update_setting = HeaderAndFooter::where('id',1)->first();
        if ($image = $req->file('header_logo')) {
            $destinationPath = 'public/admin/assets/setting/';
            $profileImage = rand() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $update_setting['header_logo'] = "$profileImage";
        }
        if ($image = $req->file('footer_logo')) {
            $destinationPath = 'public/admin/assets/setting/';
            $profileImage = rand() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $update_setting['footer_logo'] = "$profileImage";
        }
        $update_setting->twitter_link = $req->twitter_link;
        $update_setting->linkedin_link = $req->linkedin_link;
        $update_setting->fb_link = $req->fb_link;
        $update_setting->instagram_link = $req->instagram_link;
        $update_setting->youtube_link = $req->youtube_link;
        $update_setting->mail = $req->mail;
        $update_setting->phone = $req->phone;

        if ($update_setting->save()) {
            $req->session()->flash('success', 'Data updated successfully.');
            return redirect()->back();
        } else {
            $req->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
    }
}
