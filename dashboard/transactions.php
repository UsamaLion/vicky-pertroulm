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
              <h6 class="h2 text-white d-inline-block mb-0">Home</h6>
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
                <span id="cancelmsg"></span>
                <div class="card-header border-0 modal-header mb-4">
                    <h3 class="mb-0">My Subscription Status : <?php if($type ==1){ echo "<i class='fa fa-check text-success'></i> Paid";} else { echo "<i class='fa fa-exclamation-triangle text-warning'></i> Free";} ?></h3>
                </div>
            </div>
        </div>
        </div>
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
                    <th scope="col" class="sort" data-sort="amount">amount</th>
                    <th scope="col" class="sort" data-sort="status">status</th>
                    <th scope="col" class="sort" data-sort="update_time">Last Updated</th>
                    <th scope="col" class="sort" data-sort="Action">Action</th>

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
                        <?php echo $row['amount']; ?> Eur 
                    </td>
                    <td>
                      <?php if($row['status'] == 'ACTIVE')
                      { ?>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status"><?php echo $row['status']; ?></span>
                      </span>
                      <?php } else if($row['status'] != 'ACTIVE')
                      { ?>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i>
                        <span class="status"><?php echo $row['status']; ?></span>
                      </span>
                      <?php } ?>
                     
                    </td>
                    <td>
                        <?php echo $row['update_time']; ?> 
                    </td>
                    <td>
                      <?php if($type==1 && $row['status']=='ACTIVE' ){echo '<a href="#" id="cancelbtnpaypal" data-txn_id="'.$row['txn_id'].'" class="btn btn-outline-danger" >Cancel Subscription</a>';} ?>
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
                    <th scope="col" class="sort" data-sort="package bought">Package Type</th>
                    <th scope="col" class="sort" data-sort="status">status</th>
                    <th scope="col" class="sort" data-sort="update_time">Last Paid</th>
                    <th scope="col" class="sort" data-sort="Action">Action</th>

                  </tr>
                </thead>
                <tbody class="list">
                <?php include('include/db.php');
                        $result = mysqli_query($con, "select * from stripe_subscriptions where username='$username' order by created DESC") or die (mysqli_error($con));
                        while($row = mysqli_fetch_array($result))
                        {
                ?>        
                <tr>
                    <td>
                        <?php echo $row['stripe_subscription_id']; ?>
                    </td>
                    <td>
                        <?php echo $row['payer_email']; ?>
                    </td>
                    <td>
                        <?php echo floatval($row['plan_amount'] ); ?> Eur 
                    </td>
                    <td>
                        <?php echo $row['plan_interval']; ?>  
                    </td>
                    <td>
                      <?php if($row['status'] == 'active')
                      { ?>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">ACTIVE</span>
                      </span>
                      <?php } else if($row['status'] != 'active')
                      { ?>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i>
                        <span class="status">Cancelled </span>
                      </span>
                      <?php } ?>
                     
                    </td>
                    <td>
                        <?php echo $row['created']; ?> 
                    </td>
                    <td>
                      <?php if($type==1 && $row['status']=='active'){echo '<a href="#" id="cancelbtnstripe" data-sub_id="'.$row['stripe_subscription_id'].'" class="btn btn-outline-danger" >Cancel Subscription</a>';} ?>
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
  <script src="../assets/js/argon.js?v=1.1.0"></script>
 <script>
   var access_token = "";
          var settings = {
            "url": "https://api-m.sandbox.paypal.com/v1/oauth2/token",
            "method": "POST",
            "timeout": 0,
            "headers": {
              "Authorization": "Basic QWRZZGtGTXZwRlgzUlBXc05Eem80Rmo1amVURWE3TUhPbmpMbmotX0wtTE1SZU04UXdvbktIMFdLMC1CaTM4Smcxc1pDZ0doYjJpREFrRG86RUtBSk9tT3k0NGhWMTExOGhQS1FqVWhuNjNJYlNuazFDeldCWUhGMllwUVE3OWpwVDJOMmdQQ2xpdWhIdHZRcUVJQlh0aTN0bUVVZDl2QzY=",
              "Content-Type": "application/x-www-form-urlencoded"
            },
            "data": {
              "grant_type": "client_credentials"
            }
          };

          $.ajax(settings).done(function (response) {
            //alert(response.access_token);
            access_token = response.access_token;
            //alert(access_token);
          });
     $('#cancelbtnpaypal').on('click', function(){
       var id = $(this).data('txn_id');
       var settings = {
            "url": "https://api-m.sandbox.paypal.com/v1/billing/subscriptions/"+id+"/cancel",
            "method": "POST",
            "timeout": 0,
            "headers": {
              "Content-Type": "application/json",
              "Authorization": "Bearer "+access_token+""
            },
            "data": JSON.stringify({
              "reason": "manual Cancellation"
            }),
      };

      $.ajax(settings).done(function (response) {
        console.log(response);
      });
        var postData={
          'sub_id':id
        }
         $.ajax({

                url: "cancel_subscription.php",
                type: "POST",
                data: postData,
                success: function(responsedata){
                    setTimeout(function() {
                        $('#cancelmsg').html(' <div class="alert alert-danger alert-dismissible fade show" role="alert"><span class="alert-icon"><i class="ni ni-like-2"></i></span><span class="alert-text"><strong>Alert!</strong> Your Plan subcscription has been cancelled...</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>');
                    },1000);
                    
                    setTimeout(function() {
                        window.location = 'transactions.php?u=0';
                    },2000);
                }	        
                });
     });

     $('#cancelbtnstripe').on('click',function(){
      var id = $(this).data('sub_id');

      var postData={
          'sub_id':id
        }
         $.ajax({

                url: "stripe2/cancel.php",
                type: "POST",
                data: postData,
                success: function(responsedata){
                    setTimeout(function() {
                        $('#cancelmsg').html(' <div class="alert alert-danger alert-dismissible fade show" role="alert"><span class="alert-icon"><i class="ni ni-like-2"></i></span><span class="alert-text"><strong>Alert!</strong> Your Plan Stripe subcscription has been cancelled...</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>');
                    },1000);
                    
                    setTimeout(function() {
                        window.location = 'transactions.php?u=0';
                    },2000);
                }	        
                });
     })
 </script>
 
</body>

</html>