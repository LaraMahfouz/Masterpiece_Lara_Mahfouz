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
    <div class="page-title-section section" data-bg-image="{{ asset('assets/images/bg/page-title-1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        <h1 class="title" style="text-align: left">Single Post</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('allpost') }}">Posts</a></li>
                            <li class="breadcrumb-item"><a href="#">Single Post</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Single Post Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="blog-author">
                    <div class="thumbnail">
                        <img src="{{asset("/imager")}}/{{$post->user_image}}" alt="">
                    </div>
                    <div class="content" style="margin-top:30px;font-weight:bolder">
                        <a href="auther/{{$post->autherid}}">{{$post->name}}</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-blog">
                        <ul class="category justify-content-center">
                            <li>{{$post->cat_name}}</li>
                            <li>{{$post->sub_name}}</li>
                        </ul>
                        <div class="section-title2 text-center">
                        <h2 class="title title-icon-both">{{$post->post_title}}</h2>
                        </div>
                        <div class="image mb-5">
                            <img src="{{asset("/imager")}}/{{$post->post_image}}" alt="Blog Image" style="width: 525px;height:280px;margin-left:27%">
                        </div>
                        <div class="row">
                            <div class="col-xl-9 col-lg-10 col-12 mx-auto">
                                <div class="content">
                                    <ul class="meta justify-content-center">
                                        <li><i class="fal fa-user"></i> By <a href="auther/{{$post->autherid}}">{{$post->name}}</a></li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{$post->post_location}}</li>
                                        <li><i class="far fa-calendar"></i>{{$post->created_at}}</li>

                                    </ul>
                                    <div class="desc">
                                        <blockquote>
                                            <p>{{$post->post_desc}}.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-12 ml-auto">
                            <div class="slide-blog-single" style="margin-left:25%;margin-right:25%">
                                <div class="section-title2 row justify-content-between align-items-center">
                                    <div class="col-mx-auto col-12" style="text-align: center">
                                        <!-- Section Title Start -->
                                        <h2 class="title title-icon-right">Comments</h2>
                                        <!-- Section Title End -->
                                    </div>
                                </div>
                                @foreach ($comments as $comment)
                                    
                               
                                <div class="card" style="border-bottom: 1px solid #e6e6e6">
                                    <div class="row no-gutters">
                                        <div class="col-xl-12 col-lg-10 col-12">
                                            <img src="{{ asset('imager')}}/{{$comment->user_image}}" class="card-img" alt="..."
                                                style="margin-top:5%;margin-left:10%">
                                        </div>
                                        <div class="col-md-10 col-sm-12 col-12">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$comment->user_name}}</h5>
                            
                                                <p class="card-text">{{$comment->created_at}}</p>
                                                <span class="card-text">{{$comment->comment}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="d-flex justify-content-center">
                                    {!! $comments->links() !!}
                                  </div>
                            </div>
                            @auth
                          
                            <form action="{{$post->id}}/comment" method="POST"  style="margin-left:10%;margin-right:10%;margin-top:5%;margin-bottem:30%">
                                @csrf
                                <div class="input-group">
                                    <input type="text" name="comment" class="form-control rounded-corner" placeholder="Write a Comment...">
                                    <span class="input-group-btn p-l-10">
                                        <button class="btn" type="submit" style="color: #72A499;font-weight:bold">Comment</button>
                                    </span>
                                </div>
                            </form>
                            @endauth

    {{-- Cooment Start --}}

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- Portfolio Section End -->

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









