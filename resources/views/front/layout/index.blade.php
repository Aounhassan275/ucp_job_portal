<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Job board HTML-5 Template </title>
         @yield('title')
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('front/assets/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset('front/assets/css/price_rangs.css')}}">
            <link rel="stylesheet" href="{{asset('front/assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('front/assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('front/assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('front/assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('front/assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('front/assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
            @yield('css')
            @toastr_css
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('front/assets/img/logo/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{url('/')}}">
                                    <img src="{{asset('front/assets/img/logo/logo.png')}}" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{url('about_us')}}">About</a></li>
                                            <li><a href="#">Browse</a>
                                                <ul class="submenu">
                                                    <li  class="{{Request::is('jobs')?'active':''}}"><a href="{{url('jobs')}}">Jobs</a>
					
                                                    </li>
                                                    <li class="{{Request::is('category')?'active':''}}"><a href="{{url('category')}}">Categories</a>
                                                    </li>
                                                    <li class="{{Request::is('candidates')?'active':''}}"><a href="{{url('candidates')}}">Candidate</a>
                                                    </li>
                                                    <li class="{{Request::is('institutes')?'active':''}}"><a href="{{url('institutes')}}">Institute</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('blogs')}}">Blog</a></li>
                                            <li><a href="{{url('contact_us')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="{{url("candidate/login")}}" class="btn head-btn2">Candidate Login</a>
                                    <a href="{{url("institute/login")}}" class="btn head-btn2">Institue Login</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
    <main>
        @yield('contents')
       

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>About Us</h4>
                                 <div class="footer-pera">
                                     <p>We are providing plateform To Candidate & Institute.</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address : University Road,Sargodha.</p>
                                    </li>
                                    <li><a href="#">Phone : +923 000 0000000</a></li>
                                    <li><a href="#">Email : dummy@mail.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="{{url('jobs')}}">Browse Jobs</a>
                                 
                                    <li><a href="{{url('category')}}">Browse Categories</a>
                                    </li>
                                    <li><a href="{{url('candidates')}}">Browse Candidate</a>
                                    </li>
                                    <li ><a href="{{url('institutes')}}">Browse Institute</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="{{url('blogs')}}">Blog</a></li>
                                    <li><a href="{{url('about_us')}}">About Us</a></li>
                                    <li ><a href="{{url('contact_us')}}">Contact Us</a></li>
                                    <li><a href="{{url('candidate/ogin')}}">Candidate Login</a></li>
                                    <li><a href="{{url('institute/login')}}">Institute Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  -->
               <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <!-- logo -->
                        <div class="footer-logo mb-20">
                        <a href="index.html"><img src="{{asset('front/assets/img/logo/logo2_footer.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="footer-tittle-bottom">
                        <span>5000+</span>
                        <p>Talented Hunter</p>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-tittle-bottom">
                            <span>451</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <!-- Footer Bottom Tittle -->
                        <div class="footer-tittle-bottom">
                            <span>568</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fas fa-globe"></i></a>
                                 <a href="#"><i class="fab fa-behance"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

  <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('front/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('front/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('front/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('front/assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('front/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('front/assets/js/slick.min.js')}}"></script>
        <script src="{{asset('front/assets/js/price_rangs.js')}}"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('front/assets/js/wow.min.js')}}"></script>
		<script src="{{asset('front/assets/js/animated.headline.js')}}"></script>
        <script src="{{asset('front/assets/js/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('front/assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('front/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('front/assets/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{asset('front/assets/js/contact.js')}}"></script>
        <script src="{{asset('front/assets/js/jquery.form.js')}}"></script>
        <script src="{{asset('front/assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('front/assets/js/mail-script.js')}}"></script>
        <script src="{{asset('front/assets/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('front/assets/js/plugins.js')}}"></script>
        <script src="{{asset('front/assets/js/main.js')}}"></script>
        <script src="{{asset('assets/js/toastr.js')}}"></script>
        @toastr_render
        @toastr_js
    </body>
</html>