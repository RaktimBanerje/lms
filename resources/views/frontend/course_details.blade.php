@section('meta_title',"$course->meta_title")
@section('meta_desc',"$course->meta_description")
@section('meta_keyword',"$course->meta_keywords")
@include('frontend.include.header')
<div class="main__body__wrapp">
    <div class="header__banner__main header__banner__inner">
        <div class="image__box">
            <img alt="" src="{{asset('public/frontend')}}/assets/images/innerbanner.jpg" />
        </div>
        <div class="banner__content">
            <div class="container">
                <div class="row">
                    <h1>{{$course->title}}</h1>
                </div>
            </div>
        </div>
    </div>
    @php
    $requirements = $course->requirements;
    $description = $course->description;
    $contact = $course->contact;

    @endphp
    <div class="br-wrapp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <h3>{{$course->title}}</h3>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 ms-auto d-flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" style="margin-left:-4rem!important;"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item m-auto">{{$course->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="what__you__wrapp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div class="holder__wrapp">
                        <h3>What you'll learn</h3>
                        <!-- Checking odd even div -->
                        <div class="row">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>You will learn how to leverage the power of Python to solve tasks.</li>
                                        <li>You will be able to use Python for your own work problems or personal projects.</li>
                                        <li>Learn to use Python professionally, learning both Python 2 and Python 3!</li>
                                        <li>Learn advanced Python features, like the collections module and how to work with timestamps!</li>
                                        <li>Understand complex topics, like decorators.</li>
                                        <li>Get an understanding of how to create GUIs in the Jupyter Notebook system!</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>You will build games and programs that use Python libraries.</li>
                                        <li>You will create a portfolio of Python based projects you can share.</li>
                                        <li>Create games with Python, like Tic Tac Toe and Blackjack!</li>
                                        <li>Learn to use Object Oriented Programming with classes!</li>
                                        <li>Understand how to use both the Jupyter Notebook and create .py files</li>
                                        <li>Build a complete understanding of Python from the ground up!</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course__content">
                        <h3>Course content</h3>

                        {{--<div class="accordion" id="accordionExample">
                            @foreach(explode(',',$course->course_content) as $list)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne{{$loop->iteration}}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$loop->iteration}}" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item {{$loop->iteration}}
                        </button>
                        </h2>
                        <div id="collapseOne{{$loop->iteration}}" class="accordion-collapse collapse {{ $loop->iteration == 1 ? 'show' : ''}} " aria-labelledby="headingOne{{$loop->iteration}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{$list}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>--}}

                @php $chapters = json_decode($course->chapters) @endphp

                <div id="accordionExample">
                    @foreach($chapters as $chapter)
                        <div class="border p-3 mb-3">
                            <h3>{{$chapter->chapter_name}}</h3>
                            <ul>
                                @foreach($chapter->lessions as $lession)
                                    <li>{{$lession->lession_name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div class="left__box product_data">
                <a href="#"><img src="{{asset('public/frontend')}}/assets/images/im_2.png" alt="" /></a>
                @if($course->selling_price != NULL)
                <h3>₹{{$course->selling_price}}</h3>
                @else
                <h4 class="free__wrapp">{{$course->course_type}}</h4>
                @endif
                @if($course->course_type != 'Free' )
                <div class="butto__wrapp">
                    <input type="hidden" value="{{$course->id}}" class="course_id">
                    <input type="hidden" id="qty" class="qty-input" value="1">
                    <a href="#" class="add_to_cart">Add to cart</a>
                    <!-- <a href="#" class="buy__wrapp">Buy now</a> -->
                </div>
                @endif
                <h4>This course includes:</h4>
                <ul>
                    @foreach(explode(',', $course->course_include) as $course)
                    <li>{!!$course!!}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<div class="reg__wrapp">
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                        Requirements
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                        Description
                    </button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p>
                        {!!$requirements!!}
                    </p>

                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    {!!$description!!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container free">
    <div class="row">
        <h2>FREE courses</h2>
        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 25, "autoheight":true, "lazyload":true, "nav":true, "dots":false, "autoplay":true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "450" :{ "items" : "2" } , "767" :{ "items" : "2" } , "1000":{ "items" : "4" }}}'>
            <div class="slide-item">
                <div class="image__box">
                    <a href="#" class="ms-auto">
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
                                <h4 class="free__wrapp">FREE</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('frontend.include.footer')