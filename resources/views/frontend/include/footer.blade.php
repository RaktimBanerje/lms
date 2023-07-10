 <footer>
     <div class="address__wrapper">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                     <div class="map__holderone">
                         <div class="location__holder">
                             <i class="fa-solid fa-location-dot"></i>
                         </div>
                         <div class="address__wrap">
                             <p>Lorem ipsum dolor sit amet - 403517, India</p>
                         </div>
                     </div>
                 </div>

                 <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <div class="map__holderone">
                         <div class="location__holder">
                             <i class="fa-solid fa-location-dot"></i>
                         </div>
                         <div class="address__wrap">
                             <a href="#">ipsumdolor@intekin.com</a>
                         </div>
                     </div>
                 </div>

                 <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                     <div class="map__holderone">
                         <div class="location__holder">
                             <i class="fa-solid fa-location-dot"></i>
                         </div>
                         <div class="address__wrap">
                             <a href="#">1234 6547 9874</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="mid__holder">
         <div class="container">
             <div class="row">
                 <div class="col-sm-4 offset-1">
                     <div class="footer__box">
                         <a href="#"><img src="{{asset('public/frontend')}}/assets/images/footer_logo.png" alt="" /></a>
                         <div class="subcri__wrapper">
                             <p>Sign Up Our Newsletter</p>
                             <input type="text" name="" placeholder="Your Email" />
                             <input type="submit" />
                         </div>
                     </div>
                 </div>

                 <div class="col-sm-2 offset-1">
                     <div class="footer__box">
                         <ul>
                             <li>
                                 <a href="#">What's new</a>
                             </li>
                             <li>
                                 <a href="#">New Courses</a>
                             </li>
                             <li>
                                 <a href="#">Partners</a>
                             </li>
                             <li>
                                 <a href="#">Terms of Use</a>
                             </li>
                         </ul>
                     </div>
                 </div>

                 <div class="col-sm-2">
                     <div class="footer__box">
                         <ul>
                             <li>
                                 <a href="#">Our Team</a>
                             </li>
                             <li>
                                 <a href="#">Course Catalog</a>
                             </li>
                             <li>
                                 <a href="#">License Our Content</a>
                             </li>
                             <li>
                                 <a href="#">Community</a>
                             </li>
                         </ul>
                     </div>
                 </div>

                 <div class="col-sm-2">
                     <div class="footer__box">
                         <ul>
                             <li>
                                 <a href="#">Blog</a>
                             </li>
                             <li>
                                 <a href="#">Teach</a>
                             </li>
                             <li>
                                 <a href="#">Partners</a>
                             </li>
                             <li>
                                 <a href="#">Privacy Policy</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="down__footer">
         © 2022 fintekin | designed by think surf media All Rights Reserved
     </div>
 </footer>
 <script src="{{asset('public/frontend')}}/assets/js/jquery.min.js"></script>
 <script src="{{asset('public/frontend')}}/assets/js/bootstrap.bundle.min.js"></script>
 <script src="https://kit.fontawesome.com/2d537fef4a.js" crossorigin="anonymous"></script>
 <script src="{{asset('public/frontend')}}/assets/js/core.js"></script>
 <script src="{{asset('public/frontend')}}/assets/js/owl.js"></script>
 <script src="{{asset('public/frontend')}}/assets/js/script.js"></script>
 <script src="{{asset('public/frontend')}}/assets/js/custom.js"></script>
 <!-- toastr js -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <script src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>

 <!-- autocomplete js -->
 <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
 <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
 <script>
     (function() {
         $(".hamburger-menu").on("click", function() {
             $(".bar").toggleClass("animate");
         });
     })();
 </script>
 @if(Session::has('success'))
 <script>
     toastr.success('{{ Session::get("success") }}');
 </script>
 @elseif(Session::has('error'))
 <script>
     toastr.error('{{ Session::get("error") }}');
 </script>
 @endif
 </body>

 </html>