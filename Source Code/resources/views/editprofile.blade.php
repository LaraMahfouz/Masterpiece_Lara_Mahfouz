
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
                    <form method="POST" action="update/{{$user->id}}" enctype="multipart/form-data">
                        @csrf
                    <div id="utf_add_listing_part">
                        <div class="add_utf_listing_section margin-top-45">
                            <div class="utf_add_listing_part_headline_part">
                                <h3> Edit Profile</h3>
                            </div>
                            <div class="row with-forms">
                                <div class="col-md-6">
                                    <h5>Full Name:</h5>
                                    <input type="text" placeholder="Name:" name="name" autofocus value="{{$user->name}}">
                                </div>
                                <div class="col-md-6">
                                    <h5>E-mail:</h5>
                                    <input type="text" placeholder="E-mail:" name="email" autofocus value="{{$user->email}}">
                                </div>
                                <div class="col-md-12">
                                    <h5>Bio:</h5>
                                    <textarea rows="5" type="text" name="user_bio" placeholder="Bio:" value="{{$user->user_bio}}"
                                        spellcheck="true"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <h5>Facebook</h5>
                                    <input type="text" placeholder="Facebook" name="user_social_fb" required autofocus value="{{$user->user_social_fb}}">
                                </div>
                                <div class="col-md-6">
                                    <h5>Inestagram</h5>
                                    <input type="text" placeholder="Inestagram" name="user_social_in" required autofocus value="{{$user->user_social_in}}">
                                </div>
                                <div class="col-md-6">
                                    <h5>Mobile Number:</h5>
                                    <input type="text" placeholder="Mobile Number:" name="user_mobile" autofocus value="{{$user->user_mobile}}">
                                </div>
                                <div class="col-md-6">
                                    <h5>Image:</h5>
                                    <input type="file" name="user_image" class="file-upload-default">
                                </div>

                            </div>
                        </div>
                        <button class="button preview" type="submit" style=" background-color: #72A499;
                        color: #fff;border: none;"><i class="fa fa-arrow-circle-right" ></i> Edit Profile</button>
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
