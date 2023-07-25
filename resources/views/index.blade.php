<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
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

  <!-- <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <form action="{{url('/insert')}}" method="post">
            @csrf
          <div class="mb-3">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="inputName" placeholder="Enter your name">
          </div>
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="inputPass" class="form-label">Password</label>
            <input type="password" class="form-control" name="pass" id="inputPass" placeholder="Password">
          </div>
          
          <div class="text-center">
            <button type="submit" class="btn btn-primary px-5">Register</button>
          </div>
          <div class="h-100 d-flex mt-2 text-center justify-content-center">
            <div class="h-100">
              <span class="d-block align-items-center justify-content-center mx-2">Already have an account? </span>
            </div>
            <div class="d-block">
              <a href="/login" >Login</a>
            </div>
               
          </div>
        </form>
      </div>
    </div>
  </div> -->

  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin-assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('admin-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin-assets/dist/css/adminlte.min.css')}}">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign up to start your session</p>

      <form action="{{url('/insert')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-solid fa-person"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pass" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          
        </div>
        <div class="social-auth-links text-center mt-2 mb-3">
        <button type="submit" class="btn btn-primary btn-block">Register</button>
      </div>
      </form>

      <!-- /.social-auth-links -->
      <p class="mb-0">
        <a href="/login" class="text-center">Already have an account?</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('admin-assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-assets/dist/js/adminlte.min.js')}}"></script>

</body>
</html>


</body>
</html>


</body>
</html>
