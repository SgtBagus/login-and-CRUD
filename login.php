<?php
  include('system/config.php');
  include('system/session_start.php');
  include('system/login.php');

  if (isset($_SESSION['name'])) {
      header("Location: ./");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title> Bagus Andika - 20201075 </title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
  </head>

  <body class="bg-gray-200">
    <div class="container position-sticky z-index-sticky top-0">
      <div class="row">
      </div>
    </div>
    <main class="main-content  mt-0">
      <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
              <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                  </div>
                </div>
                <div class="card-body">
                  <form action="" method="POST" class="login-email">
                    <div class="input-group input-group-outline my-3">
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Email"
                        name="email"
                        value="<?php if(isset($_POST['email'])) { echo $email; } ?>"
                        required
                      >
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input
                        type="password"
                        class="form-control"
                        placeholder="Password"
                        name="pass"
                        value="<?php if(isset($_POST['pass'])) { echo $pass; } ?>"
                        required
                      >
                    </div>
                    <div class="text-center">
                      <button type="submit" name="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Login</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
          <div class="container">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-12 col-md-6 my-auto">
                <div class="copyright text-center text-sm text-white text-lg-start">
                  © <script>
                    document.write(new Date().getFullYear())
                  </script>,
                  Tamplate made with <i class="fa fa-heart" aria-hidden="true"></i> by
                  <a href="https://www.creative-tim.com" class="font-weight-bold text-white" target="_blank">Creative Tim</a>
                  for a better web.
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </main>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  </body>
</html>