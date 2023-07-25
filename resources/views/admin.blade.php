<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
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

  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-6">
        <h1>Admin Dashboard</h1>
        <p class="text-danger">Your Email: @if (session('email')) {{session('email')}} @endif </p>
        <div class="h-100 d-flex mt-2 text-center justify-content-center">
            
            <div class="d-block">
              <a href="/product" class="btn btn-dark">Show all Products</a>
            </div>
               
          </div>
            <div class="d-block">
              <a href="{{url('/logout')}}" class="btn btn-dark">Logout</a>
            </div>
               
       
      </div>
    </div>
  </div>

</body>
</html>
