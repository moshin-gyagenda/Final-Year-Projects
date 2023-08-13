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
<h3 class="page-title">Student Details</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="students.html">Student</a></li>
<li class="breadcrumb-item active">Student Details</li>
</ul>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12">
<div class="about-info">
<h4>Profile <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h4>
</div>
<div class="student-profile-head">
<div class="profile-bg-img">
<img src="{{asset('assets/img/profile-bg.jpg')}}" alt="Profile">
</div>
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="profile-user-box">
<div class="profile-user-img">
<img src="{{asset('assets/img/profile-user.jpg')}}" alt="Profile">
<div class="form-group students-up-files profile-edit-icon mb-0">
<div class="uplod d-flex">
<label class="file-upload profile-upbtn mb-0">
<i class="feather-edit-3"></i><input type="file">
</label>
</div>
</div>
</div>
<div class="names-profiles">
<h6>First Name</h6>
<h6>{{$student->firstname}}</h6>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 d-flex align-items-center">
<div class="follow-group">
<div class="students-follows">
<h6>Last Name</h6>
<h6>{{$student->lastname}}</h6>
</div>
<div class="students-follows">
<h6>Class</h6>
<h6>{{$student->class}}</h6>
</div>

</div>
</div>
{{-- <div class="col-lg-4 col-md-4 d-flex align-items-center">
<div class="follow-btn-group">
<button type="submit" class="btn btn-info follow-btns">Follow</button>
<button type="submit" class="btn btn-info message-btns">Message</button>
</div>
</div> --}}
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="student-personals-grp">
<div class="card">
<div class="card-body">
<div class="heading-detail">
<h4>Personal Details :</h4>
</div>
<div class="personal-activity">
<div class="personal-icons">
<i class="feather-user"></i>
</div>
<div class="views-personal">
<h4>Name</h4>
<h5>{{$student->firstname . ' ' . $student->lastname}}</h5>
</div>
</div>

<div class="personal-activity">
<div class="personal-icons">
<i class="feather-phone-call"></i>
</div>
<div class="views-personal">
<h4>Gender</h4>
<h5>{{$student->gender}}</h5>
</div>
</div>
<div class="personal-activity">
<div class="personal-icons">
<i class="feather-mail"></i>
</div>
<div class="views-personal">
<h4>Date of Birth</h4>
<h5>{{$student->dateofbirth}}</h5>
</div>
</div>
<div class="personal-activity">
<div class="personal-icons">
<i class="feather-user"></i>
</div>
<div class="views-personal">
<h4>Class</h4>
<h5>{{$student->class}}</h5>
</div>
</div>
<div class="personal-activity">
<div class="personal-icons">
<i class="feather-calendar"></i>
</div>
<div class="views-personal">
<h4>Nationality</h4>
<h5>{{$student->nationality}}</h5>
</div>
</div>
<div class="personal-activity">
<div class="personal-icons">
<i class="feather-italic"></i>
</div>
<div class="views-personal">
<h4>Interests</h4>
<h5>{{$student->interest}}</h5>
</div>
</div>
<div class="personal-activity mb-0">
<div class="personal-icons">
<i class="feather-map-pin"></i>
</div>
<div class="views-personal">
<h4>Religion</h4>
<h5>{{$student->religion}}</h5>
</div>
</div>
</div>
</div>
</div>
<div class="student-personals-grp">
<div class="card mb-0">
<div class="card-body">
<div class="heading-detail">
<h4>Fees Payment</h4>
</div> 
<div class="skill-blk">
<div class="skill-statistics">
<div class="skills-head">
    <h6>Status</h6>
    <p>95%</p> 
</div>
<div class="progress mb-0">
<div class="progress-bar bg-photoshop" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
</div> 
</div>
<div class="skill-statistics">
<div class="skills-head">
{{-- <h6>Code editor</h6>
<p>75%</p> --}}
</div>
{{-- <div class="progress mb-0">
<div class="progress-bar bg-editor" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div> --}}
</div>
<div class="skill-statistics mb-0">
<div class="skills-head">
 {{-- <h6>Status</h6>
<p>95%</p>  --}}
</div>
{{-- <div class="progress mb-0">
<div class="progress-bar bg-illustrator" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
</div>  --}}
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="student-personals-grp">
<div class="card mb-0">
<div class="card-body">
<div class="heading-detail">
<h4>Parent Information</h4>
</div>

<div class="hello-park">
<h6>First Name</h6>
<div class="educate-year">
<h6>{{$student->pfirstname}}</h6>
</div>
</div>
<div class="hello-park">
    <h6>Last Name</h6>
    <div class="educate-year">
        <h6>{{$student->plastname}}</h6></div>
    </div>
    <div class="hello-park">
        <h6>Email</h6>
        <div class="educate-year">
            <h6>{{$student->email}}</h6> </div>
        </div>
        <div class="hello-park">
            <h6>Occupation</h6>
            <div class="educate-year">
                <h6>{{$student->occupation}}</h6></div>
            </div>
            <div class="hello-park">
                <h6>Religion</h6>
                <div class="educate-year">
                    <h6>{{$student->preligion}}</h6></div>
                </div>
                <div class="hello-park">
                    <h6>Physical Address</h6>
                    <div class="educate-year">
                        <h6>{{$student->physicaladdress}}</h6> </div>
                    </div>
                    <div class="hello-park">
                        <h6>Phone Number</h6>
                        <div class="educate-year">
                            <h6>{{$student->phonenumber}}</h6></div>
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
    <p>Copyright © 2023 Namagabi Secondary School</p>
</footer>
</div>
</div>
@endsection