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
                                <h3 class="card-title">Edit Banner</h3>
                            </div>
                            <div class="card-body pb-2">
                                <form action="{{route('edit_banner_action',$edit_banner->id)}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Heading</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_banner->heading}}" placeholder="Heading" type="text" name="heading">
                                            @error('heading')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Button Url</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_banner->button_url}}" placeholder="Button Url" type="text" name="button_url">
                                            @error('button_url')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Image</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" type="file" name="image">
                                            <img src="{{asset('')}}" class="img-responsive">
                                            @error('image')
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
                    $("#example").append('<tr><td><input type="text" name="addmore[tab_name][]" placeholder="Name" class="form-control" /></td><td><input type="text" name="addmore[content][]" placeholder="Course Content" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td></tr>');
                });

                $(document).on('click', '.remove-tr', function() {
                    $(this).parents('tr').remove();
                });
            });
        </script>