@include('frontend.include.header')
<div class="main__body__wrapp">
    <div class="header__banner__main header__banner__inner">
        <div class="image__box">
            <img alt="" src="{{asset('public/frontend')}}/assets/images/innerbanner.jpg" />
        </div>
        <div class="banner__content">
            <div class="container">
                <div class="row">
                    <h1>Contact<span>Us</span></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="what__you__wrapp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7">
                    <div class="video__wrapp__holder">

                        <img src="{{asset('public/frontend')}}/assets/images/video_holder.png" alt="">
                        <h3>How we started</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, </p>
                        </a>
                    </div>
                </div>


                <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                    <div class="search__holder__wrapp">
                        <form action="#" method="post">
                            @csrf
                            <div class="form__group">
                                <p>Name</p>
                                <input type="text" name="name" id="">
                            </div>
                            <div class="form__group">
                                <p>Email</p>
                                <input type="text" name="email" id="">
                            </div>
                            <div class="form__group">
                                <p>Phone</p>
                                <input type="text" name="phone" id="">
                            </div>
                            <div class="form__group">
                                <p>Subject</p>
                                <input type="text" name="subject" id="">
                            </div>
                            <div class="form__group">
                                <p>Message</p>
                                <textarea name="message"></textarea>
                            </div>

                            <div class="form__group">
                                <input type="submit" value="Submit">
                            </div>

                        </form>
                    </div>
                </div>

            </div>





        </div>
    </div>
</div>
</div>
</div>
@include('frontend.include.footer')