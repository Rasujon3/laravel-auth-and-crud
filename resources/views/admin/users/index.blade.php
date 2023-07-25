@extends('admin.main-layout')

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
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a class="btn btn-dark" href="{{route('users.edit', ['product' => $product] )}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('users.delete', ['product' => $product])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
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
<!-- /.row (main row) -->
@endsection