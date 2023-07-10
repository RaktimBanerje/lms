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
                                <h3 class="card-title">Header & Footer Settings</h3>
                            </div>
                            <div class="card-body pb-2">
                                <form action="{{route('edit_setting_action')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Header Logo <span class="required_star">*</span></strong></label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="header_logo">
                                                <label class="custom-file-label">Upload Logo</label>
                                            </div>
                                            <img src="{{asset('public/admin/assets/setting/'.$edit_settings->header_logo)}}" width="50px">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Footer Logo <span class="required_star">*</span></strong></label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="footer_logo">
                                                <label class="custom-file-label">Upload Logo</label>
                                            </div>
                                            <img src="{{asset('public/admin/assets/setting/'.$edit_settings->footer_logo)}}" width="50px">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Facebook Link</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_settings->fb_link}}" placeholder="Facebook Link" type="text" name="fb_link">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Twitter Link</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_settings->twitter_link}}" placeholder="Twitter Link" type="text" name="twitter_link">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label><strong>Linkedin Link</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_settings->linkedin_link}}" placeholder="Linkedin Link" type="text" name="linkedin_link">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Instagram Link</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_settings->instagram_link}}" placeholder="Instagram Link" type="text" name="instagram_link">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Youtube Link</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_settings->youtube_link}}" placeholder="Youtube Link" type="text" name="youtube_link">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Mail</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_settings->mail}}" placeholder="Mail" type="text" name="mail">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Phone</strong> <span class="required_star">*</span></label>
                                            <input class="form-control mb-4" value="{{$edit_settings->phone}}" placeholder="Phone" type="text" name="phone">
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