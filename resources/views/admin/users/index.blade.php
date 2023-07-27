@extends('admin.main-layout')

@section('custom-css')
  <link rel="stylesheet" href="{{ asset('assets/css/datatables/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/datatables/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/datatables/buttons.bootstrap4.min.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    
@endsection



@section('content-header')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">dashboard</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
@section('body')
<!-- Main row -->
  <div class="row">
    <div class="container-fluid">
      <!-- Product show code -->
      <h1 class="text-center">Products</h1>
      <!-- <h3 class="text-primary text-center"><a href="{{route('users.create')}}">Create a Product</a></h3> -->
    <div class="text-primary text-center">
        @if(session()->has('success'))
            <span class="text-primary text-center">{{session('success')}}</span>
        @endif
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
            <table id="dataTable" class="table table-striped table-bordered display" style="width: 100%">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">qty</th>
                    <th scope="col">price</th>
                    <th scope="col">description</th>
                    <!-- <th scope="col">Edit</th> -->
                    <!-- <th scope="col">Delete</th> -->
                    </tr>
                </thead>
                <tbody> 
                </tbody>
            </table>
        </div>
      </div>
    </div>
    </div>
  </div>
<!-- /.row (main row) -->

@endsection
@section('custom-scripts-links')
<script src="{{ asset('assets/js/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/js/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/js/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/js/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/js/datatables/dataTables.buttons.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> 
@endsection

@section('custom-scripts')
<script>
  // alert('hi');

$(document).ready(function() {
  $('#dataTable').DataTable({
    iDisplayLength: '{{ 25 }}',
    processing: true,
    serverSide: true,
    searching: true,
    responsive: true,
    "bDestroy": true,
    ajax: {
      url: '{{ route('users.index') }}',
      method: 'GET'
    },
    columns: [
      { data: 'id', name: 'id' },
      { data: 'name', name: 'name' },
      { data: 'qty', name: 'qty' },
      { data: 'price', name: 'price' },
      { data: 'description', name: 'description' },
      { data: 'action', name: 'action', orderable: false, searchable: false },
    ],
  });
});
</script>
@endsection