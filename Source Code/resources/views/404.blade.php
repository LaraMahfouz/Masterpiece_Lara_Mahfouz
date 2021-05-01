@extends('layouts/publicApp')

@section('maincon')
    <!-- 404 Section Start -->
    <div class="section-404 section" data-bg-image="{{ asset('assets/images/bg/bg-404.jpg') }}">
        <div class="container">
            <div class="content-404">
                <h1 class="title" style="text-align: left">Oops!</h1>
                <h2 class="sub-title">Page not found!</h2>
                <p>You could either go back or go to homepage</p>
                <div class="buttons">
                    <a class="btn btn-primary" style="background-color: #F2E1E3" href="/">Go back</a>
                    <a class="btn btn-dark btn-outline-hover-dark" href="/">Homepage</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 Section End -->
@endsection