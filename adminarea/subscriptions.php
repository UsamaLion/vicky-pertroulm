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
              <h6 class="h2 text-white d-inline-block mb-0">Subscription</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="dashboard.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="performance.php">Subscription</a></li>
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
              <h3 class="mb-0">Subscription List</h3>
            </div>
            <!-- table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="datatable-buttons1">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="id">id</th>
                    <th scope="col" class="sort" data-sort="username">username</th>
                    <th scope="col" class="sort" data-sort="Membership">Membership</th>
                    <th scope="col" class="sort" data-sort="Status">Status</th>

                    <th scope="col" class="sort" data-sort="Action">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php include('include/db.php');
                        $result = mysqli_query($con, "select * from users") or die (mysqli_error($con));
                        while($row = mysqli_fetch_array($result))
                        {
                ?>        
                <tr>
                    <td>
                      <span class="mr-4">
                        <i class="bg-primary"></i>
                        <span class="id"><?php echo $row['id']; ?></span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-primary"></i>
                        <span class="status"><?php echo $row['email']; ?></span>
                      </span>
                    </td>
                    <td>
                     <?php if($row['type']==1)
                     { ?>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status"><?php echo "Paid"; ?></span>
                      </span>
                     <?php }
                     else
                     { ?>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i>
                        <span class="status"><?php echo "Free"; ?></span>
                      </span>
                     <?php }?>
                      
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class=""></i>
                        <span class="status"><?php echo $row['status']; ?></span>
                      </span>
                    </td>
                    <td>
                    <?php if($row['status']=='Blocked')
                    {?>
                      <a title="Activate User" href="ban_user.php?status=ACTIVE&id=<?php echo $row['id']; ?>"><i class="fa fa-check"></i></a>

                    <?php }
                    else if($row['status']=='ACTIVE')
                    { ?>
                      <a title="Ban User" href="ban_user.php?status=Blocked&id=<?php echo $row['id']; ?>"><i class="fa fa-ban"></i></a>

                    <?php }?>
                    <?php if($row['type']=='1')
                    {?>
                      <a title="Cancel Subscription" href="cancel_user.php?type=0&id=<?php echo $row['id']; ?>" class="ml-4"><i class="fa fa-times text-danger"></i></a>

                    <?php }
                    else if($row['type']=='0')
                    { ?>
                      <a title="Give Subscription" href="cancel_user.php?type=1&id=<?php echo $row['id']; ?>" class="ml-4"><i class="fa fa-plus text-success"></i></a>

                    <?php }?>
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