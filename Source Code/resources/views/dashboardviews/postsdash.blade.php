@extends('../layouts/adminApp')
@section('content')


<nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Manage</a></li>
      <li class="breadcrumb-item active" aria-current="page">Posts</li>
    </ol>
  </nav>
  
  {{-- Start Table  --}}
  
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Post</h6>
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <th>Image</th>
                <th>User Name </th>
                <th>User Email </th>
                <th>Category </th>
                <th>SubCategory</th>
                <th>Title</th>
                <th>Description</th>
                <th>Publish time</th>
                <th>Delete</th>
              </thead>
              <tbody>
                @foreach($posts as $value)
                <tr>
                    <td><img src="{{ URL::to('/') }}/imager/{{ $value->post_image}}" class="img-thumbnail" width="100"/></td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->cat_name}}</td>
                    <td>{{$value->sub_name}}</td>
                    <td>{{$value->post_title}}</td>
                    <td>{{$value->post_desc}}</td>
                    <td>{{$value->created_at}}</td>
                    <td><a href="postsdash/{{ $value->id }}/delete" class="text-decoration-none btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
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