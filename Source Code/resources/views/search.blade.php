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
@section('maincon')
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>

    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="{{ asset('assets/images/bg/page-title-1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1>Blog</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
                            <li class="breadcrumb-item active">SubCategory</li>
                            <li class="breadcrumb-item active">Search</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Portfolio Section Start -->
    <div class="section section pt-3 pb-5">
            <div class="row learts-mb-n50">

                @if ($posts->isNotEmpty())
                    @foreach ($posts as $post)

                        <div class="col-xl-9 col-lg-8 col-12 learts-mb-50 ml-5">
                            <div class="row no-gutters learts-mb-n40">

                                <div class="col-12 border-bottom learts-pb-40 learts-mb-40">
                                    <div class="blog">
                                        <div class="row learts-mb-n30">
                                            <div class="col-md-5 col-12 learts-mb-30">
                                                <div class="image mb-0">
                                                    <a href="single/{{ $post->id }}"><img
                                                            src="{{ asset('/imager') }}/{{ $post->post_image }}"
                                                            alt="search Image"></a>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-12 align-self-center learts-mb-30">
                                                <div class="content">
                                                    <ul class="meta">
                                                        <li><i class="far fa-calendar"></i>{{ $post->created_at }}</li>
                                                    </ul>
                                                    <h5>{{ $post->post_title }}
                                                    </h5>
                                                    <div class="desc">
                                                        <p>{{ $post->post_desc }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @else

    <div class="section-404 section" data-bg-image="{{ asset('assets/images/bg/bg-404.jpg') }}" style="margin-top: 20px">
        <div class="container">
            <div class="content-404">
                <h1 class="title" style="text-align: left">Oops!</h1>
                <h2 class="sub-title">Search not found!</h2>
                <p>You could either go back or go to homepage</p>
                <div class="buttons">
                    <a class="btn btn-primary" style="background-color: #F2E1E3" href="/">Go back</a>
                </div>
            </div>
        </div>
    </div>                    </div>
            </div>
                     
    @endif

@endsection
