@extends('../layouts/adminApp')
@section('content')

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" style="color:">Manage</a></li>
            <li class="breadcrumb-item active" aria-current="page">Admin</li>
        </ol>
    </nav>

    {{-- Start Form --}}
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create Admin</h6>
                    <form action="admindash/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">

                                    <label for="exampleInputText1">Full Name</label>
                                    <input type="text" class="form-control" name="admin_name" id="exampleInputText1"
                                        placeholder="Enter Name">
                                    @error('name')
                                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Admin</label>
                                    <select class="form-control" name="super_admin" id="exampleFormControlSelect1">
                                        <option selected disabled>Select Admin</option>
                                        <option value="admin">Admin</option>
                                        <option value="superadmin">Super Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Email</label>
                                    <input type="email" class="form-control" name="admin_email" id="exampleInputEmail3"
                                        placeholder="Enter Email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword3">Password</label>
                                    <input type="password" class="form-control" name="admin_password"
                                        id="exampleInputPassword3" placeholder="Enter Password">
                                </div>
                            </div>
                        </div>
                        @error('admin_password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="file" name="admin_image">
                        <div class="col-sm-6" style="margin-top:2%">
                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- End Form --}}

    {{-- Start Table --}}

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Admins</h4>
                    <p class="card-description">
                        Add Admin <code>Dashboard</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Admin Image
                                    </th>
                                    <th>
                                        Full Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                    <th>
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $value)
                                    <tr>
                                        <td><img src="{{ URL::to('/') }}/imager/{{ $value->user_image }}"
                                                class="img-thumbnail" width="75" /></td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td><a href="admindash/{{ $value->id }}/edit"> <button type="button"
                                                    class="btn btn-primary">Edit</button></a></td>
                                        <td><a href="admindash/{{ $value->id }}/delete"><button type="button"
                                                    class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- End Table --}}
@endsection
