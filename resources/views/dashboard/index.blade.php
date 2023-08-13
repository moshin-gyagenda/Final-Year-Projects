
@extends('layouts/main')
@section('content')

@include('layouts/header')
<!-- start of the sidebar -->
@include('layouts/sidebar')
        
<!-- end of the sidebar -->

        <div class="page-wrapper">
            @if(Auth::user()->role=='admin')
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Welcome Admin!</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Visitors</h6>
                                        <h3>{{$visitors}}</h3>
                                    </div>
                                    <div class="db-icon icon-blue">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Checked-In Visitors</h6>
                                        <h3>{{($checkedinvisitors)}}</h3>
                                    </div>
                                    <div class="db-icon icon-green">
                                        <i class="fas fa-user-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Checked-Out Visitors</h6>
                                        <h3>{{$checkedoutvisitors}}</h3>
                                    </div>
                                    <div class="db-icon icon-orange">
                                        <i class="fas fa-user-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Visitors Still Inside</h6>
                                        <h3>{{$pendingvisitors}}</h3>
                                    </div>
                                    <div class="db-icon icon-red">
                                        <i class="fas fa-exclamation-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
              
                
                
                
            </div>
            @endif
           
            <br><br><br><br><br><br><br><br><br><br>
            
        
        <footer>
            <p style="text-transform: capitalize;">Copyright © 2023 Valley Courts Hostel</p>
        </footer>
    </div>
@endsection