<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Counter;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    //LOAD HOME PAGE
    public function index(){
        //dd(request()->ip());
        $banners = Banner::where('status',1)->get();
        $home = HomePage::first();
        $courses            = Course::all();
        $free_courses       = Course::where("course_type", "free")->get();
        $featured_courses   = Course::where("course_type", "featured")->get();
        $trending_courses   = Course::where("course_type", "trending")->get();
        return view('frontend.index',compact('banners', 'home', 'courses', 'free_courses', 'featured_courses' ,'trending_courses'));
    }

    //COURSE LIST AJAX
    public function course_list_ajax()
    {
        $courses = Course::select('title')->where('status', 1)->get();
        // return $courses;
        $data = [];
        foreach ($courses as $course) {
            $data[] = $course['title'];
        }
        return $data;
    }

    //COURSE SEARCH
    public function search_course(Request $req)
    {
        $searched_course = $req->course_name;
        //dd($searched_course);
        if ($searched_course != "") {
            $course = Course::where('title', 'LIKE', '%' . $searched_course . '%')->first();
            //dd($course);
            if ($course) {
                return redirect('/course/' . $course->course_slug);
            } else {
                return redirect()->back()->with('error', 'No course matched your search.');
            }
        } else {
            return redirect()->back()->with('error', 'Please enter product name.');
        }
    }

}

