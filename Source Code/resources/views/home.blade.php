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
@auth
<div class="col">
   
</div> 
@endauth 
@endsection
@section('maincon')

{{-- <div class="search_container_block overlay_dark_part">
    <div class="main_inner_search_block">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Find &amp; Explore Nearby Attractions</h2>
            <h4>Find great places to stay, eat, shop, or visit the city</h4>
            
            <div class="main_popular_categories">
			  		
              <ul class="main_popular_categories_list">
				<li> <a href="#">
                  <div class="utf_box"> <i class="im im-icon-Chef-Hat" aria-hidden="true"></i>
                    <p>Restaurant</p>					
                  </div>
                  </a> 
				</li>
                <li> <a href="#">
                  <div class="utf_box"> <i class="im im-icon-Dumbbell" aria-hidden="true"></i>
                    <p>Fitness</p>
                  </div>
                  </a> 
				</li>
                <li> <a href="#">
                  <div class="utf_box"> <i class="im im-icon-Electric-Guitar" aria-hidden="true"></i>
                    <p>Events</p>
                  </div>
                  </a> 
				</li>
                <li> <a href="#">
                  <div class="utf_box"> <i class="im im-icon-Hotel" aria-hidden="true"></i>
                    <p>Hotels</p>
                  </div>
                  </a> 
				</li>                
                <li> <a href="#">
                  <div class="utf_box"> <i class="im im-icon-Home-2" aria-hidden="true"></i>
                    <p>Real Estate</p>
                  </div>
                  </a> 
				</li>
				<li> <a href="#">
                  <div class="utf_box"> <i class="im im-icon-Business-Man" aria-hidden="true"></i>
                    <p>Business</p>
                  </div>
                  </a> 
				</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="utf_video_container">
      <video poster="images/search_video_bg.jpg" loop="" autoplay="" muted="">
        <source src="images/search_bg_video.mp4" type="video/mp4">
      </video>
    </div>
  </div> --}}

    <div id="main_wrapper" class="mm-page mm-slideout">
        <div class="container margin-bottom-75">
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="user/post" enctype="multipart/form-data">
                        @csrf
                    <div id="utf_add_listing_part">
                        <div class="add_utf_listing_section margin-top-45">
                            <div class="utf_add_listing_part_headline_part">
                                <h3> Select Category</h3>
                            </div>
                            <div class="row with-forms">
                                <div class="col-md-12">
                                    <h5>Select Category:</h5>
                                    <select class="btn-group bootstrap-select default" name="cat_name">
                                        @foreach ($category as $cat)
                                        <option selected value="{{ $cat->cat_name }}">{{ $cat->cat_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="button preview" type="submit" style=" background-color: #72A499;
                        color: #fff;border: none;"><i class="fa fa-arrow-circle-right" ></i> Next</button>
                    </div>
                </div>
            </form>
            </div>
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
