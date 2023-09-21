<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Laravel 10 AJAX CRUD using DataTable js Tutorial From Scratch - Tutsmake.com</title>
     
    <meta name="csrf-token" content="{{ csrf_token() }}">
     
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="{{asset('datatable_assets/css/datatable.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
    <!-- <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet"> -->
 
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

 
</head>
<body>
 
<div class="container mt-2">
 
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Rooms</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-primary d-xxl-flex align-items-center align-content-center justify-content-xxl-center align-items-xxl-center" onClick="add()" href="javascript:void(0)"> <i class="fa fa-plus" style="font-size: 10px;padding-right:10px; font-size:20px;">
                </i>Add New Room </a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    @include('rooms.table')
    
</div>
 
<!-- boostrap Add rooms modal -->
    @include('rooms.modal')
<!-- end bootstrap modal -->
 
</body>
 @include('rooms.rooms-ajax')
</html>