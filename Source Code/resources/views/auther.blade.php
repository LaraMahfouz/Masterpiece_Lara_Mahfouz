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


    <!-- left wrapper start -->
    <div class="row py-5 px-4">
        <div class="col-md-12">
        <div class="d-none d-md-block left-wrapper">
            {{-- style="margin-right:25% ;margin-left:25%;box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%)" --}}
            <div class="card rounded shadow rounded">
                <div class="card-body">
               
                    <div class="px-4 pt-0 pb-4 cover">
                        <div class="media align-items-end profile-head">
                            <div class="profile mr-3 pt-3"><img src="{{ asset('/imager') }}/{{ $auther->user_image }}" alt="..."
                                    width="130" class="rounded mb-2 img-thumbnail">
                            </div>
                            <div class="media-body mb-5 text-white">
                                <h4 class="mt-0 mb-2" style="margin-left:2%">{{ $auther->name }}</h4>
                                <div>
                                    @if (Cache::has('is_online' . $auther->id))
                                        <span class="text-success" style="margin-left: 20px;color:green;font-weight:bolder">Online</span>
                                    @else
                                        <span class="text-secondary" style="margin-left: 15px;font-weight:bolder">Offline</span>
                                      
                                    @endif
                                    {{ \Carbon\Carbon::parse($auther->last_seen)->diffForHumans() }}
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase" style="color: #72A499">Bio:</label>
                        <p class="text-muted">{{ $auther->user_bio }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase" style="color: #72A499">Mobile:</label>
                        <p class="text-muted">{{ $auther->user_mobile }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase" style="color: #72A499">Email:</label>
                        <p class="text-muted">{{ $auther->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Header Language & Currency End -->
    <!-- Section Title Start -->
    <div class="section-title2 text-center">
        <h2 class="title title-icon-both" style="margin-top:8%"> All Project</h2>
        <p>You don’t need expensive ornaments to make your house look more fashionable.</p>
    </div>
    <!-- Section Title End -->

    <!-- post Banner Section Start -->
    
    <div class="section section-fluid learts mb-5">
        <div class="container">
            <div class="category-banner1-carousel">
    @foreach ($autherposts as $post)
            
                <div class="col">
                    <div class="category-banner1">
                        <div class="inner">
                            <a href="single/{{$post->id}}" class="image"><img src="{{asset("/imager")}}/{{$post->post_image}}" alt=""></a>
                            <div class="content">
                                <h3 class="title">
                                    <a href="#">{{$post->post_title}}</a>
                                    <span class="number">{{$post->post_price}}</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>












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
