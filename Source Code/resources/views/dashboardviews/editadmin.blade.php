@extends('../layouts/adminApp')
@section('content')
{{-- Start Form  --}}
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Create Admin</h6>
          <form action="update" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-sm-6">
            <div class="form-group">
              <label for="exampleInputText1">Full Name</label>
              <input type="text" class="form-control" name="admin_name" id="exampleInputText1"  value="{{$Admin->name}}" placeholder="Enter Name">
            </div>
              </div>
              @error('admin_name')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            <div class="col-sm-6">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Select Admin</label>
                <select class="form-control"  name="super_admin" id="exampleFormControlSelect1">
                  {{-- <option selected disabled>Select Admin</option> --}}
                  <option  value="admin">Admin</option>
                  <option selected value="superadmin">Super Admin</option>
                </select>
              </div>
            </div>
            </div>
  
            <div class="row">
            <div class="col-sm-6">
            <div class="form-group">
              <label for="exampleInputEmail3">Email</label>
              <input type="email" class="form-control" name="admin_email"  id="exampleInputEmail3" value="{{$Admin->email}}" placeholder="Enter Email">
            </div>
            </div>
            @error('admin_email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="col-sm-6">
            <div class="form-group">
              <label for="exampleInputPassword3">Password</label>
              <input type="password" class="form-control" name="admin_password" id="exampleInputPassword3" value="{{$Admin->password}}" placeholder="Enter Password">
            </div>
            </div>
            </div>
            @error('admin_password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
              <label>File upload</label>
               
              <input type="file" name="admin_image" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="file" id="myDropify" name='admin_image' class="border" value="{{$Admin->user_image}}">
                <span class="input-group-append">
                </span>
              </div>
            </div>
            <button class="btn btn-primary " type="submit" name="submit">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End Form  --}}
  @endsection