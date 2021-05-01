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
<div class="col"></div> 

@endauth 
@endsection
@section('maincon')
    <div id="main_wrapper" class="mm-page mm-slideout">
        <div class="container margin-bottom-75">
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="post/add" enctype="multipart/form-data">
                        @csrf
                    <div id="utf_add_listing_part">
                        <div class="add_utf_listing_section margin-top-45">
                            <div class="utf_add_listing_part_headline_part">
                                <h3> Name &amp; Description</h3>
                            </div>
                            <div class="row with-forms">
                                <input type="hidden" placeholder="Name" name="autherid" value="{{ Auth::user()->id }}">
                                <input type="hidden" placeholder="Name" name="name" value="{{ Auth::user()->name }}">
                                <input type="hidden" placeholder="Email" name="email" value="{{ Auth::user()->email }}">
                                <input type="hidden" placeholder="image" type="hidden" id="image" name="user_image"
                                    value="{{ Auth::user()->user_image }}">
                                <div class="col-md-6">
                                    <h5>Post Title:</h5>
                                    <input type="text" name="post_title" placeholder="Post Title:" class="search-field" id="listing_title value="" required>
                                </div>
                                <div class="col-md-6">
                                    <h5>Price:</h5>
                                    <input type="text" placeholder="Price Jd"  name="post_price" required
                                    autofocus value="">                    
                                </div>
                                <div class="col-md-12">
                                    <h5>Description:</h5>
                                    <textarea rows="5" type="text" name="post_desc" placeholder="description:" value=""
                                        spellcheck="true"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <h5>Mobile Number:</h5>
                                    <input type="text" placeholder="Mobile Number:" name="post_mobile" autofocus value="">
                                </div>
                                <div class="col-md-6">
                                    <h5>Location::</h5>
                                    <input type="text" placeholder="Location:" name="post_location" required autofocus value="">
                                </div>

                                <div class="col-md-12">
                                    <h5>Image:</h5>
                                    <input type="file" name="post_image" class="file-upload-default" required>
                                </div>

                                {{-- <div class="col-md-6">
                                    <h5>Select cat:</h5>
                                    <select class="btn-group bootstrap-select default" name="cat_name">
                                        @foreach ($category as $cat)
                                        <option selected value="{{ $cat->cat_name }}">{{ $cat->cat_name }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="col-md-12">
                                    <h5>Select SubCategory:</h5>
                                    <select class="btn-group bootstrap-select default" name="sub_name">
                                        @foreach ($subcategory as $sub)
                                        <option selected value="{{ $sub->sub_name }}">{{ $sub->sub_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="button preview" type="submit" style=" background-color: #72A499;
                        color: #fff;border: none;"><i class="fa fa-arrow-circle-right" ></i> ADD POST</button>
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
