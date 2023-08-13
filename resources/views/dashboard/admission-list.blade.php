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
<h3 class="page-title">admission</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="admission.html">admission</a></li>
<li class="breadcrumb-item active">All admission</li>
</ul>
</div>
</div>
</div>
</div>
@if (session('success'))
    <div class="alert alert-danger">
        {{ session('success') }}
    </div>
@endif
@if (session('failed'))
    <div class="alert alert-danger">
        {{ session('failed') }}
    </div>
@endif
<div class="admission-group-form">
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by ID ...">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by Name ...">
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by Phone ...">
</div>
</div>
<div class="col-lg-2">
<div class="search-admission-btn">
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
<h3 class="page-title">admission</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
<a href="#" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="{{route('add-admission')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table border-0 star-admission table-hover table-center mb-0 datatable table-striped">
<thead class="admission-thread">
<tr>
<th>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</th>
<th>admission No.</th>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Class</th>
<th>Parent's Number</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
    @foreach ($admissions as $admission)
        
    
 <tr>
<td>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</td>
<td>{{$admission->admissionno}}</td>
<td>
<h2 class="table-avatar">
<a href="admission-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
<a href="admission-details.html">{{$admission->firstname}}</a>
</h2>
</td>
<td>{{$admission->lastname}}</td>
<td>{{$admission->gender}}</td>
<td>{{$admission->class}}</td>
<td>{{$admission->phonenumber}}</td>
<td class="text-end">
<div class="actions ">
<form action="#" method="GET">
    @csrf
<button type="submit" class="btn btn-sm bg-success-light me-2 ">
<i class="feather-eye"></i>
</button>
</form>
<form action="#" method="GET">
    @csrf
<button type="submit" class="btn btn-sm bg-danger-light">
    <i class="feather-edit"></i>
    </button>
</form>
<form method="POST" action="#">
    @csrf
    @method('DELETE')
<button type="submit" class="btn btn-sm bg-danger-light">
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
<footer>
                <p>Copyright © 2023 Namagabi Secondary School</p>
            </footer>
        </div>
    </div>
@endsection