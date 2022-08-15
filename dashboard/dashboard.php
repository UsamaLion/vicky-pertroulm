<?php include('session.php');?> 
<!DOCTYPE html>
<html>
<?php include('header.php');?> 
<body>
  <!-- Sidenav -->
  <?php include('sidebar.php');?> 
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php include('topnav.php');?> 
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-gradient-warning pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Home</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                </ol>
              </nav>
            </div>
             <!--<div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>-->
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Vehicles</h5>
                      <span class="h2 font-weight-bold mb-0">7</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-bus-front-12"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Clients</h5>
                      <span class="h2 font-weight-bold mb-0">23</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-single-02"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Sales</h5>
                      <span class="h2 font-weight-bold mb-0">Rs 22500000</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-bold-up"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Purchase</h5>
                      <span class="h2 font-weight-bold mb-0">Rs 21000000</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-bold-down"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
      
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
      <div class="col-xl-12">
          <!--* Card header *-->
          <!--* Card body *-->
          <!--* Card init *-->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Surtitle -->
              <h3 class="surtitle font-weight-bold text-white text-center bg-gradient-gray rounded">TL 208</h3>
              <!-- Title -->
              <h5 class="h3 mb-0">Carrige Overview</h5>
            </div>
            <!-- Card body -->
            <div class="card-body d-sm-flex">
              <div class="col-md-8">
                <div class="chart">
                  <!-- Chart wrapper -->
                  <canvas id="chart-doughnut1" class="chart-canvas"></canvas>
                </div>
              </div> 
              <span class="col-md-4"> 
                <!-- social tabs for performance -->
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Drop Off 1</h5>
                        
                      </div>
                      <div class="col-auto">
                        <div class="rounded bg-gradient-info text-white">
                        <span class="h2 font-weight-bold p-1"><?php echo "24000 Ltr"; ?></span>
                        </div>
                        <span>Saeed Filing Station</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Drop Off 2</h5>
                        
                      </div>
                      <div class="col-auto">
                        <div class="rounded bg-gradient-primary text-white">
                        <span class="h2 font-weight-bold p-1"><?php echo "12000 Ltr"; ?></span>
                        </div>
                        <span>Usama Filing Station</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Drop Off 3</h5>
                        
                      </div>
                      <div class="col-auto">
                        <div class="rounded bg-gradient-success text-white">
                        <span class="h2 font-weight-bold p-1"><?php echo "12000 Ltr"; ?></span>
                        </div>
                        <span>Qazi Filing Station</span>
                      </div>
                    </div>
                  </div>
                </div>

              </span> 
            </div>
          </div>
        </div>
        <div class="col-xl-12">
          <!--* Card header *-->
          <!--* Card body *-->
          <!--* Card init *-->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Surtitle -->
              <h3 class="surtitle font-weight-bold text-white text-center bg-gradient-gray rounded">TL 308</h3>
              <!-- Title -->
              <h5 class="h3 mb-0">Carrige Overview</h5>
            </div>
            <!-- Card body -->
            <div class="card-body d-sm-flex">
              <div class="col-md-8">
                <div class="chart">
                  <!-- Chart wrapper -->
                  <canvas id="chart-doughnut2" class="chart-canvas"></canvas>
                </div>
              </div> 
              <span class="col-md-4"> 
                <!-- social tabs for performance -->
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Drop Off 1</h5>
                        
                      </div>
                      <div class="col-auto">
                        <div class="rounded bg-gradient-info text-white">
                        <span class="h2 font-weight-bold p-1"><?php echo "24000 Ltr"; ?></span>
                        </div>
                        <span>Saeed Filing Station</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Drop Off 2</h5>
                        
                      </div>
                      <div class="col-auto">
                        <div class="rounded bg-gradient-primary text-white">
                        <span class="h2 font-weight-bold p-1"><?php echo "12000 Ltr"; ?></span>
                        </div>
                        <span>Usama Filing Station</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Drop Off 3</h5>
                        
                      </div>
                      <div class="col-auto">
                        <div class="rounded bg-gradient-success text-white">
                        <span class="h2 font-weight-bold p-1"><?php echo "12000 Ltr"; ?></span>
                        </div>
                        <span>Qazi Filing Station</span>
                      </div>
                    </div>
                  </div>
                </div>

              </span> 
            </div>
          </div>
        </div>
        <div class="col-xl-12">
          <!--* Card header *-->
          <!--* Card body *-->
          <!--* Card init *-->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Surtitle -->
              <h3 class="surtitle font-weight-bold text-white text-center bg-gradient-gray rounded">TL 408</h3>
              <!-- Title -->
              <h5 class="h3 mb-0">Carrige Overview</h5>
            </div>
            <!-- Card body -->
            <div class="card-body d-sm-flex">
              <div class="col-md-8">
                <div class="chart">
                  <!-- Chart wrapper -->
                  <canvas id="chart-doughnut3" class="chart-canvas"></canvas>
                </div>
              </div> 
              <span class="col-md-4"> 
                <!-- social tabs for performance -->
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Drop Off 1</h5>
                        
                      </div>
                      <div class="col-auto">
                        <div class="rounded bg-gradient-info text-white">
                        <span class="h2 font-weight-bold p-1"><?php echo "24000 Ltr"; ?></span>
                        </div>
                        <span>Saeed Filing Station</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Drop Off 2</h5>
                        
                      </div>
                      <div class="col-auto">
                        <div class="rounded bg-gradient-primary text-white">
                        <span class="h2 font-weight-bold p-1"><?php echo "12000 Ltr"; ?></span>
                        </div>
                        <span>Usama Filing Station</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Drop Off 3</h5>
                        
                      </div>
                      <div class="col-auto">
                        <div class="rounded bg-gradient-success text-white">
                        <span class="h2 font-weight-bold p-1"><?php echo "12000 Ltr"; ?></span>
                        </div>
                        <span>Qazi Filing Station</span>
                      </div>
                    </div>
                  </div>
                </div>

              </span> 
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <?php include('footer.php');?> 

    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.1.0"></script>

</body>

</html>