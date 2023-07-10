<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseContent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    //LOAD COURSE DETAILS PAGE
    public function course(){
        $course = Course::where('status',1)->get();
        return view('frontend.course',compact('course'));
    }

    //COURSE DETAILS
    public function course_details(Request $req){
        $slug = $req->slug;
        $course = Course::where('slug',$slug)->first();
        
        //dd($course_content);
        return view('frontend.course_details', compact('course'));
    }

    //LOAD COURSE CATEGORY
    public function category_list()
    {
        $category_list = CourseCategory::latest()->get();
        return view('admin.courses.category.index', compact('category_list'));
    }

    //ADD CATEGORY
    public function add_category()
    {
        return view('frontend.courses.category.add');
    }

    //ADD CATEGORY ACTION
    public function add_category_action(Request $req)
    {
        $req->validate([
            'course_category' => 'required'
        ]);

        $add_category = new CourseCategory();
        $add_category->course_category = $req->course_category;
        $add_category->status = 1;

        if ($add_category->save()) {
            $req->session()->flash('success', 'Category added successfully.');
            return redirect()->route('category_list');
        } else {
            $req->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
    }

    //EDIT CATEGORY
    public function edit_category($id)
    {
        $edit_category  = CourseCategory::find($id);
        return view('admin.courses.category.edit', compact('edit_category'));
    }

    //UPDATE CATEGORY
    public function edit_category_action(Request $req)
    {
        $update_category = CourseCategory::find($req->id);
        $update_category->course_category = $req->course_category;
        $update_category->status = 1;

        if ($update_category->save()) {
            $req->session()->flash('success', 'Category updated successfully.');
            return redirect()->route('category_list');
        } else {
            $req->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
    }

    //DELETE CATEGORY
    public function delete_category(Request $req, $id)
    {
        CourseCategory::destroy($id);
        $req->session()->flash('success', 'Category deleted successfully.');
        return redirect()->back();
    }

    //UPDATE CATEGORY STATUS
    public function category_status(Request $req, $id)
    {
        $data = DB::table('course_categories')->select('status')->where('id', $id)->first();

        //check post status
        if ($data->status == '1') {
            $status = '0';
        } else {
            $status = '1';
        }

        //update post status
        $data = array('status' => $status);
        DB::table('course_categories')->where('id', $id)->update($data);
        $req->session()->flash('success', 'Status has been updated successfully.');
        return redirect()->route('category_list');
    }

    //LOAD COURSE
    public function course_list()
    {
        $courses = Course::where("user_id", auth()->user()->id)->get();
        return view('instructor.course.index', compact("courses"));
    }

    //ADD COURSE
    public function add_course()
    {
        $cat_list = CourseCategory::latest()->get();
        return view('instructor.add_course', compact('cat_list'));
    }

    //ADD COURSE ACTION
    public function add_course_action(Request $req)
    {
        // $req->validate([
        //     'category_id' => 'required',
        //     'course_type' => 'required',
        //     'title' => 'required',
        //     'sub_title' => 'required',
        //     'slug' => 'required',
        //     'description' => 'required',
        //     'things_to_learn' => 'required',
        //     'regular_price' => 'required',
        //     'selling_price' => 'required',
        //     'selling_price' => 'required',
        //     'meta_title' => 'required',
        //     'meta_description' => 'required',
        //     'meta_keywords' => 'required',
        // ]);


        $file = $req->file('thumbnail');
        $fileName = uniqid() . "." . $file->getClientOriginalExtension();
        $destinationPath = public_path() . '/courses';
        $file->move($destinationPath, $fileName);

        Course::create([
            "user_id"           => auth()->user()->id,
            "thumbnail"         => $fileName,
            "course_category_id"=> $req->category_id,
            "course_type"       => $req->type,
            "title"             => $req->title,
            "sub_title"         => $req->sub_title,
            "slug"              => $req->slug,
            "description"       => $req->description,
            "things_to_learn"   => $req->things_to_learn,
            "regular_price"     => $req->regular_price,
            "selling_price"     => $req->selling_price,
            "meta_title"        => $req->meta_title,
            "meta_description"  => $req->meta_description,
            "meta_keywords"     => $req->meta_keywords,
            "chapters"          => $req->course_content,
            "instractors"       => ""
        ]);

        return redirect()->route("instructor_course_list")->with("success", "New Course Added");
    }

    //EDIT COURSE
    public function edit_course($id)
    {
        $edit_course = Course::find($id);
        $edit_content = CourseContent::where('course_id', $id)->get();
        $cat_list = CourseCategory::latest()->get();
        return view('admin.courses.course.edit', compact('edit_course', 'cat_list', 'edit_content'));
    }

    //UPDATE COURSE
    public function edit_course_action(Request $req)
    {
        $update_course = Course::find($req->id);
        $update_course->course_cat_id = $req->course_cat_id;
        $update_course->title = $req->title;
        $update_course->heading = $req->heading;
        $update_course->course_type = $req->course_type;
        $update_course->regular_price = $req->regular_price;
        $update_course->selling_price = $req->selling_price;
        $update_course->course_include = $req->course_include;
        $update_course->what_you_will_learn = implode(',', $req->addmore['what_you_will_learn']);
        $update_course->tab_name = $req->addmore['tab_name'];
        $update_course->content = $req->addmore['content'];
        $update_course->course_slug = Str::slug($req->title);
        $update_course->sections = $req->sections;
        $update_course->lectures = $req->lectures;
        $update_course->total_length = $req->total_length;
        $update_course->requirements = $req->requirements;
        $update_course->short_desc = $req->short_desc;
        $update_course->description = $req->description;
        $update_course->meta_title = $req->meta_title;
        $update_course->meta_desc = $req->meta_desc;
        $update_course->meta_keyword = $req->meta_keyword;
        $update_course->created_by = $req->created_by;
        $update_course->status = 1;

        if ($image = $req->file('image')) {
            $destinationPath = 'public/admin/assets/course/';
            $profileImage = rand() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $update_course['image'] = "$profileImage";
        }

        $content = CourseContent::where('course_id', $req->id)->get();
        for ($i = 0; $i < count($content); $i++) {
            CourseContent::where('id', $content[$i]->id)->update([
                'tab_name' => $update_course->tab_name[$i],
                'content' => $update_course->content[$i],
            ]);
        }
        //dd($update_course->what_you_will_learn);
        $update_course->save();
        $req->session()->flash('success', 'Course Updated Successfully.');
        return redirect()->route('course_list');
    }

    //DELETE COURSE
    public function delete_course(Request $req, $id)
    {
        Course::destroy($id);
        return redirect()->route('course_list');
    }

    //UPDATE COURSE STATUS
    public function course_status(Request $req, $id)
    {
        $data = DB::table('courses')->select('status')->where('id', $id)->first();

        if ($data->status == '1') {
            $status = '0';
        } else {
            $status = '1';
        }

        $data = array('status' => $status);
        DB::table('courses')->where('id', $id)->update($data);
        $req->session()->flash('success', 'Status has been updated successfully.');
        return redirect()->route('course_list');
    }

    //LOAD COUPON PAGE
    public function coupon_list()
    {
        $get_coupon = Coupon::latest()->get();
        return view('admin.courses.coupon.index', compact('get_coupon'));
    }

    //ADD COUPON
    public function add_coupon()
    {
        $categorys = CourseCategory::latest()->get();
        $courses = Course::latest()->get();
        return view('admin.courses.coupon.add', compact('categorys', 'courses'));
    }

    //ADD COUPON ACTION
    public function add_coupon_action(Request $req)
    {
        $add_coupon = new Coupon();
        $add_coupon->coupon_code = $req->coupon_code;
        $add_coupon->coupon_type = $req->coupon_type;
        if ($req->category_id) {
            $add_coupon->category_id = json_encode($req->category_id);
        } else {
            $add_coupon->category_id = NULL;
        }

        if ($req->course_id) {
            $add_coupon->course_id = json_encode($req->course_id);
        } else {
            $add_coupon->course_id = NULL;
        }
        $add_coupon->discount_percentage = $req->discount_percentage;
        $add_coupon->start_date = $req->start_date;
        $add_coupon->end_date = $req->end_date;
        $add_coupon->status = 1;

        if ($add_coupon->save()) {
            $req->session()->flash('success', 'Coupon added successfully.');
            return redirect()->route('coupon_list');
        } else {
            $req->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
    }

    //EDIT COUPON
    public function edit_coupon($id)
    {
        $edit_coupon = Coupon::find($id);
        $categorys = CourseCategory::latest()->get();
        $courses = Course::latest()->get();
        return view('admin.courses.coupon.edit', compact('edit_coupon', 'categorys', 'courses'));
    }

    //UPDATE COUPON
    public function edit_coupon_action(Request $req)
    {
        $update_coupon = Coupon::find($req->id);
        $update_coupon->coupon_code = $req->coupon_code;
        $update_coupon->coupon_type = $req->coupon_type;
        if ($req->category_id) {
            $update_coupon->category_id = json_encode($req->category_id);
        } else {
            $update_coupon->category_id = NULL;
        }

        if ($req->course_id) {
            $update_coupon->course_id = json_encode($req->course_id);
        } else {
            $update_coupon->course_id = NULL;
        }
        $update_coupon->discount_percentage = $req->discount_percentage;
        $update_coupon->start_date = $req->start_date;
        $update_coupon->end_date = $req->end_date;
        $update_coupon->status = 1;

        if ($update_coupon->save()) {
            $req->session()->flash('success', 'Coupon added successfully.');
            return redirect()->route('coupon_list');
        } else {
            $req->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
    }

    //DELETE COUPON 
    public function delete_coupon(Request $req, $id)
    {
        Coupon::destroy($id);
        $req->session()->flash('success', 'Coupon Deleted Successfully.');
        return redirect()->route('coupon_list');
    }

    //COUPON STATUS UPDATE
    public function coupon_status(Request $req, $id)
    {
        //get post status with the help of post id
        $data = DB::table('coupons')->select('status')->where('id', '=', $id)->first();

        //check post status

        if ($data->status == '1') {
            $status = '0';
        } else {
            $status = '1';
        }

        //update post status

        $data = array('status' => $status);
        DB::table('coupons')->where('id', $id)->update($data);
        $req->session()->flash('success', 'Status has been updated successfully.');
        return redirect()->route('coupon_list');
    }
}
