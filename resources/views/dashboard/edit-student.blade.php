
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
<h3 class="page-title">Student Update</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="students.html">Student</a></li>
<li class="breadcrumb-item active">Update Admission</li>
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
    <form method="post" action="{{ route('update-student', $student->id) }}">
        @csrf
        @method('PUT')
<div class="row">
<div class="col-12">
<h5 class="form-title student-info">Update Student Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>First Name <span class="login-danger">*</span></label>
<input class="form-control" type="text" value="{{ old('firstname', $student->firstname) }}" name="firstname" placeholder="Enter First Name" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Last Name <span class="login-danger">*</span></label>
<input class="form-control" type="text" value="{{ old('lastname', $student->lastname) }}" name="lastname" placeholder="Enter First Name"required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Gender <span class="login-danger">*</span></label>
<select class="form-control select" value="{{ old('gender', $student->gender) }}" name="gender" required>
<option value="{{ old('gender', $student->gender) }}">{{ old('gender', $student->gender) }}</option>
<option value="Female">Female</option>
<option value="Male">Male</option>
<option value="Others">Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Date Of Birth <span class="login-danger">*</span></label>
<input class="form-control datetimepicker" value="{{ old('dateofbirth', $student->dateofbirth) }}" type="date" name="dateofbirth" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Nationality</label>
<input class="form-control" type="text" value="{{ old('nationality', $student->nationality) }}" name="nationality" placeholder="Enter Nationality"required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Level of Study <span class="login-danger">*</span></label>
<select class="form-control select" name="levelofstudy" value="{{ old('levelofstudy', $student->levelofstudy) }}" required>
<option value="{{ old('levelofstudy', $student->levelofstudy) }}">{{ old('levelofstudy', $student->levelofstudy) }}</option>
<option value="0'Level">0'Level</option>
<option value="A Level">A Level</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Religion <span class="login-danger">*</span></label>
<select class="form-control select" value="{{ old('religion', $student->religion) }}" name="religion" required>
<option value="{{ old('religion', $student->religion) }}">{{ old('levelofstudy', $student->levelofstudy) }} </option>
<option value="Muslim">Muslim</option>
<option value="Christian">Christian</option>
<option value="Others">Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Grades Scored <span class="login-danger">*</span></label>
<input class="form-control" type="text" value="{{ old('grades', $student->grades) }}" name="grades" placeholder="Enter Grades" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Class <span class="login-danger">*</span></label>
<select class="form-control select" value="{{ old('class', $student->class) }}" name="class" required>
<option value="{{ old('class', $student->class) }}">{{ old('class', $student->class) }}</option>
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
<input class="form-control" type="text"  value="{{ old('schoolattended', $student->schoolattended) }}"name="schoolattended" placeholder="Previous School Attended" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Health Information <span class="login-danger">*</span></label>
<input class="form-control" type="text" value="{{ old('healthinformation', $student->healthinformation) }}" name="healthinformation" placeholder="Health Information" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Extra-Curricular Activities and Interests <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="interest" value="{{ old('interest', $student->interest) }}" placeholder="Extra-Curricular" required>
</div>
</div>

<div class="col-12">
<h5 class="form-title student-info">Parent/Guardian Information </h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>First Name <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="pfirstname" value="{{ old('pfirstname', $student->pfirstname) }}" placeholder="Enter First Name " required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Last Name <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="plastname" value="{{ old('plastname', $student->plastname) }}" placeholder="Enter Last Name" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Gender <span class="login-danger">*</span></label>
<select class="form-control select" name="pgender" value="{{ old('pgender', $student->pgender) }}" required>
<option value="{{ old('pgender', $student->pgender) }}">{{ old('pgender', $student->pgender) }}</option>
<option value="Female">Female</option>
<option value="Male">Male</option>
<option value="Others">Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms ">
<label>Email Address <span class="login-danger">*</span></label>
<input class="form-control " type="email" name="email" value="{{ old('email', $student->email) }}" placeholder="Enter Email" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>NIN Number</label>
<input class="form-control" type="text" name="ninnumber" value="{{ old('ninnumber', $student->ninnumber) }}" placeholder="Enter NIN Number" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Religion<span class="login-danger">*</span></label>
<select class="form-control select" value="{{ old('preligion', $student->preligion) }}" name="preligion" required>
<option value="{{ old('preligion', $student->preligion) }}">{{ old('preligion', $student->preligion) }}</option>
<option value="Christian">Christian</option>
<option value="Muslim">Muslim</option>
<option value="Other">Other</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Occupation<span class="login-danger">*</span></label>
<input class="form-control" type="text" name="occupation" value="{{ old('occupation', $student->occupation) }}" placeholder="Occupation" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Physical Address <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="physicaladdress" value="{{ old('physicaladdress', $student->physicaladdress) }}" placeholder="Physical Address" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Phone Number <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="phonenumber" value="{{ old('phonenumber', $student->phonenumber) }}" placeholder="Phone Number" required>
</div>
</div>

<div class="col-12">
<div class="student-submit">
<button type="submit" class="btn btn-primary">Update Details</button>
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