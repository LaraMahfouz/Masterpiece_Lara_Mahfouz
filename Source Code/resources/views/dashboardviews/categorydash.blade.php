@extends('../layouts/adminApp')
@section('content')

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Manage</a></li>
      <li class="breadcrumb-item active" aria-current="page">Category</li>
    </ol>
  </nav> 
  
  	{{-- Start Form  --}}
				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
								<h6 class="card-title">ADD CATEGORY</h6>
                <form action="categorydash" method="POST" enctype="multipart/form-data">
                  @csrf
									<div class="form-group">
										<label for="exampleInputCategoryname1">Category Name</label>
										<input class="form-control"  name="cat_name" id="defaultconfig" type="text" placeholder="Type Something.."required>
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
                      <input type="file" id="myDropify" name='cat_image' class="border" required>
                    </div>
                  </div>
									<button type="submit" name="submit" class="btn btn-primary mx-3">Submit</button>
								</form>
              </div>
            </div>
					</div>
        </div>
        {{-- End Form  --}}


					{{-- Start Table  --}}
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Category</h6>
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>Category Image</th>
                  <th>Category Name</th>
                  <th>Edit </th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($all_category as $key => $input)
                <tr>   
                    <td><img src='{{asset("/imager/$input->cat_image")}}'class="img-thumbnail" width="100"></td>
                    <td>{{$input['cat_name']}}</td>
                    <td><a href="categorydash/edit/{{$input['id']}}"><button type="button"
                        class="btn btn-primary">Edit</button></a></td>
                    <td><a href="categorydash/{{$input['id']}}"><button type="button"
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
	{{-- End Table  --}}
@endsection
