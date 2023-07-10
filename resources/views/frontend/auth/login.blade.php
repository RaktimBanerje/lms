@include('frontend.include.header')
<div class="main__body__wrapp">
    <div class="header__banner__main header__banner__inner">
        <div class="image__box">
            <img alt="" src="{{asset('public/frontend')}}/assets/images/innerbanner.jpg" />
        </div>
        <div class="banner__content">
            <div class="container">
                <div class="row">
                    <h1>Log<span>In</span></h1>
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
                            <h4 class="text--heading font--serif mb-4">Login</h4>
                            <form action="{{route('user_login_action')}}" method="post" class="form login-form" id="loginForm">
                                @csrf
                                <div class="form__field">
                                    <input type="text" name="email" class="form__input" required="" placeholder="Email" />
                                    @error('email')
                                    <span class="text-danger">{{$$message}}</span>
                                    @enderror
                                </div>
                                <div class="form__field mb-4">
                                    <input type="password" name="password" class="form__input" required="" placeholder="Password*" />
                                    @error('password')
                                    <span class="text-danger">{{$$message}}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="button button-primary d-block w-100">
                                    Login
                                </button>
                            </form>
                            <p class="text--para mt-3 mb-0 text-center">
                                Don't have an account?
                                <a href="{{route('user_register')}}" class="redirecting-link--register fw-semibold text-decoration-underline">Register
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