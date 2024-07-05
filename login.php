<?php
session_start();
include("conn");
  if(isset($_SESSION['loggedin'])){
   if($_SESSION['u_type']==1){
    header("location:admin/index.php");
  }
  if($_SESSION['u_type']==2){
    header("location:index.php");
  }
}
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grafix Wizard | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="Admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="Admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="Admin/plugins/summernote/summernote-bs4.min.css">
</head>
<style>
  .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
</style>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100 bg-light rounded">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="images/GW Title.png"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="" method="post">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="form1Example13" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
          </div>

          <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
            role="button">
            <i class="fab fa-facebook-f me-2"></i> Continue with Facebook
          </a>
          <a class="btn btn-primary btn-lg btn-block" style="background-color: #c71610" href="#!"
            role="button">
            <i class="fab fa-google me-2"></i> Continue with Gmail</a>

        </form>
      </div>
    </div>
  </div>
</section>

<?php
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
    $run = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($run);
    if($row){
      if($row['u_type']==1){
        $_SESSION['loggedin'] = $row['u_id'];
        $_SESSION['u_type'] = $row['u_type'];
        header("location:admin/index.php");
      }
      if($row['u_type']==2){
        $_SESSION['loggedin'] = $row['u_id'];
        $_SESSION['u_type'] = $row['type'];
        header("location:index.php");
      }
    }

}
?>