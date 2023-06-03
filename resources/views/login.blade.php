<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SiPupuk | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('Style/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('Style/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('Style/dist/css/adminlte.min.css') }}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('Style/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
</head>

<body class="hold-transition login-page" background="Style/dist/img/bg.jpeg" style="background-size: cover">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary card-green">
      <div class="card-header text-center">
        <a href="App/index2.html" class="h1"><b>SiPupuk</b> :)</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Login Dulu Baru Masuk -_-</p>

        <form action="/do_login" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="Text" class="form-control" placeholder="Username" name="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-success">Log In</button>
          </div>
          <!-- /.col -->
      </div>
      </form>
      <!-- 
        <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center">Register a new membership</a>
        </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="{{ asset('Style/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('Style/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('Style/dist/js/adminlte.min.js') }}"></script>
  <!-- SweetAlert2 -->
  <script src="{{ asset('Style/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
</body>

<!-- Notifikasi login start -->
<?php
if (isset($_GET['error'])) {
  $x = ($_GET['error']);
  if ($x == 1) {
    echo " 
  <script>
  var Toast = Swal.mixin({
    toast: true,
    position: 'center-top',
    showConfirmButton: false,
    timer: 3000
  });
  Toast.fire({
    icon: 'warning',
    title: 'Lodin Gagal BOSS'
  })
  </script>";
  } else if ($x == 2) {
    echo " 
  <script>
  var Toast = Swal.mixin({
    toast: true,
    position: 'center-top',
    showConfirmButton: false,
    timer: 3000
  });
  Toast.fire({
    icon: 'warning',
    title: 'Silahkan Inputkan Username dan Password'
  })
  </script>";
  } else {
    echo '';
  }
}
?>
<!-- Notifikasi login end -->

</html>