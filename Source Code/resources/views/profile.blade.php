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
    <style>
        .profile-header {
            transform: translateY(5rem);
        }

    </style>

    <!-- Header Language & Currency End -->
    <!-- left wrapper start -->
    <div class="row py-5 px-4">
        <div class="col-md-12">
            <div class="d-none d-md-block left-wrapper">
                <div class="card rounded shadow rounded">
                    <div class="card-body">
                        <div class="px-4 pt-0 pb-4 cover">
                            <div class="media align-items-end profile-head">
                                <div class="profile mr-3 pt-3"><img
                                        src="{{ asset('/imager') }}/{{ Auth::user()->user_image }}" alt="..." width="130"
                                        class="rounded mb-2 img-thumbnail">
                                </div>
                                <div class="media-body mb-5 text-white">
                                    <h4 class="mt-0 mb-2" style="margin-left:2%">{{ Auth::user()->name }}</h4>

                                    <a href="profile/edit/{{ Auth::user()->id }}"
                                        class="btn btn-outline-dark btn-sm btn-block"
                                        style="background-color: #333;color:#fff;width:130px;margin-left:2%">Edit
                                        profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase"
                                style="color: #72A499;margin-left:2%">Bio:</label>
                            <p class="text-muted" style="margin-left:2%">{{ Auth::user()->user_bio }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase"
                                style="color: #72A499;margin-left:2%">Mobile:</label>
                            <p class="text-muted" style="margin-left:2%">{{ Auth::user()->user_mobile }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase"
                                style="color: #72A499;margin-left:2%">Email:</label>
                            <p class="text-muted" style="margin-left:2%">{{ Auth::user()->email }}</p>
                            <div class="col mt-0" style="margin-left:1%">
                                <div class="offcanvas-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Header Section Start -->

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Category Banner Section End -->
@endsection
