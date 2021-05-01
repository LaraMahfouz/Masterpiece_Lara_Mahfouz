@extends('../layouts/adminApp')
@section('content')

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Manage</a></li>
      <li class="breadcrumb-item active" aria-current="page">Category</li>
      <li class="breadcrumb-item active" aria-current="page">SubCategory</li>
    </ol>
  </nav> 
  
	<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">ADD SubCategory</h6>
          <form action="subdash" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputCategoryname1">SubCategory Name</label>
              <input class="form-control"  name="sub_name" id="defaultconfig" type="text" placeholder="Type Something.." required>
            </div>
            @error('sub_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="form-group">
              <label for="exampleFormControlSelectCat">Select Category</label>
              <select class="form-control"  name="cat_name" id="exampleFormControlSelect1">
                @foreach ($all_category as $cat)
                <option  value="{{$cat->cat_name}}">{{$cat->cat_name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <div class="col-md-12">
              <label>Sub Image</label>
              </div>
              <input type="file" name="img[]" class="file-upload-default">
              <div class="input-group col-12">
                <input type="file" id="myDropify" name='sub_image' class="border">
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mx-3">ADD</button>
          </form>
        </div>
      </div>
    </div>
  </div>
     {{-- Start Table  --}}
  
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">SubCategory</h6>
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>Sub Image</th>
                  <th>Sub Name</th>
                  <th>Cat Name </th>
                  {{-- <th>Edit </th> --}}
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
   
                @foreach($all_sub as $key => $input)
                <tr>
  
                    <td><img src='{{asset("/imager/$input->sub_image")}}'class="img-thumbnail" width="100"></td>
                    <td>{{$input['sub_name']}}</td>
                    <td>{{$input['cat_name']}}</td>
                    {{-- <td><a href="subdash/edit/{{$input['id']}}"><button type="button"
                        class="btn btn-primary">Edit</button></a></td> --}}
                    <td><a href="subdash/{{$input['id']}}"><button type="button"
                        class="btn btn-danger" onclick="return confirm('Are you sure?')">delete</button></a></td>
                </tr>
                @endforeach 
              </tbody>
            </table>
           
          </div>
        </div>
      </div>
    </div>
  </div>
  
  {{-- End Table   --}}
  
@endsection