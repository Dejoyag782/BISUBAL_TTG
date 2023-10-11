<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Classes</title>
     
    <meta name="csrf-token" content="{{ csrf_token() }}">
     
    
 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
    <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
 
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 
</head>
<body>
 
<div class="container mt-2">
 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Classes</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-primary" onClick="addClass()" href="javascript:void(0)">
                <i class="fa fa-plus" style="font-size: 10px;padding-right:10px; font-size:20px;">
                </i>Add New Class</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <!-- include courses datatables -->
    @include('classes.table')
    
</div>
 
  <!-- boostrap company model -->
    @include('classes.modal')
<!-- end bootstrap model -->
 
</body>
    @include('classes.classes-ajax')
</html>