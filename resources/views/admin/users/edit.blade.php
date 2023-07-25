@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update a Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">dashboard</a></li>
              <li class="breadcrumb-item active">update Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
@section('body')
<!-- Main row -->

<h1 class="text-center">Update a Product</h1>
    <div class="text-center">
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <form action="{{route('users.update', ['product' => $product])}}" method="POST">
            @csrf
            @method('PUT')
          <div class="mb-3">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}" id="inputName" placeholder="Enter product name">
          </div>
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Quantity</label>
            <input type="number" class="form-control" name="qty" value="{{$product->qty}}" id="inputEmail" placeholder="Enter product quantity">
          </div>
          <div class="mb-3">
            <label for="inputPass" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" value="{{$product->price}}" id="inputPass" placeholder="Enter price">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Enter description">{{$product->description}}</textarea>
          </div>
          
          <div class="text-center">
            <button type="submit" class="btn btn-primary px-5">Update</button>
          </div>
          
        </form>
      </div>
    </div>
  </div>

<!-- /.row (main row) -->
@endsection