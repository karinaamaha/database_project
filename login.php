<?php 
session_start();
if(isset($_SESSION["login"])){
  header("location:index.php");
  exit;
}
include 'connection.php';



?>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    </head>
    <body class="text-center">
  
        <section class="vh-100">
            <div class="container-fluid h-custom">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                  <img src="asset/kosmerah.png"
                    class="img-fluid">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                  <form action="controller/cek_login.php" method="POST" class="login-email">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                      <p class="lead fw-bold mb-0 me-3" style="font-weight: bold;">Login</p>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                      <p class="lead fw-normal mb-0 me-3" style="font-weight: bold; font-style: 10px; padding-bottom: 10px;">Silahkan Isi Form Dibawah</p>
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="email" required name="email" class="form-control" placeholder="Enter a valid email address" >
                      <label class="form-label" for="form3Example3">Alamat Email</label>
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-3">
                      <input type="password" id="password" required name="password" class="form-control" placeholder="Enter password" >
                      <label class="form-label" for="form3Example4">Password</label>
                    </div>
                    <div>
                      <div class="text-center text-lg-start mt-3 pt-2">
                        <button type="submit" name="submit" class="btn btn-success btn-lg" style="padding-left: 3.5rem; padding-right: 3.5rem;">Login</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>