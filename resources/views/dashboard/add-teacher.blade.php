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
<div class="col">
<h3 class="page-title">Add Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="teachers.html">Teachers</a></li>
<li class="breadcrumb-item active">Add Teachers</li>
</ul>
</div>
</div>
</div>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('failed'))
    <div class="alert alert-danger">
        {{ session('failed') }}
    </div>
@endif
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form action="{{ route('submit-teacher-details')}}" method="post">
    @csrf
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Basic Details</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Fist Name<span class="login-danger">*</span></label>
<input type="text" class="form-control" name="firstname" placeholder="Enter Last Name">
</div>
</div>
<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
    <label>Last Name<span class="login-danger">*</span></label>
    <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
    </div>
    </div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Email <span class="login-danger">*</span></label>
<input type="email" class="form-control" name="teache_email" placeholder="Enter Email">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Gender <span class="login-danger">*</span></label>
<select class="form-control select" name="gender">
<option value="Male">Select Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Other">Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms ">
<label>Date Of Birth <span class="login-danger">*</span></label>
<input class="form-control datetimepicker" name="dateofbirth" type="date" placeholder="DD-MM-YYYY">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Mobile <span class="login-danger">*</span></label>
<input type="text" class="form-control" name="phone" placeholder="Enter Phone">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms ">
<label>Joining Date <span class="login-danger">*</span></label>
<input class="form-control datetimepicker" type="date" name="joiningdate" placeholder="DD-MM-YYYY">
</div>
</div>
<div class="col-12 col-sm-4 local-forms">
<div class="form-group">
<label>Address<span class="login-danger">*</span></label>
<input class="form-control" type="text" name="address" placeholder="Enter Address">
</div>
</div>
 <div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Experience <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="experience" placeholder="Enter Experience">
</div>
</div>

<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
    <label>Class <span class="login-danger">*</span></label>
    <input type="text" name="class" class="form-control" placeholder="Enter Class">
    </div>
    </div>
    <div class="col-12 col-sm-4">
    <div class="form-group local-forms">
    <label>Stream <span class="login-danger">*</span></label>
    <input type="text" name="stream" class="form-control" placeholder="Enter Stream">
    </div>
    </div>
    <div class="col-12 col-sm-4">
    <div class="form-group local-forms">
    <label>Subject <span class="login-danger">*</span></label>
    <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
    </div>
    </div>
    
<div class="col-12">
<h5 class="form-title"><span>Login Details</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Username <span class="login-danger">*</span></label>
<input type="text" class="form-control" name="username" placeholder="Enter Username">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Email ID <span class="login-danger">*</span></label>
<input type="email" name="email" class="form-control" placeholder="Enter Mail Id">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Password <span class="login-danger">*</span></label>
<input type="password" name="password" class="form-control" placeholder="Enter Password">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Repeat Password <span class="login-danger">*</span></label>
<input type="password"  name="password_confirmation" class="form-control" placeholder="Repeat Password">
</div>
</div>
<div class="col-12">
<h5 class="form-title"><span>Attach Documents</span></h5>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-6">
    <div class="form-group">
    <label>Passport Photos</label>
    <input type="file" name="passport" accept="image/*" class="form-control">
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="form-group">
        <label>National Id</label>
        <input type="file" name="national_id" accept="image/*" class="form-control">
        </div>
        </div>
<div class="col-12">
<div class="student-submit">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
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
