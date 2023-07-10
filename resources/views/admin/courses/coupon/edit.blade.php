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
                                <h3 class="card-title">Edit Coupon</h3>
                            </div>
                            <div class="card-body pb-2">
                                <form action="{{route('edit_coupon_action',$edit_coupon->id)}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label><strong> Coupon Code:</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_coupon->coupon_code}}" placeholder="Coupon Code" type="text" name="coupon_code">
                                            @error('coupon_code')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        {{--<div class="col-md-4 mb-3">
                                            <label><strong> Coupon Type:</strong></label>
                                            <select name="coupon_type" class="form-control">
                                                <option value="" selected disabled>Select</option>
                                                <option value="1" {{ $edit_coupon->coupon_type == 1 ? 'selected' : '' }}>Percentage</option>
                                        <option value="2" {{ $edit_coupon->coupon_type == 2 ? 'selected' : '' }}>Amount</option>
                                        </select>
                                        @error('coupon_type')
                                        <span class="text text-danger">{{$message}}</span>
                                        @enderror
                                    </div>--}}
                                    <div class="col-md-4">
                                        <label class="form-label">Coupon Type:<span class="required"></span></label>
                                        <select name="coupon_type" id="coupon_type" class="form-control" required>
                                            <option value="" disabled>Select</option>
                                            <option value="PFC" {{ $edit_coupon->coupon_type == 'PFC' ? 'selected' : '' }}>Percentage for Category</option>
                                            <option value="PFP" {{ $edit_coupon->coupon_type == 'PFP' ? 'selected' : '' }}>Percentage for Product</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4" id="pfp" style="display: none;">
                                        <label class="form-label">Course</label>
                                        <select name="course_id[]" class="select2" multiple>
                                            <option value="" disabled>Select</option>
                                            @if(isset($courses))
                                            @foreach($courses as $course)
                                            @if($edit_coupon->course_id != NULL)
                                            <option value="{{$course->id}}" {{ (in_array($course->id, json_decode($edit_coupon->course_id))) ? 'selected' : '' }}>{{$course->title}}</option>
                                            @else
                                            <option value="{{$course->id}}">{{$course->title}}</option>
                                            @endif
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="pfc" style="display: none;">
                                        <label><strong>Category</strong></label>
                                        <select name="category_id[]" class="select2" multiple>
                                            <option value="" disabled>Select</option>
                                            @if(isset($categorys))
                                            @foreach($categorys as $cat)
                                            @if($edit_coupon->category_id != NULL)
                                            <option value="{{$cat->id}}" {{ (in_array($cat->id, json_decode($edit_coupon->category_id))) ? 'selected' : '' }}>{{$cat->course_category}}</option>
                                            @else
                                            <option value="{{$cat->id}}">{{$cat->course_category}}</option>
                                            @endif
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label><strong> Discount (in percentage):</strong></label>
                                        <input class="form-control mb-4" value="{{$edit_coupon->discount_percentage}}" placeholder="Discount (in percentage)" type="text" name="discount_percentage">
                                        @error('discount_percentage')
                                        <span class="text text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label><strong> Start Date:</strong></label>
                                        <input class="form-control mb-4" value="{{$edit_coupon->start_date}}" type="date" name="start_date">
                                        @error('start_date')
                                        <span class="text text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label><strong> End Date:</strong></label>
                                        <input class="form-control mb-4" value="{{$edit_coupon->end_date}}" type="date" name="end_date">
                                        @error('end_date')
                                        <span class="text text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

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
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(e) {
            $("#coupon_type").change(function(e) {
                e.preventDefault();
                var data = $(this).val()
                if (data == "PFC") {
                    $("#pfc").show();
                    $("#pfp").hide();
                } else if (data == "PFP") {
                    $("#pfp").show();
                    $("#pfc").hide();
                }
            });
        });
    </script>