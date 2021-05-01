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
                    <h1 class="title" style="text-align: left">POST</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.html">Category</a></li>
                        <li class="breadcrumb-item"><a href="index.html">SubCategory</a></li>
                        <li class="breadcrumb-item"><a href="index.html">Posts</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->
 <!--content blog masonry-->

 <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 listing_grid_item" style="margin-top: 100px;margin-bottom:100px">
        <div class="row">
            @foreach ($subpost as $subposts)
                
            
          <div class="col-lg-4 col-md-12"> <a href="single/{{$subposts->id}}" class="utf_listing_item-container" data-marker-id="1" style="margin-bottom:100px">
            <div class="utf_listing_item"> <img src="{{asset("/imager")}}/{{$subposts->post_image}}" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> {{$subposts->cat_name}}</span> <span class="featured_tag">{{$subposts->sub_name}}</span>
              <div class="utf_listing_item_content"> 
				<div class="utf_listing_prige_block">							
					<span class="utf_meta_listing_price"><i class="fa fa-tag"></i>{{$subposts->post_price}}</span>					
				</div>
                <h3>{{$subposts->post_title}}</h3>
                <span><i class="fas fa-map-marker-alt" style="color: #fff;padding-top:15px"></i>{{$subposts->post_location}}</span>                               
              </div>
            </div>
			<div class="utf_star_rating_section" data-rating="4.5" style="height: 55px">
			  <span class="utf_view_count"><i class="fas fa-eye" style="font-size:18px;line-height: 1%;text-align:center"> View more...</i></span>
			</div>
            </a> 
		  </div>
          @endforeach
        </div>
      </div>
      
      <!-- Sidebar -->
      <div class="col-lg-4 col-md-4"  style="margin-top: 67px;margin-bottom:100px">
        <div class="sidebar">
          <div class="box_widget margin-top-35 margin-bottom-75"style="background-color:#F9F9F9;padding-top:25px;padding-left:10px">
            <h3><i class="fa fa-list-alt"></i> Categories</h3>
            <ul class="utf_listing_detail_sidebar">
              @foreach ($categories as $cat)
              <li><i class="fa fa-angle-double-right"></i> <a href="sub/{{$cat->id}}">{{$cat->cat_name}}</a></li>
              @endforeach
            </ul>
          </div>
          <img src="{{asset('assets/images/banner/widget-banner.jpg')}}" alt="">
        </div>
      </div>
      
    </div>
  </div>

    <!--end content blog masonry-->


 

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