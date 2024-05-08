<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
  <link href="dist/img/logoUA.png" rel="icon">
  <link href="dist/img/logoUA.png" rel="apple-touch-icon">
</head>
<body class="hold-transition login-page" style="background-image: url(assets/img/bglogin.jpg)">
<div class="login-box">
  <div class="login-logo">
    <a href="index.html"><b>Puskesmas</b>UA Medika</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Log in to start your session</p>
      <!-- <p class="login-box-msg">Username : umam | Password : umam123</p> -->


      <form action="proses.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
        
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register1.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>


<!-- script untuk form login -->
<script>
  function login(){
      //mengambil nilai username dan password dari form
      let user = document.getElementById("username").value;
      let pass = document.getElementById("password").value;
      let form = document.getElementById("loginForm");

      //memeriksa apakah username dan password sesuai dengan yang ditentukan
      if (user == "umam" && pass == "umam123") {
          alert("Login Berhasil");
         form.setAttribute("action", "./home.php"); 
      }
      else {
          alert("Login Gagal. Coba Lagi!");
      }
   }    
</script>
</body>
</html>