                        @php

                        use Illuminate\Support\Carbon;
                        use App\Models\User;
                        use Illuminate\Support\Facades\Auth;

                        $now = Carbon::now();
                        $profile_details = User::where('id', Auth::user()->id)->select('users.*')->first();
                        //dd($profile_details);
                        @endphp
                        @if(Auth::user()->u_type == 'admin')
                        <aside class="app-sidebar">
                            <div class="app-sidebar__logo">
                                <a class="header-brand" href="{{route('dashboard')}}">
                                    <img src="{{asset('public/admin')}}/assets/images/brand/logo_1.png" class="header-brand-img desktop-lgo" alt="Admintro logo">
                                    <img src="{{asset('public/admin')}}/assets/images/brand/logo_1.png" class="header-brand-img dark-logo" alt="Admintro logo">
                                    <img src="{{asset('public/admin')}}/assets/images/brand/logo_1.png" class="header-brand-img mobile-logo" alt="Admintro logo">
                                    <img src="{{asset('public/admin')}}/assets/images/brand/logo_1.png" class="header-brand-img darkmobile-logo" alt="Admintro logo">
                                </a>
                            </div>
                            <div class="app-sidebar__user">
                                <div class="dropdown user-pro-body text-center">
                                    <div class="user-pic">
                                        @if($profile_details->image)
                                        <img src="{{asset('public/admin/assets/user-profile/'.$profile_details->image)}}" alt="user-img" class="avatar-xl rounded-circle mb-1">
                                        @else
                                        <div class="widget-user-image mx-auto mt-5"><img alt="User Avatar" class="rounded-circle" src="{{asset('public/admin/assets/images/user-profile/avatar.png')}}"></div>
                                        @endif
                                    </div>
                                    <div class="user-info">
                                        <h5 class=" mb-1">{{Auth::user()->name}} <i class="ion-checkmark-circled  text-success fs-12"></i></h5>
                                        <span class="text-center user-semi-title">Time : {{$now->format('g:i A')}}</span><br>
                                        <span class="text-center user-semi-title">Date : {{date('d M, Y')}}</span>
                                    </div>
                                </div>
                            </div>
                            <ul class="side-menu app-sidebar3">
                                <li class="side-item side-item-category mt-4">Main</li>
                                <li class="slide">
                                    <a class="side-menu__item" href="{{route('dashboard')}}">
                                        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
                                        </svg>
                                        <span class="side-menu__label">Dashboard</span><span class="badge badge-danger side-badge">FintechIn</span></a>
                                </li>
                                {{--<li class="slide">
                                    <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                                        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                            <path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"></path>
                                        </svg>
                                        <span class="side-menu__label">Manage Pages</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li><a href="#" class="slide-item">Home</a></li>
                                        <li><a href="#" class="slide-item">About Us</a></li>
                                        <li><a href="#" class="slide-item">Courses</a></li>
                                        <li><a href="#" class="slide-item">Contact Us</a></li>
                                    </ul>
                                </li>--}}
                                <li class="slide">
                                    <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                                        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                            <path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"></path>
                                        </svg>
                                        <span class="side-menu__label">Page</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li><a href="{{route('home_page')}}" class="slide-item">Manage Home</a></li>
                                        <li><a href="{{route('cart_page')}}" class="slide-item">Manage Cart</a></li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                                        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                            <path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"></path>
                                        </svg>
                                        <span class="side-menu__label">Banner Management</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li><a href="{{route('add_banner')}}" class="slide-item">Add Banner</a></li>
                                        <li><a href="{{route('banner_list')}}" class="slide-item">Manage Banner</a></li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                                        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                            <path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"></path>
                                        </svg>
                                        <span class="side-menu__label">Course Management</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li><a href="{{route('add_course')}}" class="slide-item">Add Course</a></li>
                                        <li><a href="/course-list" class="slide-item">Course List</a></li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                                        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                            <path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"></path>
                                        </svg>
                                        <span class="side-menu__label">Coupon Management</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li><a href="{{route('add_coupon')}}" class="slide-item">Add Coupon</a></li>
                                        <li><a href="{{route('coupon_list')}}" class="slide-item">Manage Coupon</a></li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                                        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z" />
                                        </svg>
                                        <span class="side-menu__label">Settings</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li><a href="{{route('edit_setting')}}" class="slide-item">Header and Footer Setting</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </aside>
                        @endif
                        <!--aside closed-->