<!DOCTYPE html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Larocheh Handmade</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="keywords" content="HTML,CSS,JavaScript,laravel,handmade laravel,handmade,giftshandmade,Person handmade, made with love, Garden Decor,Bouquets handmade,Accessory">
    <meta name="description" content="The most beautiful handmade products and gifts handmade that were made with love are with us">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png')}}">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css')}}">

@yield('css')


    <link rel="stylesheet" href="../../cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style68b3.css?ver=1')}}">


     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <style>
        .deplaynone{
            display:none;
        }
    </style>
</head>

@php
    if (Auth::user()) {
        $admin = Auth::user()->admin;
    } else {
        $admin = 'user';
    }
    @endphp


<body style="padding-top: 0;">


    <!-- Header Section Start -->
    <div class="header-section section bg-white d-none d-xl-block">
        <div class="container">
            <div class="row row-cols-lg-3 align-items-center">

                <!-- Header Language & Currency Start -->
                @yield('addpost')
                {{-- <div class="col">
                    <div class="offcanvas-social">
                        <a data-ghost="Click-AddPost" class="addAds orangeBtn clear taRight fLeft relative" href="{{ url('home') }}" style="width: 270px ;background-color:#72A499;color:#fff"><i class="fas fa-camera" style="font-size:20px"> <span class="freeBg absolute">
                           ADD POST</span></i></a>
                    </div>
                </div> --}}
                <!-- Header Language & Currency End -->

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo justify-content-center" style="padding-top:5px">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo/logofooter.png')}}" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col">
                    <div class="header-tools justify-content-end">
                        {{-- <div class="header-login">
                            <a href="my-account.html"><i class="fal fa-user"></i>&nbsp; Login | Register</a>
                        </div> --}}
                                            <!-- Right Side Of Navbar -->
                                            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                                                <div class="container">
                                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                        <!-- Left Side Of Navbar -->
                                                        <ul class="navbar-nav mr-auto">
                                    
                                                        </ul>
                                    
                                                        <!-- Right Side Of Navbar -->
                                                        <ul class="navbar-nav ml-auto">
                                                            <!-- Authentication Links -->
                                                            @guest
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                                </li>
                                                                @if (Route::has('register'))
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                                    </li>
                                                                @endif
                                                            @else
                                                                <li class="nav-item dropdown">
                                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                                    </a>
                                    
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                                        <a class="dropdown-item" style="background-color: #F2E1E3" href=" @if ($admin == 'superadmin' || $admin == 'admin'){{ route('admindash') }} @else @if ($admin == 'user'){{ route('profile') }} @endif @endif">Profile </a>
                                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                                           onclick="event.preventDefault();
                                                                                         document.getElementById('logout-form').submit();">
                                                                            {{ __('Logout') }}
                                                                        </a>
                                    
                                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                            @csrf
                                                                        </form>
                                                                    </div>
                                                                </li>
                                                            @endguest
                                                        </ul>
                                                    </div>
                                                </div>
                                            </nav>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>

        <!-- Site Menu Section Start -->
        <div class="site-menu-section section border-top">
            <div class="container">
                <div class="header-categories">
                    <button class="category-toggle" style="background-color: #F2E1E3;color: black;"><i
                            class="fal fa-bars"></i> Browse Categories</button>
                    <ul class="header-category-list">
                        <li><a href="#"><img src="{{ asset('assets/images/icons/cat-icon-1.png')}}" alt=""> Knitting</a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/icons/cat-icon-2.png')}}" alt=""> Sewing</a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/icons/cat-icon-3.png')}}" alt=""> Gifts</a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/icons/cat-icon-4.png')}}" alt=""> Special Occasions</a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/icons/cat-icon-5.png')}}" alt=""> Decor Resin</a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/icons/cat-icon-7.png')}}" alt=""> Garden decor</a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/icons/cat-icon-8.png')}}" alt=""> Accessories</a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/icons/cat-icon-9.png')}}" alt=""> Candles</a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/icons/cat-icon-10.png')}}" alt=""> Party Planner</a></li>
                    </ul>
                </div>
                <nav class="site-main-menu justify-content-center menu-height-60">
                    <ul>
                        <li><a href="{{ url('/') }}"><span class="menu-text">Home</span></a>
                        </li>
                        <li><a href="{{ url('allpost') }}"><span class="menu-text">All Posts</span></a>
                        </li>
                        {{-- <li><a href="{{ url('ourteem') }}"><span class="menu-text">OUR Family</span></a>
                        </li> --}}
                        <li><a href="{{ url('blog') }}"><span class="menu-text">Blog</span></a>
                        </li>
                    </ul>
                </nav>

                <!-- Search Start -->
                <div class="header-call">
                    <div class="header2-search">
                        <form action="{{ route('search') }}" method="GET" role="search">
                            {{ csrf_field() }}
                            <input type="search" name="search" placeholder="Search..." value="">
                            <button class="btn" type="submit"></button>
                        </form>
                    </div>
                </div>
                <!-- Search End -->
            </div>
        </div>
        <!-- Site Menu Section End -->

    </div>
    <!-- Header Section End -->

    <!-- Header Sticky Section Start -->
    <div class="sticky-header header-menu-center section bg-white d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo/logo222.png')}}" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Search Start -->
                <div class="col d-none d-xl-block">
                    <nav class="site-main-menu justify-content-center">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="menu-text">Home</span></a>
                            </li>
                            <li><a href="{{ url('allpost') }}"><span class="menu-text">All Posts</span></a>
                            </li>
                            {{-- <li><a href="{{ url('ourteem') }}"><span class="menu-text">OUR Family</span></a>
                            </li> --}}
                            <li><a href="{{ url('blog') }}"><span class="menu-text">Blog</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Search End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        {{-- <div class="header-login">
                            <a href="my-account.html"><i class="fal fa-user"></i></a>
                        </div>
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                        </div> --}}
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>

    </div>
    <!-- Header Sticky Section End -->
    <!-- Mobile Header Section Start -->
    <div class="mobile-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo/logo222.png')}}" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        {{-- <div class="header-login d-none d-sm-block">
                            <a href="my-account.html"><i class="fal fa-user"></i></a>
                        </div>
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                        </div> --}}
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->

    <!-- Mobile Header Section Start -->
    <div class="mobile-header sticky-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo/logo222.png')}}" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        {{-- <div class="header-login d-none d-sm-block">
                            <a href="my-account.html"><i class="fal fa-user"></i></a>
                        </div>
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                        </div> --}}
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->
    <!-- OffCanvas Search Start -->
    <div id="offcanvas-search" class="offcanvas offcanvas-search">
        <div class="inner">
            <div class="offcanvas-search-form">
                <button class="offcanvas-close">×</button>
                <form action="#">
                    <div class="row mb-n3">
                        <div class="col-lg-8 col-12 mb-3"> <div class="header-call">
                            <div class="header2-search">
                                <form action="{{ route('search') }}" method="GET" role="search">
                                    {{ csrf_field() }}
                                    <input type="search" name="search"  value="" placeholder="Search...">
                                    <button class="btn" type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div></div>
                        <div class="col-lg-4 col-12 mb-3">
                            <select class="search-select select2-basic">
                                <option value="0">All Categories</option>
                                <option value="kids-babies">Kids &amp; Babies</option>
                                <option value="home-decor">Home Decor</option>
                                <option value="gift-ideas">Gift ideas</option>
                                <option value="kitchen">Kitchen</option>
                                <option value="toys">Toys</option>
                                <option value="kniting-sewing">Kniting &amp; Sewing</option>
                                <option value="pots">Pots</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <p class="search-description text-body-light mt-2"> <span># Type at least 1 character to search</span>
                <span># Hit enter to search or ESC to close</span></p>

        </div>
    </div>
    <!-- OffCanvas Search End -->

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="offcanvas-menu-search-form">
                <form action="{{ route('search') }}" method="GET" role="search">
                    {{ csrf_field() }}
                    <input type="search" name="search"  value="" placeholder="Search...">
                    <button class="btn" type="submit"><i class="far fa-search"></i></button>
                </form>
            </div>
            <div class="offcanvas-menu">
                <ul>
                    <li><a href="{{ url('/') }}"><span class="menu-text">Home</span></a>
                    </li>
                    <li><a href="{{ url('allpost') }}"><span class="menu-text">All Posts</span></a>
                    </li>
                    {{-- <li><a href="{{ url('ourteem') }}"><span class="menu-text">OUR Family</span></a>
                    </li> --}}
                    <li><a href="{{ url('blog') }}"><span class="menu-text">Blog</span></a>
                    </li>
                </ul>
            </div>
            <div class="offcanvas-buttons">
                <div class="header-tools">
                    <div class="header-login">
                        <a href="my-account.html"><i class="fal fa-user"></i></a>
                    </div>
                </div>
            </div>
            <div class="offcanvas-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- OffCanvas Search End -->

    @yield('maincon')

    <!--     footer-section-start -->
    <div class="footer1-section section section-padding">
        <div class="container">
            <div class="row text-center row-cols-1">

                <div class="footer1-logo col text-center">
                    <img src="{{ asset('assets/images/logo/logofooter.png')}}" alt="">
                </div>

                <div class="footer1-menu col">
                    <ul class="widget-menu justify-content-center">
                        <li><a href="{{ url('allpost') }}">Posts</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="{{ url('privacy') }}"> Privacy Policy</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="footer1-subscribe d-flex flex-column col">
                    <form id="mc-form" class="mc-form widget-subscibe">
                        <input id="mc-email" autocomplete="off" type="email" placeholder="Enter your e-mail address">
                        <button id="mc-submit" class="btn btn-dark">subscibe</button>
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts text-centre">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                    </div><!-- mailchimp-alerts end -->
                </div>
                <div class="footer1-social col">
                    <ul class="widget-social justify-content-center">
                        <li class="hintT-top" data-hint="Twitter"> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="hintT-top" data-hint="Facebook"> <a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li class="hintT-top" data-hint="Instagram"> <a href="https://www.instagram.com/"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li class="hintT-top" data-hint="Youtube"> <a href="https://www.youtube.com/"><i
                                    class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="footer1-copyright col">
                    <p class="copyright">&copy; 2020 learts. All Rights Reserved | <strong>(+00) 123 567990</strong> |
                        <a href="mailto:contact@learts.com">contact@learts.com</a></p>
                </div>

            </div>
        </div>
    </div>
    
    <!--     footer-section-end -->


    <!-- JS
============================================ -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{ asset('assets/js/vendor/vendor.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/plugins.min.js')}}"></script>

    <!-- Main Activation JS -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/jquery.flexslider-min.js')}}"></script>
    <script src="{{ asset('asset/js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/custom.js')}}"></script>

    {{-- script 2 --}}
    @yield('js')

</body>
</html>
