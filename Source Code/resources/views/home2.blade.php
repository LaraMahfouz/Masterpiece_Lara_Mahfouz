@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">add post</div>

                    <div class="card-body">
                        <form method="POST" action="user/post" enctype="multipart/form-data">
                            @csrf

                            <div class="deplaynone">
                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="deplaynone">
                                <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="deplaynone">
                                <input type="text" class="form-control" name="last_seen" value="{{ Auth::user()->last_seen}}">
                            </div>
                            <div class="deplaynone">
                                <input type="text" class="form-control" name="user_image" value="{{ Auth::user()->user_image}}">
                            </div>

                            <div class="form-group row">
                                <label for="post_title" class="col-md-4 col-form-label text-md-right">Post Title</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="post_title" value="" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="post_desc" class="col-md-4 col-form-label text-md-right">Post Desc</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="post_desc" value="" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="post_location" class="col-md-4 col-form-label text-md-right">Post
                                    Location</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="post_location" value="" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="post_price" class="col-md-4 col-form-label text-md-right">Post Price</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="post_price" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile Number</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="post_mobile" value="" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="post_price" class="col-md-4 col-form-label text-md-right">Post Image</label>
                                <input type="file" name="post_image" class="file-upload-default" required>
                                <div class="input-group col-md-6">
                                </div>
                            </div>
                            @foreach ($category as $cat)
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select cat</label>
                                        <select class="form-control" name="cat_name" id="exampleFormControlSelect1">
                                            {{-- <option  disabled>Category</option> --}}
                                            <option  selected value="{{ $cat->cat_name }}">{{ $cat->cat_name }}</option>
                                        </select>
                                    </div>
                                </div>
                            @endforeach
                            @foreach ($subcategory as $sub)
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select sub</label>
                                    <select class="form-control" name="sub_name" id="exampleFormControlSelect1">
                                        {{-- <option selected disabled>sub</option> --}}
                                        <option selected value="{{ $sub->sub_name }}">{{ $sub->sub_name }}</option>
                                    </select>
                                </div>
                            </div>
                           @endforeach
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add Post
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
