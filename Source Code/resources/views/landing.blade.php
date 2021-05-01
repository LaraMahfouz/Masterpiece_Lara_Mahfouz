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
            <a data-ghost="Click-AddPost" class="addAds orangeBtn clear taRight fLeft relative" href="{{ url('home') }}"
                style="width: 240px ;background-color:#72A499;color:#fff">
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
<!-- Slider main container Start -->
<div class="home12-slider section swiper-container">
    <div class="swiper-wrapper">
        <div class="home12-slide-item swiper-slide" data-swiper-autoplay="5000"
            data-bg-image="assets/images/slider/home12/slide-1.jpg">
            <div class="home12-slide1-content">
                <div class="bg"></div>
                <span class="sub-title">Larocheh</span>
                <h2 class="title pt-1">Made With Love</h2>
                <img class="price " src="{{ asset('assets/images/others/tab-hover.png') }}" alt="">
            </div>
        </div>
        <div class="home12-slide-item swiper-slide" data-swiper-autoplay="5000"
            data-bg-image="assets/images/slider/home12/slide-2.jpg">
            <div class="home12-slide2-content">
                <div class="bg"></div>
                <img src="{{ asset('assets/images/logo/logo-4-big.png') }}" alt="" class="icon">
                <span class="title">Package Offer</span>
                {{-- <img class="price " src="{{ asset('assets/images/slider/home12/slide-2.1.png')}}" alt=""> --}}
                <div class="link"><a href="{{ url('allpost') }}">Posts collection</a></div>
            </div>
        </div>
        <div class="home12-slide-item swiper-slide" data-swiper-autoplay="5000"
            data-bg-image="assets/images/slider/home12/slide-3.jpg">
            <div class="home12-slide3-content">
                <h2 class="title">Just for you</h2>
                <h3 class="sub-title">
                    <img class="left-icon " src="{{ asset('assets/images/slider/home1/slide-2-2.png') }}"
                        alt="Slide Icon">
                    Making & crafting
                    <img class="right-icon " src="{{ asset('assets/images/slider/home1/slide-2-3.png') }}"
                        alt="Slide Icon">
                </h3>
                <span class="price">Made With Love</span>
            </div>
        </div>
    </div>
    <div class="home12-slider-prev swiper-button-prev"><i class="ti-angle-left"></i></div>
    <div class="home12-slider-next swiper-button-next"><i class="ti-angle-right"></i></div>
</div>
<!-- Slider main container End -->

<!-- About us Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 col-12 mx-auto">
                <div class="about-us2">
                    <div class="inner">
                        <h2 class="title" id="category">Category Larocheh</h2>
                        <h5 class="sub-title">WELCOME TO LAROCHEH </h5>
                        <p>Learts is an online shop of two passionate craftsmen where they sell handicrafts and
                            arts’ works in the US. We provide high-end unique vases, wall arts, home accessories,
                            and furniture pieces.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- About us Section End -->

<!-- Category Banner Section Start -->
<div class="section" style=" padding-bottom: 50px;">
    <div class="container">
        <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1 learts-mb-n40">
            @foreach ($categories as $category)
                <div class="col learts-mb-40">
                    <div class="category-banner4">
                        <a href="sub/{{ $category->id }}" class="inner">
                            <div class="image"><img src="{{ asset('/imager') }}/{{ $category->cat_image }}"
                                    alt="">
                            </div>
                            <div class="content" data-bg-color="#F2E1E3">
                                <h3 class="title">{{ $category->cat_name }}</h3>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Category Banner Section End -->


<div class="content-what-we-offer">
    <div class="col-xl-7 col-lg-8 col-12 mx-auto">
        <div class="about-us2">
            <div class="inner">
                <h2 class="title">Larocheh</h2>
                <h5 class="sub-title">How does it work site LAROCHEH?</h5>
            </div>
        </div>
    </div>
</div>
<div class="row component-item" style="margin-bottom: 70px">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12  component-item-detail">
        <img src="{{ asset('imager/what-we-offer/component-item1.png') }}" alt="" style="margin-bottom: 2%">
        <div class="component-item-content-detail">
            <h2>1.<small>Provision Of Services</small></h2>
            <p>Find the service you need using the search box above or via the categories.</p>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 component-item-detail">
        <img src="{{ asset('imager/what-we-offer/component-item2.png') }}" alt="">
        <div class="component-item-content-detail">
            <h2>2.<small>Order Service</small></h2>
            <p>See service description and comments buyers then Consult through the seller information available.</p>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 component-item-detail">
        <img src="{{ asset('imager/what-we-offer/component-item3.png') }}" alt="">
        <div class="component-item-content-detail">
            <h2>3.<small>Service Received</small></h2>
            <p>Upon receiving your order Made with love , we are happy to add your experience.</p>
        </div>
    </div>
</div>

<!--end component what we offer-->

<!-- Section Title Start -->
<div class="col-xl-7 col-lg-8 col-12 mx-auto">
    <div class="about-us2">
        <div class="inner">
            <h2 class="title">Least Post</h2>
            <h5 class="sub-title">Least Posts in LAROCHEH </h5>
            <p>Learts is an online shop of two passionate craftsmen where they sell handicrafts and
                arts’ works in the US. We provide high-end unique vases, wall arts, home accessories,
                and furniture pieces.</p>
        </div>
    </div>
</div>
<!-- Section Title End -->

<div class="section section" style="margin-top:60px">
    <div class="container">
        <div class="row learts-mb-n40">
            @foreach ($posts as $post)
                <div class="col-lg-4 col-md-12" style="margin-bottom:100px"> <a href="single/{{ $post->id }}"
                        class="utf_listing_item-container" data-marker-id="1">
                        <div class="utf_listing_item"> <img src="{{ asset('/imager') }}/{{ $post->post_image }}"
                                alt=""> <span class="tag"><i class="im im-icon-Hotel"></i>
                                {{ $post->cat_name }}</span>
                            <span class="featured_tag">{{ $post->sub_name }}</span>
                            <span class="utf_closed">New</span>
                            <div class="utf_listing_item_content">
                                <div class="utf_listing_prige_block">
                                    <span class="utf_meta_listing_price"><i
                                            class="fa fa-tag"></i>{{ $post->post_price }}</span>
                                    {{-- <span class="utp_approve_item"><i class="utf_approve_listing"></i></span> --}}
                                </div>
                                <h3> {{ $post->post_title }}</h3>
                                <span style="padding-bottom:5px"><i class="fas fa-map-marker-alt"
                                        style="color: #fff;padding-top:15px"></i>{{ $post->post_location }}</span>
                                <span style="padding-bottom:5px"><i class="fas fa-phone-square-alt"
                                        style="color: #fff;"></i>{{ $post->post_mobile }}</span>
                            </div>
                        </div>
                        <div class="utf_star_rating_section" data-rating="4.5"
                            style="height: 55px; background-color:rgb(250, 245, 229);;max-width: 95%;text-align:center">
                            <span class="utf_view_count"><i class="fas fa-eye"
                                    style="font-size:23px;text-align:center;line-height: 1%;padding-right:15px"> View
                                    more...</i></span>
                        </div>
                    </a>
                </div>
            @endforeach

            {{-- <a href="single/{{$post->id}}"></a> --}}

        </div>


    </div>
</div>

<!-- Portfolio Section End -->
<!-- Brand Carousel Section Start -->
{{-- <div class="section section-pt-5">
        <div class="container"> --}}
<!-- Section Title Start -->
{{-- <div class="col-xl-7 col-lg-8 col-12 mx-auto">
                <div class="about-us2">
                    <div class="inner">
                        <h2 class="title">Brand Carousel</h2>
                    </div>
                </div>
            </div> --}}
<!-- Section Title End -->

{{-- <div class="brand-carousel" style="margin-top:50px">

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-7.png')}}" alt="Brands Image"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-8.png')}}" alt="Brands Image"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-1.png')}}" alt="Brands Image"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-2.png')}}" alt="Brands Image"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-3.png')}}" alt="Brands Image"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-4.png')}}" alt="Brands Image"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-5.png')}}" alt="Brands Image"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-6.png')}}" alt="Brands Image"></a>
                    </div>
                </div>

            </div> --}}
{{-- </div>
    </div> --}}
<!-- Brand Carousel Section End -->


<!-- Product/Sale Banner Section Start -->
<div class="section section-padding pt-5" style="margin-top:50px ">
    <div class="container">
        <div class="row row-cols-lg-2 row-cols-1 learts-mb-n30">

            <div class="col learts-mb-30">
                <div class="sale-banner8">
                    <img src="{{ asset('assets/images/banner/sale/sale-banner8-1.jpg') }}" alt="Sale Banner Image">
                    <div class="content">
                        <h2 class="title">Little simple <br> things</h2>
                        <a href="{{ url('allpost') }}" class="link">Watch Projects</a>
                    </div>
                </div>
            </div>

            <div class="col learts-mb-30">
                <div class="sale-banner8">
                    <img src="{{ asset('assets/images/banner/sale/sale-banner8-2.jpg') }}" alt="Sale Banner Image">
                    <div class="content">
                        <h2 class="title">Holiday <br> Gifts</h2>
                        <a href="{{ url('allpost') }}" class="link">Watch Projects</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Product/Sale Banner Section End -->
<!--code product latest new-->
<div class="container lastest">
    <div class="col-xl-7 col-lg-8 col-12 mx-auto">
        <div class="about-us2">
            <div class="inner">
                <h2 class="title">Latest Blog</h2>
                <h5 class="sub-title">The Last Blog In LAROCHEH </h5>

            </div>
        </div>
    </div>

    <div class="row" style="margin-top:50px">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
            <div class="card">
                <div class="row no-gutters">
                    <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                        <a href="what-we-offer.html"><img src="{{ asset('imager/product-lastest/lastest1.jpg') }}"
                                class="card-img" alt="..."></a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ url('blog') }}">EASY COLORFUL SUCCULENT
                                </a></h5>
                            <p class="card-text">
                                By Sugar / April 18.2021
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                        <a href="what-we-offer.html"> <img src="{{ asset('imager/product-lastest/lastest2.jpg') }}"
                                class="card-img" alt="..."></a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ url('blog') }}">Spring crochet flowers,free
                                    pattern</a></h5>
                            <p class="card-text">
                                By Sugar / April 28.2021
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                        <a href="what-we-offer.html"> <img src="{{ asset('imager/product-lastest/lastest3.jpg') }}"
                                class="card-img" alt="..."></a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ url('blog') }}">Mother's Day gift, Perfect Present</a>
                            </h5>
                            <p class="card-text">
                                By Sugar / Mar 21.2021
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end code product lastest new-->

<!-- Section Title Start -->
<div class="col-xl-7 col-lg-8 col-12 mx-auto" style="padding-top: 50px">
    <div class="about-us2">
        <div class="inner">
            <h2 class="title">Testimonial</h2>
            <h5 class="sub-title">We love our cilents</h5>

        </div>
    </div>
</div>
<!-- Section Title End -->

<!-- Testimonials Section Start -->
<div class="section section-fluid" style="margin-top:50px">
    <div class="container">
        <div class="section-padding" data-bg-image="{{ asset('assets/images/bg/bg-1.jpg') }}"
            style="margin-bottom: 50px">

            <div class="container">
                <div class="testimonial-slider">
                    <div class="col">
                        <div class="testimonial2">
                            <p>There's nothing would satisfy me much more than a worry-free clean and responsive theme
                                for my high-traffic site.</p>
                            <div class="author">
                                <img src="{{ asset('assets/images/testimonial/testimonial-1.png') }}" alt="">
                                <div class="content">
                                    <h6 class="name">Anais Coulon</h6>
                                    <span class="title">Actor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial2">
                            <p>Really good design/documentation, pretty much everything is nicely setup. The best choice
                                for Woocommerce shop.</p>
                            <div class="author">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2.png') }}" alt="">
                                <div class="content">
                                    <h6 class="name">Ian Schneider</h6>
                                    <span class="title">Actor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial2">
                            <p>ThemeMove deserves 5 star for theme’s features, design quality, flexibility,
                                customizability and support service!</p>
                            <div class="author">
                                <img src="{{ asset('assets/images/testimonial/testimonial-3.png') }}" alt="">
                                <div class="content">
                                    <h6 class="name">Florence Polla</h6>
                                    <span class="title">Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial2">
                            <p>Thanks for always keeping your WordPress themes up to date. Your level of support is
                                second to none.</p>
                            <div class="author">
                                <img src="{{ asset('assets/images/testimonial/testimonial-4.png') }}" alt="">
                                <div class="content">
                                    <h6 class="name">Sally Ramsey</h6>
                                    <span class="title">Reporter</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Testimonials Section End -->






@endsection
@section('js')
<!-- Scripts -->
<script src="{{ asset('scripts/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('scripts/chosen.min.js') }}"></script>
<script src="{{ asset('scripts/slick.min.js') }}"></script>
<script src="{{ asset('scripts/rangeslider.min.js') }}"></script>
<script src="{{ asset('scripts/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('scripts/magnific-popup.min.js') }}"></script>
<script src="{{ asset('scripts/jquery-ui.min.js') }}"></script>
<script src="{{ asset('scripts/mmenu.js') }}"></script>
<script src="{{ asset('scripts/tooltips.min.js') }}"></script>
<script src="{{ asset('scripts/color_switcher.js') }}"></script>
<script src="{{ asset('scripts/jquery_custom.js') }}"></script>

@endsection
