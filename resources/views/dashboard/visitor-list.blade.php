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
<h3 class="page-title">Visitors</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="visitors.html">Visitor</a></li>
<li class="breadcrumb-item active">All Visitors</li>
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
<input type="text" class="form-control" placeholder="Search by Phone ...">
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
<h3 class="page-title">Visitors</h3>
</div>
{{-- <div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
<a href="#" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="{{ route('add-vistor') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div> --}}
</div>
</div>

<div class="table-responsive">
    <table class="table border-0 star-visitor table-hover table-center mb-0 datatable table-striped">
        <thead class="visitor-thread">
            <tr>
                <th>No.</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Person Visiting</th>
                <th>Room No</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($visitors as $visitor)
            <tr>
                <td>{{ $visitor->id }}</td>
                <td>
                    <h2 class="table-avatar">
                        <a href="visitor-details.html">{{ $visitor->firstname }} {{ $visitor->lastname }}</a>
                    </h2>
                </td>
                <td>{{ $visitor->phone }}</td>
                <td>{{ $visitor->personyourvisting }}</td>
                <td>{{ $visitor->roomno }}</td>
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