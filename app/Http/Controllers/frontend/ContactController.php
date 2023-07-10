<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //LOAD CONTACT PAGE
    public function contact_us(){
        return view('frontend.contact');
    }
}
