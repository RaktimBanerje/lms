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
                    </div>
                    <div class="page-rightheader">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h3 class="card-title">Home Page</h3>
                            </div>
                            <div class="card-body pb-2">
                                <form action="{{route('edit_home_page_action')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Heading One</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->heading_1}}" placeholder="Heading One" type="text" name="heading_1">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Count No One</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->count_no_1}}" placeholder="Count No One" type="text" name="count_no_1">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Heading Two</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->heading_2}}" placeholder="Heading Two" type="text" name="heading_2">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Count No Two</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->count_no_2}}" placeholder="Count No Two" type="text" name="count_no_2">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Heading Three</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->heading_3}}" placeholder="Heading Three" type="text" name="heading_3">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Count No Three</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->count_no_3}}" placeholder="Count No Three" type="text" name="count_no_3">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Heading Three</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->heading_3}}" placeholder="Heading Three" type="text" name="heading_3">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Count No Three</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->count_no_3}}" placeholder="Count No Three" type="text" name="count_no_3">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Heading Four</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->heading_4}}" placeholder="Heading Four" type="text" name="heading_4">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Count No Four</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->count_no_4}}" placeholder="Count No Four" type="text" name="count_no_4">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Heading Five</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->heading_5}}" placeholder="Heading Five" type="text" name="heading_5">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Count No Five</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->count_no_5}}" placeholder="Count No Five" type="text" name="count_no_5">
                                        </div>
                                    </div>
                                    <label class="text text-primary"><strong>SEO Tags:</strong></label>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Meta Title</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->meta_title}}" placeholder="Meta Title" type="text" name="meta_title">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Meta Description</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->meta_desc}}" placeholder="Meta Description" type="text" name="meta_desc">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Meta Keyword</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_home_page->meta_keyword}}" placeholder="Meta Keyword" type="text" name="meta_keyword">
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
                    $("#example").append('<tr><td><input type="text" name="addmore[tab_name][]" placeholder="Name" class="form-control" /></td><td><input type="text" name="addmore[content][]" placeholder="Course Content" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td></tr>');
                });

                $(document).on('click', '.remove-tr', function() {
                    $(this).parents('tr').remove();
                });
            });
        </script>