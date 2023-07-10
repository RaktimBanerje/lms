<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //LOAD COMPANY PAGE
    public function about_us(){
        return view('frontend.about-us');
    }
}
