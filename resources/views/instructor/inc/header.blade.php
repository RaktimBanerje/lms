<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title></title>

    <link rel="stylesheet" href="{{asset('public/instructor')}}/css/bootstrap1.min.css" />

    <link rel="stylesheet" href="{{asset('public/instructor')}}/vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="{{asset('public/instructor')}}/vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="{{asset('public/instructor')}}/vendors/scroll/scrollable.css" />

    <link rel="stylesheet" href="{{asset('public/instructor')}}/vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="{{asset('public/instructor')}}/vendors/morris/morris.css" />

    <link rel="stylesheet" href="{{asset('public/instructor')}}/vendors/material_icon/material-icons.css" />
    <link rel="stylesheet" href="{{asset('public/instructor')}}/css/metisMenu.css" />
    <link rel="stylesheet" href="{{asset('public/instructor')}}/css/style1.css" />
    <link rel="stylesheet" href="{{asset('public/instructor')}}/css/dataTables.bootstrap.min.css" />
</head>

<body class="crm_body_bg">
    <nav class="sidebar vertical-scroll ps-container ps-theme-default ps-active-y">
        <div class="">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle border__all" width="150px" src="{{asset('public/instructor')}}/img/2.png" />
                <span class="font-weight-bold vishal__im">Edogaru</span>
                <span class="date__all">Time: 10 : 00 Am</span><span class="date__all">Date: 27- 6 - 2023</span>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="" href="{{route('instructor_course_list')}}" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{asset('public/instructor')}}/img/menu-icon/dashboard.svg" alt />
                    </div>
                    <span>Courses</span>
                </a>
            </li>
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{asset('public/instructor')}}/img/menu-icon/dashboard.svg" alt />
                    </div>
                    <span>Communication</span>
                </a>
                <ul>
                    <li><a class="active" href="#">Q&A</a></li>
                    <li><a href="Messages.html">Messages</a></li>
                    <li><a href="#">Announcements</a></li>
                    <!-- <li><a href="#">Assignments</a></li> -->
                </ul>
            </li>
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{asset('public/instructor')}}/img/menu-icon/dashboard.svg" alt />
                    </div>
                    <span>Performance</span>
                </a>
                <ul>
                    <li><a class="active" href="overview.html">Overview</a></li>
                    <li><a href="#">Students</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <section class="main_content dashboard_part large_header_bg">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area d-flex align-items-center">
                            <div class="logo d-flex justify-content-between">
                                <a href="#"><img src="{{asset('public/instructor')}}/img/logo.png" alt /></a>
                                <div class="sidebar_close_icon d-lg-none">
                                    <i class="ti-close"></i>
                                </div>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a class="bell_notification_clicker nav-link-notify" href="#">
                                        <img src="{{asset('public/instructor')}}/img/icon/bell.svg" alt />
                                    </a>

                                    <div class="Menu_NOtification_Wrap">
                                        <div class="notification_Header">
                                            <h4>Notifications</h4>
                                        </div>
                                        <div class="Notification_body">
                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="{{asset('public/instructor')}}/img/staf/2.png" alt /></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Cool Marketing</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="{{asset('public/instructor')}}/img/staf/4.png" alt /></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Awesome packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="{{asset('public/instructor')}}/img/staf/3.png" alt /></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>what a packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="{{asset('public/instructor')}}/img/staf/2.png" alt /></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Cool Marketing</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="{{asset('public/instructor')}}/img/staf/4.png" alt /></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Awesome packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="{{asset('public/instructor')}}/img/staf/3.png" alt /></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>what a packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nofity_footer">
                                            <div class="submit_button text-center pt_20">
                                                <a href="#" class="btn_1">See More</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="CHATBOX_open nav-link-notify" href="#">
                                        <img src="{{asset('public/instructor')}}/img/icon/msg.svg" alt />
                                    </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <img src="{{asset('public/instructor')}}/img/client_img.png" alt="#" />
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <p>Neurologist</p>
                                        <h5>Dr. Robar Smith</h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="{{route('user_logout')}}">Student</a>
                                        <a href="{{route('user_profile')}}">My Profile</a>
                                        <a href="{{route('user_logout')}}">Log Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>