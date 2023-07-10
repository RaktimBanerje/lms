@include('frontend.include.header')
<div class="main__body__wrapp">
    <div class="header__banner__main header__banner__inner">
        <div class="image__box">
            <img alt="" src="{{asset('public/frontend')}}/assets/images/innerbanner.jpg" />
        </div>
        <div class="banner__content">
            <div class="container">
                <div class="row">
                    <h1>Regi<span>ster</span></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="what__you__wrapp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-11 col-xl-10 col-xxl-9">
                    <div class="form-container form-container--login row box-shadow border-radius--custom mx-1 mx-md-0">
                        <div class="col-12 col-md-12 col-lg-6 form-container__img-col d-flex align-items-center justify-content-center">
                            <img src="{{asset('public/frontend')}}/assets/images/login-illustration.svg" alt="Login Illustration" />
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 form-container__content-col px-3 py-4 p-md-4 p-lg-5 bg--white">
                            <h4 class="mb-4 register--holder">Register</h4>
                            <form action="{{route('user_register_action')}}" method="post" class="form login-form" id="loginForm">
                                @csrf
                                <div class="form__field">
                                    <input type="text" name="name" value="{{old('name')}}" class="form__input" placeholder="Name*" />
                                    @error('name')
                                    <span class="text text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form__field">
                                    <input type="text" name="email" value="{{old('email')}}" class="form__input" placeholder="Email*" />
                                    @error('email')
                                    <span class="text text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form__field">
                                    <input type="text" name="phone" value="{{old('phone')}}" class="form__input" placeholder="Phone*" />
                                    @error('phone')
                                    <span class="text text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form__field mb-4">
                                    <input type="password" name="password" value="{{old('password')}}" class="form__input" placeholder="Password*" />
                                    @error('password')
                                    <span class="text text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form__field mb-4">
                                    <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form__input" placeholder="Confirm Password*" />
                                </div>
                                <button type="submit" class="button button-primary d-block w-100">
                                    Register
                                </button>
                            </form>
                            <p class="text--para mt-3 mb-0 text-center">
                                Don't have an account?
                                <a href="{{route('user_login')}}" class="redirecting-link--register fw-semibold text-decoration-underline">Sign In
                                    Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.include.footer')
