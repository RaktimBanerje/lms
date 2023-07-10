@extends('admin.layouts.main')
@section('content')
<!-- Page -->
<div class="page">
    <div class="page-main">
        @extends('admin.layouts.sidebar')
        <!-- App-Content -->
        <div class="app-content main-content">
            <div class="side-app">
                @extends('admin.layouts.nav')
                <!--Page header-->
                <div class="page-header">
                    <div class="page-leftheader">
                        <!-- <h4 class="page-title mb-0">Add User</h4> -->
                    </div>
                    <div class="page-rightheader">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h3 class="card-title">Edit Course</h3>
                            </div>
                            <div class="card-body pb-2">
                                <form action="{{route('edit_course_action',$edit_course->id)}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Category</strong> <span class="required_star">*</span></label>
                                            <select name="course_cat_id" class="form-control">
                                                <option value="" selected disabled>Select One</option>
                                                @if(isset($cat_list))
                                                @foreach($cat_list as $list)
                                                <option value="{{$list->id}}" {{ $list->id == $edit_course->course_cat_id ? 'selected' : '' }}>{{$list->course_category}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                            @error('title')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Title</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_course->title}}" placeholder="Title" type="text" name="title">
                                            @error('title')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Heading</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_course->heading}}" placeholder="Heading" type="text" name="heading">
                                            @error('heading')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Regular Price</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_course->regular_price}}" placeholder="Regular Price" type="text" name="regular_price">
                                            @error('regular_price')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Selling Price</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_course->selling_price}}" placeholder="Selling Price" type="text" name="selling_price">
                                            @error('selling_price')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Created By</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_course->created_by}}" placeholder="Created By" type="text" name="created_by">
                                            @error('created_by')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Course Type</strong></label>
                                            <select name="course_type" class="form-control">
                                                <option value="" selected disabled>Select One</option>
                                                <option value="Free" {{ $edit_course->course_type == 'Free' ? 'selected' : '' }}>Free</option>
                                                <option value="Featured" {{ $edit_course->course_type == 'Featured' ? 'selected' : '' }}>Featured</option>
                                                <option value="Trending" {{ $edit_course->course_type == 'Trending' ? 'selected' : '' }}>Trending</option>
                                            </select>
                                            @error('course_type')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label><strong>Course Include</strong> <span class="required_star">*</span></label>
                                            <textarea name="course_include" rows="4" class="form-control">{{$edit_course->course_include}}</textarea>
                                            @error('course_include')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <table id="example1" class="table table-bordered text-nowrap key-buttons">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">What you will learn?</th>
                                                        <th class="wd-20p border-bottom-0">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach(explode(",",$edit_course->what_you_will_learn) as $list)
                                                    <tr>
                                                        <td>
                                                            <input type="text" value="{{$list}}" name="addmore[what_you_will_learn][]" class="form-control" placeholder="What you will learn?">
                                                        </td>
                                                        <td>
                                                            <button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12">
                                            <table id="example" class="table table-bordered text-nowrap key-buttons">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">Tab Name</th>
                                                        <th class="wd-15p border-bottom-0">Course Content</th>
                                                        <th class="wd-20p border-bottom-0">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($edit_content as $list)
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="addmore[tab_name][]" value="{{$list->tab_name}}" class="form-control" placeholder="Tab Name">
                                                        </td>
                                                        <td>
                                                            <textarea name="addmore[content][]" placeholder="Course Content" class="form-control">{{$list->content}}</textarea>
                                                        </td>
                                                        <td>
                                                            <button type="button" name="add" id="addCourseContent" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Image <span class="required_star">*</span></strong></label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" accept=".png,.jpeg,.jpg">
                                                <label class="custom-file-label">Upload Image</label>
                                            </div>
                                            <img src="{{asset('public/admin/assets/course/'.$edit_course->image)}}" width="50px">
                                            @error('image')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Sections</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_course->sections}}" placeholder="Sections" type="text" name="sections">
                                            @error('sections')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Lectures</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_course->lectures}}" placeholder="Lectures" type="text" name="lectures">
                                            @error('lectures')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Total Length</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_course->total_length}}" placeholder="Total Length" type="text" name="total_length">
                                            @error('total_length')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label><strong>Requirements <span class="required_star">*</span></strong></label>
                                            <textarea class="form-control" name="requirements">{{$edit_course->requirements}}</textarea>
                                            @error('requirements')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label><strong>Short Description <span class="required_star">*</span></strong></label>
                                            <textarea class="form-control" name="short_desc">{{$edit_course->short_desc}}</textarea>
                                            @error('short_desc')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label><strong>Description <span class="required_star">*</span></strong></label>
                                            <textarea class="form-control" name="description">{{$edit_course->description}}</textarea>
                                            @error('description')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <label class="text text-primary"><strong>SEO Tags:</strong></label>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Meta Title</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_course->meta_title}}" placeholder="Meta Title" type="text" name="meta_title">
                                            @error('meta_title')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Meta Description</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_course->meta_desc}}" placeholder="Meta Description" type="text" name="meta_desc">
                                            @error('meta_desc')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Meta Keyword</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_course->meta_keyword}}" placeholder="Meta Keyword" type="text" name="meta_keyword">
                                            @error('meta_keyword')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-info" value="Save">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Row-1 -->
                </div>
            </div>
            <!-- End app-content-->
        </div>
        @endsection
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                var i = 0;
                $("#add").click(function() {
                    //console.log("ok");
                    ++i;
                    $("#example1").append('<tr><td><input type="text" name="addmore[what_you_will_learn][]" placeholder="What you will learn" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td></tr>');
                });

                $(document).on('click', '.remove-tr', function() {
                    $(this).parents('tr').remove();
                });
            });

            $(document).ready(function() {
                var i = 0;
                $("#addCourseContent").click(function() {
                    //console.log("ok");
                    ++i;
                    $("#example").append('<tr><td><input type="text" name="addmore[tab_name][]" placeholder="Name" class="form-control" /></td><td><textarea name="addmore[content][]" placeholder="Course Content" class="form-control"></textarea></td><td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td></tr>');
                });

                $(document).on('click', '.remove-tr', function() {
                    $(this).parents('tr').remove();
                });
            });
        </script>