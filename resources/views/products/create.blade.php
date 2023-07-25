<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create a Product</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <style>
    /* Custom CSS for vertical centering */
    .display-middle {
      display: flex;
      align-items: center;
      height: 100vh; /* Adjust as needed */
    }
  </style>
</head>
<body>
    <h1 class="text-center">Create a Product</h1>
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
        <form action="{{route('proudct.store')}}" method="post">
            @csrf
            @method('post')
          <div class="mb-3">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="inputName" placeholder="Enter product name">
          </div>
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Quantity</label>
            <input type="number" class="form-control" name="qty" id="inputEmail" placeholder="Enter product quantity">
          </div>
          <div class="mb-3">
            <label for="inputPass" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" id="inputPass" placeholder="Enter price">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Enter description"></textarea>
          </div>
          
          <div class="text-center">
            <button type="submit" class="btn btn-primary px-5">Save a New Product</button>
          </div>
          
        </form>
      </div>
    </div>
  </div>

</body>
</html>
