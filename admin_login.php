<?php 
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>

<?php include('header.php') ?>

<body class="bg-default">

  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-6">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
           
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            <img src="assets/img/brand/brots.png" class="mb-4" width="50%"></img>
              <h1 class="text-white">Admin Area</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
          
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Login</small>
              </div>
              <form role="form" Method="post" action="admin_login_class.php">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user-tie"></i></span>
                    </div>
                    <input class="form-control" placeholder="username" type="text" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password">
                  </div>
                </div>
             
                <div class="text-center">
                  <input type="submit" name="login" class="btn btn-primary my-4" value="Login"></input>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
      
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->

</body>

</html>