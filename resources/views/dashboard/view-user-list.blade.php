@extends('layouts/main')
@section('content')

@include('layouts/header')
<!-- start of the sidebar -->
@include('layouts/sidebar')
        
<!-- end of the sidebar -->

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Users</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="visitors.html">User</a></li>
<li class="breadcrumb-item active">All Users</li>
</ul>
</div>
</div>
</div>
</div>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="visitor-group-form">
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by Email ...">
</div>
</div>
<div class="col-lg-2">
<div class="search-visitor-btn">
<button type="btn" class="btn btn-primary">Search</button>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card card-table comman-shadow">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">User List</h3>
</div>

</div>
</div>

<div class="table-responsive">
    <table class="table border-0 star-visitor table-hover table-center mb-0 datatable table-striped">
        <thead class="visitor-thread">
            <tr>
                <th>User ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Email Verified At</th>
                <th>Role</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>
                    <h2 class="table-avatar">
                        <a href="user-details.html">{{ $user->full_name }}</a>
                    </h2>
                </td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->email_verified_at }}</td>
                <td>{{ $user->role }}</td>
                <td class="text-end">
                    <div class="actions">
                        <form action="" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-sm bg-success mr-2">
                                <i class="feather-eye"></i>
                            </button>
                        </form>
                       
                        <form action="" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-sm bg-info mr-2" style="margin-left: 2px;">
                                <i class="feather-edit"></i>
                            </button>
                        </form>
                        <form method="POST" action="">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm bg-danger" style="margin-left: 2px;">
                                <i class="feather-delete"></i>
                            </button>
                        </form>
                    </div>
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
</div>
</div>

</div>
</div>
</div>
<footer>
                <p>Copyright © 2023 Valley Courts Hostel</p>
            </footer>
        </div>
    </div>
@endsection