<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield ('titre')
    </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialdesignicons.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css')}}" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/selectize.css')}}" />

    <!--Slider-->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />

</head>





 <header id="topnav" class="defaultscroll scroll-active">
        <!-- Tagline STart -->
        <div class="tagline">
            <div class="container">
                <div class="float-left">
                    <div class="phone">
                        <i class="mdi mdi-phone-classic"></i> +1 800 123 45 67
                    </div>
                    <div class="email">
                        <a href="#">
                            <i class="mdi mdi-email"></i> Support@mail.com
                        </a>
                    </div>
                </div>
                <div class="float-right">
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i>Benny Simpson</a></li>
                        <li class="list-inline-item">
                            <select id="select-lang" class="demo-default">
                                <option value="">Language</option>
                                <option value="4">Anglais</option>
                                <option value="3">Français</option>
                                <option value="5">Arabe</option>
                            </select>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Tagline End -->

        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="index.html" class="logo">
                    <img src="images/logo-light.png" alt="" class="logo-light" height="18" />
                    <img src="images/logo-dark.png" alt="" class="logo-dark" height="18" />
                </a>
            </div>                 
            <div class="buy-button">
                           <a href="login.html"><i ></i> Se connecter</a>&nbsp;&nbsp;&nbsp;
                <a href="signup.html" class="btn btn-primary"><i class="mdi mdi-account mr-2"></i> S'inscrire</a>
            </div><!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
    
            <div id="navigation">
                <!-- Navigation Menu-->   
                <ul class="navigation-menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li class="has-submenu">
                        <a href="javascript:void(0)">Jobs</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="job-list.html">Job List</a></li>
                            <li><a href="job-grid.html">Job Grid</a></li>
                            <li><a href="job-details.html">Job Details</a></li>
                            <li><a href="job-details-2.html">Job Details-2</a></li>
                        </ul>
                    </li>
    
                    <li class="has-submenu">
                        <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="faq.html">Faqs</a></li>
                            <li><a href="pricing.html">Pricing plans</a></li>
                            <li class="has-submenu"><a href="javascript:void(0)"> Candidates</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="candidates-listing.html">Candidates Listing</a></li>
                                    <li><a href="candidates-profile.html">Candidates Profile</a></li>
                                    <li><a href="create-resume.html">Create Resume</a></li>
                                </ul>  
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)"> Blog</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="blog-grid.html">Blogs</a></li>
                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>  
                            </li>
                            <li class="has-submenu"><a href="{{asset('javascript:void(0)')}}"> Employers</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="employers-list.html">Employers List</a></li>
                                    <li><a href="company-detail.html">Company Detail</a></li>
                                </ul>  
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)"> User Pages</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="signup.html">Signup</a></li>
                                    <li><a href="recovery_passward.html">Forgot Password</a></li>
                                </ul>  
                            </li>
                            <li><a href="components.html"> Components</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">contact</a>
                    </li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
        <!--end end-->
    </header><!--end header-->



@yield('content')






      <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="{{asset('javascript:void(0)')}}"><img src="images/logo-light.png" height="20" alt=""></a>
                    <p class="mt-4">At vero eos et accusamus et iusto odio dignissim os ducimus qui blanditiis praesentium</p>
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Company</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Media & Press</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Career</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Blog</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Pricing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Marketing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> CEOs </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Agencies</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Our Apps</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Resources</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Support</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Privacy Policy</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Terms</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Accounting </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Billing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> F.A.Q.</a></li>
                    </ul>
                </div>
            
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title f-17">Business Hours</p>
                    <ul class="list-unstyled text-foot mt-4 mb-0">
                        <li>Monday - Friday : 9:00 to 17:00</li>
                        <li class="mt-2">Saturday : 10:00 to 15:00</li>
                        <li class="mt-2">Sunday : Day Off (Holiday)</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>

    <!-- selectize js -->
    <script src="{{asset('js/selectize.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/counter.int.js')}}"></script>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
    </html> 
    