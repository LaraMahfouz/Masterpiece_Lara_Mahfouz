@extends('layouts/publicApp')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" id="colors">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap&subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
@endsection
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

    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="{{ asset('assets/images/bg/page-title-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        <h1 class="title" style="text-align: left">SubCategory</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item">Category</li>
                            <li class="breadcrumb-item active">SubCategory</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->
 <!-- Category Banner Style Five Section Start -->
 <div class="section section-padding pt-5">
    <div class="container">
     <!-- Section Title Start -->
     <div class="section-title2 text-center">
        <h2 class="title title-icon-both" style="margin-top:8%"> Sub Category</h2>
        <p>You don’t need expensive ornaments to make your house look more fashionable.</p>
    </div>
    <!-- Section Title End -->

    <!-- Banner & List Product Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row learts-mb-n30">

            </div>
        </div>

    <div class="row row-cols-lg-6 row-cols-sm-2 row-cols-1 learts-mb-n40">
        <div class="col-lg-4 col-12 learts-mb-30">
            <div class="sale-banner10">
                <div class="inner">
                    <img src="{{ asset('/imager') }}/{{ $catimg }}" alt="Sale Banner Image">
                    <div class="content">
                        {{-- <span class="sub-title">Superb quality</span>
                        <h2 class="title">GIFT IDEAS</h2> --}}
                        {{-- <img src="{{ asset('assets/images/banner/sale/sale-banner4-1.1.png') }}" alt=""> --}}
                    </div>
                </div>
            </div>
        </div>
        
        @foreach ($subcategory as $sub)
        <div class="col learts-mb-30">
            <div class="category-banner5">
                <a href="subpost/{{ $sub->id }}" class="inner">
                    <div class="image"><img src="{{ asset('/imager') }}/{{ $sub->sub_image }}" alt=""></div>
                    <div class="content">
                        <h5 class="title"><a href="subpost/{{ $sub->id }}">{{ $sub->sub_name }}</a></h5>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
</div>
</div>
    </div>
 </div>
 
 
<!-- Category Banner Style Five Section End -->
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