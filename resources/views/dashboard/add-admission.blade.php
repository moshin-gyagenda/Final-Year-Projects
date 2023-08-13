
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
<h3 class="page-title">Student Admission</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="students.html">Student</a></li>
<li class="breadcrumb-item active">Add Admission</li>
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
@if (session('failed'))
    <div class="alert alert-danger">
        {{ session('failed') }}
    </div>
@endif
<div class="row">
<div class="col-sm-12">
<div class="card comman-shadow">
<div class="card-body">
<form action="{{ route('submit-admission')}}" method="post">
 @csrf
<div class="row">
<div class="col-12">
<h5 class="form-title student-info">Student Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>First Name <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="firstname" placeholder="Enter First Name">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Last Name <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="lastname" placeholder="Enter First Name">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Gender <span class="login-danger">*</span></label>
<select class="form-control select" name="gender">
<option>Select Gender</option>
<option value="Female">Female</option>
<option value="Male">Male</option>
<option value="Others">Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Date Of Birth <span class="login-danger">*</span></label>
<input class="form-control datetimepicker" type="date" name="dateofbirth" >
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Nationality</label>
<input class="form-control" type="text" name="nationality" placeholder="Enter Nationality">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Level of Study <span class="login-danger">*</span></label>
<select class="form-control select" name="levelofstudy">
<option>Please Select Level </option>
<option value="0'Level">0'Level</option>
<option value="A Level">A Level</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Religion <span class="login-danger">*</span></label>
<select class="form-control select" name="religion">
<option>Please Select Religion </option>
<option value="Muslim">Muslim</option>
<option value="Christian">Christian</option>
<option value="Others">Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Grades Scored <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="grades" placeholder="Enter Email Address">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Class <span class="login-danger">*</span></label>
<select class="form-control select" name="class">
<option>Please Select Class </option>
<option value="S.1">S.1</option>
<option value="S.2">S.2</option>
<option value="S.3">S.3</option>
<option value="S.4">S.4</option>
<option value="S.5">S.5</option>
<option value="S."6>S.6</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Previous School Attended <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="schoolattended" placeholder="Previous School Attended">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Health Information <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="healthinformation" placeholder="Health Information">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Extra-Curricular Activities and Interests <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="interest" placeholder="Extra-Curricular">
</div>
</div>

<div class="col-12">
<h5 class="form-title student-info">Parent/Guardian Information </h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>First Name <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="pfirstname" placeholder="Enter First Name ">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Last Name <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="plastname" placeholder="Enter Last Name">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Gender <span class="login-danger">*</span></label>
<select class="form-control select" name="pgender">
<option>Select Gender</option>
<option value="Female">Female</option>
<option value="Male">Male</option>
<option value="Others">Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms ">
<label>Email Address <span class="login-danger">*</span></label>
<input class="form-control " type="email" name="email"  placeholder="Enter Email">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>NIN Number</label>
<input class="form-control" type="text" name="ninnumber" placeholder="Enter NIN Number">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Religion<span class="login-danger">*</span></label>
<select class="form-control select" name="preligion">
<option>Please Select Religion</option>
<option value="Christian">Christian</option>
<option value="Muslim">Muslim</option>
<option value="Other">Other</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Occupation<span class="login-danger">*</span></label>
<input class="form-control" type="text" name="occupation" placeholder="Occupation">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Physical Address <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="physicaladdress" placeholder="Physical Address">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Phone Number <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="phonenumber" placeholder="Phone Number">
</div>
</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-6">
<form class="custom-mt-form">
<div class="form-group">
<label>Academic Report</label>
<input type="file" name="academicreport" accept="image/*" class="form-control">
</div>
</form>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-6">

<div class="form-group">
<label>Birth Certificates</label>
<input type="file" name="birthcertificate" accept="image/*" class="form-control">
</div>

</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-6">

<div class="form-group">
<label>Student Passport Photos</label>
<input type="file" name="spassportphoto" accept="image/*" class="form-control">
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-6">
<div class="form-group">
<label>Parent Passport Photos</label>
<input type="file" name="ppassportphoto" accept="image/*" class="form-control">
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