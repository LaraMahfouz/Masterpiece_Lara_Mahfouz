@extends('layouts/publicApp')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" id="colors">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap&subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
@endsection
@section('maincon')
@section('addpost')
<div class="col">
    <div class="offcanvas-social">
        <a data-ghost="Click-AddPost" class="addAds orangeBtn clear taRight fLeft relative" href="{{ url('home') }}" style="width: 240px ;background-color:#72A499;color:#fff">
            <i class="fas fa-camera" style="font-size:20px"><span class="utf_closed" style="
                background: #feffba;
                float: left;
                position: absolute;
                transform: rotate(-45deg);
                left: -5px;
                top: 40px;
                text-align: center;
                width: 90px;
                font-size: 12px;
                margin: 0;
                z-index: 999;
                color: rgb(43, 43, 43);
                font-weight: 600;
                line-height: 28px;
                border-radius: 20PX 60px 10px 14PX;">FREE</span>
           ADD POST</i></a>
    </div>
</div>  
@endsection
@section('maincon')


 <!-- Slider main container Start -->
 {{-- <div class="section section-fluid bg-white">
    <div class="container-fluid">
        <div class="home3-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="home3-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-image="assets/images/slider/home3/slide-1.jpg">
                    <div class="container">
                        <div class="home3-slide-content">
                            <h5 class="sub-title">Handicraft shop</h5>
                            <h2 class="title">Inspired by Your <br>Sweetest Dreams</h2>
                            <div class="link"><a href="{{ url('allpost') }}" class="btn btn-black btn-hover-primary">Show Posts </a></div>
                        </div>
                    </div>
                </div>
                <div class="home3-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-image="assets/images/slider/home3/slide-3.jpg">
                    <div class="container">
                        <div class="home3-slide-content">
                            <h5 class="sub-title">Handicraft shop</h5>
                            <h2 class="title">Decorative Box <br>for New Aspiration</h2>
                            <div class="link"><a href="{{ url('allpost') }}" class="btn btn-black btn-hover-primary">Show Posts</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home3-slider-prev swiper-button-prev"><i class="ti-angle-left"></i></div>
            <div class="home3-slider-next swiper-button-next"><i class="ti-angle-right"></i></div>
        </div>
    </div> --}}
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="{{ asset('assets/images/bg/page-title-1.jpg')}}" style="margin-bottom: 5%">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        <h1 class="title" style="text-align: left">Blog</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('blog') }}">Blog</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

<!-- Slider main container End -->

<div class="col-xxl-6 col-xl-8 col-12 learts-mb-10" style="padding-top:7%;">
    <div class="learts-blockquote" style="width:100%;margin-top:25%;margin-left:25%">
        <div class="innerbg">
            <h2 class="title">LAROCHEH is an online shop for handicrafts and arts.</h2>
            <div class="desc">
                <p>Crafting beautiful stuff with our own hands and the help from useful tools is a wonderful process, where you can enjoy yourself while pulling out some ideas and busy perfecting your work. We provide high-end unique vases, wall arts, home accessories, and furniture pieces.</p>
            </div>
        </div>
    </div>
</div> 
 <!-- Section Title Start -->
 <div class="section-title2 text-center">
    <h2 class="title title-icon-both" style="margin-top:8%">BLOGS</h2>
    <p>You don’t need expensive ornaments to make your house look more fashionable.</p>
</div>
<!-- Section Title End -->
  <!-- product what we offer-->
  <div class="product-what-we-offer pt-2">
    <div class="product-what-we-offer-left">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 product-what-we-offer-img">
                    <img src="{{ asset('imager/what-we-offer/product_WhatWeOffe1.jpg')}}" alt="">
                    <p class="rotated-text-left">Home Decor</p>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class=" product-what-we-offer-content">
                        <h2>EEASY COLORFUL SUCCULENT</h2>
                        <p>It’s spring time, and per usual, I’m all about any little project that feels like a sweet jolt of color and freshness. And we’re definitely all about baby succulents, any time of the year. I’ve been looking to add a few babies we’ve sprouted to their own little containers for now, and when I saw these little guys, I knew it would be fun to add a little custom color to some containers we had.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="product-what-we-offer-right">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 product-what-we-offer-img on-top">
                    <img src="{{ asset('imager/what-we-offer/product_WhatWeOffe2.jpg')}}" alt="">
                    <p class="rotated-text-right">Knitting</p>
                </div>

                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="product-what-we-offer-content">
                        <h2>Spring crochet flowers,free pattern</h2>
                        <p>These are my first spring crochet flowers. I used fine cotton thread from my stash and hope you like them.
                            Éstas son mis primeras flores de crochet de esta primavera. Usé hilo de algodón fino remanente y espero que les gusten..
                        </p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 product-what-we-offer-img on-bottom">
                    <img src="{{ asset('imager/what-we-offer/product_WhatWeOffe2.jpg')}}" alt="">
                    <p class="rotated-text-right">Knitting</p>
                </div>
            </div>
        </div>
    </div>

    <div class="product-what-we-offer-left bg-blue">
        <div class="container">
            <div class="row" >
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 product-what-we-offer-img">
                    <img src="{{ asset('imager/what-we-offer/product_WhatWeOffe3.jpg')}}" alt="">
                    <p class="rotated-text-left">Gifts</p>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 ">
                    <div class="product-what-we-offer-content">
                        <h2>Mother's Day gift, Perfect Present</h2>
                        <p>Three of the most darling little pears you will ever lay eyes on. Made with clay, paint and love, my one of a kind gifts are made from start to finish by me in my Colorado studio, NOT overseas in some factory. Your mom will love the handmade nature of these! Each one is a unique piece of art with a personal message to your mom.
                        </p>
                    </div>
                </div>
                <div style="border-bottom: 1px solid #e6e6e6;height: 1px;width: 100%;margin: 120px 15px 0 15px;"></div>
            </div>
        </div>
    </div>
  </div>
 </div>
 
<!--end product what we offer-->


@endsection