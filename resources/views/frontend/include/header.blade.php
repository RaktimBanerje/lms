<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('public/frontend')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('public/frontend')}}/assets/css/custom-style.css" rel="stylesheet" />
    <link href="{{asset('public/frontend')}}/assets/css/owl.css" rel="stylesheet" />
    <link href="{{asset('public/frontend')}}/assets/css/responsive.css" rel="stylesheet" />
    <link rel="icon" href="{{asset('public/frontend')}}/assets/images/favicon.png" sizes="32x32" />
    <!-- toastr css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <!-- autocomplete css -->
    <link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.min.css" rel="stylesheet">


    <title>@yield('meta_title') | FintekIn</title>
    <meta name="description" content="@yield('meta_desc')">
    <meta name="keywords" content="@yield('meta_keyword')">
</head>

<body>
    <div class="top__header top__header__container d-flex">
        <div class="logo__wrapp">
            <a href="{{route('index')}}">
                <img src="{{asset('public/frontend')}}/assets/images/logo.png" alt="" />
            </a>
        </div>
        <div class="top__header__rightwrapp ms-auto">
            <div class="search__wrapp">
                <form method="post" action="{{route('search_course')}}" class="form-search">
                    @csrf
                    <input type="text" id="search_course" class="search_course" name="course_name" placeholder="Search courses Here" />
                    <input type="submit" name="" id="" />
                </form>
            </div>
            <div class="holder__phone">
                <div class="account__wwrapp">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('public/frontend')}}/assets/images/account.png" />
                        </button>
                        <ul class="dropdown-menu">
                            @if(Auth::check())
                            <li>
                                <a class="dropdown-item" href="{{route('instructor.index')}}">Instructor</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('user_logout')}}">Logout</a>
                            </li>
                            @else
                            <li>
                                <a class="dropdown-item" href="{{route('user_login')}}">Login</a>
                            </li>
                            @endif
                            <li>
                                <a class="dropdown-item" href="{{route('user_register')}}">Register</a>
                            </li>
                            @if(Auth::check())
                            <li>
                                <a class="dropdown-item" href="{{route('user_profile')}}">My Profile</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="cart__wrapp">
                    <a href="{{route('view_cart')}}">
                        <img src="{{asset('public/frontend')}}/assets/images/cart.png" alt="" />
                        <span class="cart-count">0</span>
                    </a>
                </div>
                <div class="account__wwrapp langu">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ENG
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">eng</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Another action</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg static-top">
        <a href="#" class="gear">
            <i class="fa-solid fa-gear"></i>
        </a>
        <div class="container main__header__content">
            <button class="navbar-toggler navbar-toggler-right hamburger-menu order-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li>
                        <a href="productlist.php">Platform</a>
                    </li>
                    <li>
                        <a href="{{route('course')}}">Course</a>
                    </li>
                    <li>
                        <a href="productlist.php">Startups/Businesses</a>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="productlist.php">Services</a>
                    </li>
                    <li>
                        <a href="productlist.php">Government </a>
                    </li>
                    <li>
                        <a href="productlist.php">Resources I Teach on FintekIn</a>
                    </li>
                </ul>
            </div>
            <div class="contact__info">
                <div class="phone__wrapp">
                    <a href="{{route('contact_us')}}" class="justify-content-between">
                        <div class="num__wrapp">
                            <span>Join Now</span>
                        </div>
                        <div class="icon__box">
                            <img src="{{asset('public/frontend')}}/assets/images/send.png" alt="" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </nav>