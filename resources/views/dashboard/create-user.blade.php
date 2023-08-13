
@extends('layouts/main')
@section('content')

@include('layouts/header')
<!-- start of the sidebar -->
@include('layouts/sidebar')
        
<!-- end of the sidebar -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">User Registration</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Users</a></li>
                            <li class="breadcrumb-item active">Add User</li>
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
                {{ session('failed') }}
            </div>
        @endif

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="{{ route('submit-user')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title">User Registration</h5>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Full Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="full_name" placeholder="Enter Full Name" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input class="form-control" type="email" name="email" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password" placeholder="Enter Password">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" name="role">
                                            <option value="admin">select role</option>
                                            <option value="admin">Admin</option>
                                            <option value="staff">Staff</option>
                                            {{-- <option value="visitor">Visitor</option> --}}
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <footer>
                <p>Copyright © 2023 Namagabi Secondary School</p>
            </footer>
        </div>
    </div>
@endsection