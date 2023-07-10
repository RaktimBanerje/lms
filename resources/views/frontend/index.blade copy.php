@section('meta_title',"$home->meta_title")
@section('meta_desc',"$home->meta_desc")
@section('meta_keyword',"$home->meta_keyword")
@include('frontend.include.header')
<div class="main__body__wrapp">
    <div class="header__banner__main">
        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 25, "autoheight":true, "lazyload":true, "nav":true, "dots":false, "autoplay":true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "450" :{ "items" : "1" } , "767" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
            @if(isset($banners))
            @foreach($banners as $banner)
            <div class="slide-item">
                <div class="image__box">
                    <a href="#" class="ms-auto">
                        <img src="{{asset('public/admin/assets/banner/'.$banner->image)}}" alt="" />
                    </a>
                </div>
                <div class="banner__content">
                    <div class="container">
                        <div class="col-lg-5 col-md-12 col-sm-12 p-0">
                            <h1>{{$banner->heading}}</span></h1>
                            <a href="{{$banner->button_url}}" class="get__star">Get started Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    <div class="coun__wrapp">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>{{$home->count_no_1}}</h2>
                    <p>{{$home->heading_1}}</p>
                </div>
                <div class="col">
                    <h2>{{$home->count_no_2}}</h2>
                    <p>{{$home->heading_2}}</p>
                </div>
                <div class="col">
                    <h2>{{$home->count_no_3}}</h2>
                    <p>{{$home->heading_3}}</p>
                </div>
                <div class="col">
                    <h2>{{$home->count_no_4}}</h2>
                    <p>{{$home->heading_4}}</p>
                </div>
                <div class="col">
                    <h2>{{$home->count_no_5}}</h2>
                    <p>{{$home->heading_5}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="tab__wrapp">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <?php $i = 0; ?>
            @if(isset($category))
            @foreach($category as $cat)
            <li class="nav-item" role="presentation">
                <button class="nav-link <?php if ($i == 0) {
                                            echo "active";
                                        }
                                        $i++; ?>" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#tab_{{$i}}" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    <i class="fa-solid fa-arrow-right-long"></i>
                    {{$cat->course_category}}
                </button>
            </li>
            @endforeach
            @endif
        </ul>
        <div class="container">
            <div class="row">
                <div class="tab-content mt-5 mb-5" id="pills-tabContent">
                    <?php $i = 0; ?>
                    @foreach($course_list as $item)
                    <div class="tab-pane fade <?php if ($i == 0) {
                                                    echo "active show";
                                                }
                                                $i++; ?>" id="tab_{{$i}}" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <h2>POPULAR courses</h2>
                        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 25, "autoheight":true, "lazyload":true, "nav":true, "dots":false, "autoplay":true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "450" :{ "items" : "2" } , "767" :{ "items" : "2" } , "1000":{ "items" : "4" }}}'>

                            @if(isset($item))
                            @foreach($item as $list)
                            <div class="slide-item {{$list->course_cat_id}}">
                                <div class="course-card position-relative {{$list->course_cat_id}}">
                                    <div class="course-card__main">
                                        <div class="image__box">
                                            <a href="{{route('course_details',$list->course_slug)}}" class="ms-auto">
                                                <img src="{{asset('public/admin/assets/course/'.$list->image)}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="banner__content">
                                            <div class="container">
                                                <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                                                    <a href="{{route('course_details',$list->course_slug)}}">
                                                        <h3>
                                                            {{$list->title}}
                                                        </h3>
                                                        <p>{{$list->created_by}}</p>
                                                        <span class="rating d-flex">
                                                            <span>4.4</span>
                                                            <span class="star__wrapp">
                                                                <img src="{{asset('public/frontend')}}/assets/images/star.png" alt="" />
                                                            </span>
                                                        </span>
                                                        @if($list->course_type != 'Free')
                                                        <h4 class="free__wrapp">₹{{$list->selling_price}}</h4>
                                                        @else
                                                        <h4 class="free__wrapp">Free</h4>
                                                        @endif
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-card__outer product_data">
                                        <div class="inner-block">
                                            <a href="{{route('course_details',$list->course_slug)}}">
                                                <h3>{{$list->title}}</h3>
                                                <input type="hidden" value="{{$list->id}}" class="course_id">
                                            </a>
                                            <p>
                                                {{$list->heading}}
                                            </p>
                                            <ul>
                                                @foreach(explode(',', $list->short_desc) as $list)
                                                <li>
                                                    {{$list}}
                                                </li>
                                                @endforeach
                                            </ul>
                                            <div class="addtocart__wrapp">
                                                <input type="hidden" id="qty" class="qty-input" value="1">
                                                <a href="#" class="cart add_to_cart">Add To Cart</a>
                                                <a href="#" class="heart"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="featured__wrapp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Featured</h2>
                </div>
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 25, "autoheight":true, "lazyload":true, "nav":true, "dots":false, "autoplay":true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "450" :{ "items" : "2" } , "767" :{ "items" : "2" } , "1000":{ "items" : "4" }}}'>
                    <div class="slide-item">
                        <div class="image__box">
                            <a href="{{route('course')}}" class="ms-auto">
                                <img src="{{asset('public/frontend')}}/assets/images/freeall.png" alt="" />
                            </a>
                        </div>
                        <div class="banner__content">
                            <div class="container">
                                <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                                    <a href="#">
                                        <h3>Trainings on digital financial Ecosystem</h3>
                                        <p>Edwin Diaz,Coding Solutions</p>
                                        <span class="rating d-flex">
                                            <span>4.4</span>
                                            <span class="star__wrapp">
                                                <img src="{{asset('public/frontend')}}/assets/images/star.png" alt="" />
                                            </span>
                                        </span>
                                        <h4 class="free__wrapp">$59</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="become__an__instructor">
        <div class="col-sm-12">
            <h2>Become an instructor</h2>
        </div>
        <div class="row m-0 p-0">
            <div class="col-sm-6 p-0">
                <div class="text__holder">
                    <img src="{{asset('public/frontend')}}/assets/images/logo_1.png" alt="" />
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                        ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                        ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit
                    </p>
                    <a href="#">Start teaching today</a>
                </div>
            </div>

            <div class="col-sm-6 p-0">
                <div class="text__holderright">
                    <div class="im__holder d-flex">
                        <img src="{{asset('public/frontend')}}/assets/images/all_1.png" alt="" class="f-image" />
                        <img src="{{asset('public/frontend')}}/assets/images/all_1.png" alt="" />
                    </div>
                    <div class="im__holder d-flex">
                        <img src="{{asset('public/frontend')}}/assets/images/all_1.png" alt="" class="f-image" />
                        <img src="{{asset('public/frontend')}}/assets/images/all_1.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map__holder">
        <div class="row m-0 p-0">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14736.221804284312!2d88.48880994999999!3d22.577029300000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1661941179011!5m2!1sen!2sin" width="100%" height="708" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0 get">
                <div class="form__wrapp">
                    <h2>get in touch</h2>

                    <form action="" class="f-all">
                        <div class="row">
                            <div class="col-sm-6 mb-5">
                                <p>Name</p>
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="col-sm-6 mb-5">
                                <p>Email</p>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="col-sm-6 mb-5">
                                <p>Phone</p>
                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-sm-6 mb-5">
                                <p>Subject</p>
                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                            </div>
                            <div class="col-sm-12">
                                <p>Message</p>
                                <textarea class="form-control" name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <input type="submit" name="" id="" value="SUBMIT" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.include.footer')