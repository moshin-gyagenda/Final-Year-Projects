
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
                        <h3 class="page-title">Visitor Registration</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Visitors</a></li>
                            <li class="breadcrumb-item active">Add Visitor</li>
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
                        <form action="{{ route('submit')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title">Visitor Information</h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="firstname" placeholder="Enter First Name" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <label>Last Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="lastname" placeholder="Enter Last Name" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <label>Phone Number <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="phone" placeholder="Enter Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input class="form-control" type="email" name="email" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <label>Company/Organization</label>
                                        <input class="form-control" type="text" name="company" placeholder="Enter Company/Organization">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <label>NIN/ No. Or Student ID No.</label>
                                        <input class="form-control" type="text" name="idno" placeholder="NIN/ No. Or Student ID No.">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Person Your Visiting</label>
                                        <input class="form-control" type="text" name="personyourvisting" placeholder="Person Your Visiting">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Room No.</label>
                                        <input class="form-control" type="text" name="roomno" placeholder="Room No.">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Purpose of Visit</label>
                                        <textarea class="form-control" name="purpose" placeholder="Enter Purpose of Visit"></textarea>
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