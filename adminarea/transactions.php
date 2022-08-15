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
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Transactions</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="dashboard.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="performance.php">Transactions</a></li>
                </ol>
              </nav>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
    <div class="row justify-content-center">
    <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Transactions History - Payment Method: <i class="fab fa-paypal fa-2x text-primary"></i></h3>
            </div>
            <!-- table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="datatable-buttons1">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="txn_id">Txn ID</th>
                    <th scope="col" class="sort" data-sort="payer_email">Payer Acc</th>
                    <th scope="col" class="sort" data-sort="username">username</th>
                    <th scope="col" class="sort" data-sort="amount">amount</th>
                    <th scope="col" class="sort" data-sort="status">status</th>
                    <th scope="col" class="sort" data-sort="update_time">Last Updated</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php include('include/db.php');
                        $result = mysqli_query($con, "select * from payments order by update_time DESC") or die (mysqli_error($con));
                        while($row = mysqli_fetch_array($result))
                        {
                ?>        
                <tr>
                    <td>
                        <?php echo $row['txn_id']; ?>
                    </td>
                    <td>
                        <?php echo $row['payer_email']; ?>
                    </td>
                    <td>
                        <?php echo $row['username']; ?>
                    </td>
                    <td>
                        <?php echo $row['amount']; ?> Eur 
                    </td>
                    <td>
                    <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status"><?php echo $row['status']; ?></span>
                      </span>
                    </td>
                    <td>
                        <?php echo $row['update_time']; ?> 
                    </td>
                    
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>

          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Transactions History - Payment Method:  <i class="fab fa-stripe fa-2x text-primary"></i></h3>
            </div>
            <!-- table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="datatable-buttons1">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="txn_id">Txn ID</th>
                    <th scope="col" class="sort" data-sort="payer_email">Stripe Email</th>
                    <th scope="col" class="sort" data-sort="amount">amount</th>
                    <th scope="col" class="sort" data-sort="package bought">Package Bought</th>
                    <th scope="col" class="sort" data-sort="status">status</th>
                    <th scope="col" class="sort" data-sort="update_time">Last Updated</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php include('include/db.php');
                        $result = mysqli_query($con, "select * from sales order by m_date DESC") or die (mysqli_error($con));
                        while($row = mysqli_fetch_array($result))
                        {
                ?>        
                <tr>
                    <td>
                        <?php echo $row['u_id']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                    <td>
                        <?php echo floatval($row['total'] / 100); ?> Eur 
                    </td>
                    <td>
                        <?php echo $row['pkg_name']; ?>  
                    </td>
                    <td>
                    <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status"><?php echo $row['status']; ?></span>
                      </span>
                    </td>
                    <td>
                        <?php echo $row['m_date']; ?> 
                    </td>
                    
                </tr>
                <?php } ?>
                </tbody>
              </table>
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
  <script src="../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="../assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
  <!-- Argon JS -->
  <script src="js/argon.js?v=1.1.0"></script>
 
 
</body>

</html>