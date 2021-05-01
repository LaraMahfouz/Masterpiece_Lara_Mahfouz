@extends('../layouts/adminApp')
@section('content')

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Manage</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit/Category</li>
    </ol>
  </nav> 
  
  {{-- <div class="row">
  <div class="col-md-12 grid-margin stretch-card ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update CATEGORY</h4>
        <form action="" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="form-group row">
          <div class="col-lg-3">
            <label class="col-form-label">Category Name</label>
          </div>
          <div class="col-lg-8">
            <input class="form-control"  name="cat_name" id="defaultconfig"  value="{{$categories['cat_name']}}" type="text" placeholder="Type Something.." >
          </div>
        </div>
        @error('cat_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
          <label>File upload</label>
          <input type="file" name="img[]" class="file-upload-default">
          <div class="input-group col-xs-12">
            <input type="file" id="myDropify"  value="{{$categories['cat_image']}}" name='cat_image' class="border">
          </div>
        </div>
      </div>
      <button class="btn btn-primary " type="submit" name="submit">Update</button>
      </form>
      </div>
    </div>
  </div> --}}

  {{-- Start Form  --}}
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">UPDATE CATEGORY</h6>
        <form action="" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputCategoryname1">Category Name</label>
            <input class="form-control"  name="cat_name" id="defaultconfig" type="text" placeholder="Type Something.." value="{{$categories['cat_name']}}">
          </div>
          @error('cat_name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror


          <div class="form-group">
            <div class="col-md-12">
            <label>File upload</label>
            </div>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-12">
              <input type="file" id="myDropify" name='cat_image' class="border" value="{{$categories['cat_image']}}">
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-primary mx-3">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
{{-- End Form  --}}
  
@endsection
