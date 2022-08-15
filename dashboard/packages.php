<?php include('session.php');?> 
<!DOCTYPE html>
<html>
<?php include('header.php');?> 
<script src="https://js.stripe.com/v3/"></script>

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
              <h6 class="h2 text-white d-inline-block mb-0">Packages</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="dashboard.php"><i class="fas fa-home"></i></a></li>
                 
                  <li class="breadcrumb-item active" aria-current="page"><a href="packages.php">Packages</a></li>
                </ol>
              </nav>
              
            </div>
           
          </div>
        </div>
          <span id="successmsg"> </span>
          <?php
            if(isset($_GET['u']) && $_GET['u']==1)
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><span class="alert-icon"><i class="ni ni-like-2"></i></span><span class="alert-text"><strong>Success!</strong> Your Plan purchase is successful! To check the transaction, go to Transactions page...</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>';
            }
            else if(isset($_GET['u']) && $_GET['u']==2)
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><span class="alert-icon"><i class="ni ni-like-2"></i></span><span class="alert-text"><strong>Success!</strong> Your Plan purchase is successful! To check the transaction, go to Transactions page...</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>';
            }
          ?>
      </div>
    </div>
    <!-- Page content -->
    <?php if($type==0){ ?>
    <div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="pricing card-group flex-column flex-md-row mb-3">
            <div class="card card-pricing border-0 rounded text-center mb-4">
              <div class="card-header bg-transparent">
                <h4 class="text-uppercase ls-1 text-primary py-3 mb-0">Basic</h4>
              </div>
              <div class="card-body px-lg-7">
                <div class="display-2">Free</div>
                <span class="text-muted"></span>
                <ul class="list-unstyled my-4">
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                          <i class="fas fa-plus"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2">Join Brots Community Now</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                          <i class="fa fa-chart-line"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2">Reach New Listeners and Increase Your fan Base</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                          <i class="fas fa-heart"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2">Found out which is your Favorite Song</span>
                      </div>
                    </div>
                  </li>
                </ul>
                <button type="button" class="btn btn-primary disabled mb-3">Seat Not Available</button>
              </div>
              <div class="card-footer">
                <a href="#!" class="text-light">Request a demo</a>
              </div>
            </div>
            <div class="card card-pricing bg-gradient-success ml-2 shadow-lg rounded border-0 text-center mb-4">
              <div class="card-header bg-transparent">
                <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Premium</h4>
              </div>
              <div class="card-body px-lg-7">
                <div class="display-1 text-white">$4,99</div>
                <span class="text-white">per Month</span>
                <ul class="list-unstyled my-4">
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape  bg-gradient-warning text-white shadow rounded-circle text-muted">
                          <i class="fas fa-check-double"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2 text-white">All the Features of Basic Plan</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-warning text-white shadow rounded-circle text-muted">
                          <i class="fab fa-spotify"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2 text-white">Connect Your Spotify Profile to Generate Traffic</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-gradient-warning text-white shadow rounded-circle text-muted">
                          <i class="fa fa-chart-bar"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2 text-white">Get Advanced Statistics on your Song Performance</span>
                      </div>
                    </div>
                  </li>
                </ul>
                <span id="premium"></span>
                <span class="text-center w-100"><a class="btn btn-info w-100 btn-sm text-white stripebtn" id="stripecheckoutbtn">  Pay With <i class="fab fa-2x fa-stripe "></i></a></span>
              </div>
           
            </div>
            <div class="card card-pricing bg-gradient-danger ml-2 shadow-lg rounded border-0 text-center mb-4">
              <div class="card-header bg-transparent">
                <h4 class="text-uppercase ls-1 text-white py-3 mb-0">SuperStar</h4>
              </div>
              <div class="card-body px-lg-7">
                <div class="display-1 text-white">$49,99</div>
                <span class="text-white">per Year</span>
                <ul class="list-unstyled my-4">
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                          <i class="fas fa-calendar-alt"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2 text-white">Promote your Music for 1 Year</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                          <i class="fas fa-check-double"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2 text-white">All Features of premium Plan</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                          <i class="fab fa-instagram"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2 text-white">We Will publish 20 Stories and 5 Posts on our IG profile</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                          <i class="fa fa-signal"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2 text-white">Live Performance on Our Social Channel</span>
                      </div>
                    </div>
                  </li>
                </ul>
                <span id="superstar"></span>
                <span class="text-center w-100"><a class="btn btn-info w-100 btn-sm text-white stripebtn" id="checkout-button2">  Pay With <i class="fab fa-2x fa-stripe "></i></a></span>

              </div>
           
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <?php include('footer.php');?> 

    </div>
    <?php } else { echo '<div class="alert alert-dark alert-dismissible fade show" role="alert"><span class="alert-icon"><i class="fa fa-exclamation"></i></span><span class="alert-text"><strong>Alert!</strong> You have already subscribe to our membership...</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>';} ?>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="../assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>

  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.1.0"></script>
  <script src="https://www.paypal.com/sdk/js?client-id=AdYdkFMvpFX3RPWsNDzo4Fj5jeTEa7MHOnjLnj-_L-LMReM8QwonKH0WK0-Bi38Jg1sZCgGhb2iDAkDo&disable-funding=credit,card&currency=EUR&vault=true&intent=subscription"> // Replace YOUR_CLIENT_ID with your sandbox client ID
  </script>
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
            //console.log(access_token);
          });

  $('.stripebtn').on('click', function(){
    let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
			width=600,height=900,left=500,top=200`;
    window.location.replace('stripe2/index.php',"Stripe Checkout");
  });        
  var username = "<?php echo $username; ?>";     
  var email = "<?php echo $email; ?>";
  var firstname = "<?php echo $firstname; ?>";  
  var surname = "<?php echo $surname; ?>";  
  var city = "<?php echo $city; ?>";        
  var country = "<?php echo $country; ?>";  
  var postalcode = "<?php echo $postalcode; ?>";  
  var address = "<?php echo $address; ?>";  

  var premium = {
  "url": "https://api-m.sandbox.paypal.com/v1/billing/subscriptions",
  "method": "POST",
  "timeout": 0,
  "headers": {
    "PayPal-Request-Id": "test_premiumplan_111",
    "Authorization": access_token,
    "Content-Type": "application/json"
  },
  "data": JSON.stringify({
    "plan_id": "P-5ML4271244454362WXNWU5NQ",
    "start_time": "2021-04-13T00:00:00Z",
    "quantity": "1",
    "shipping_amount": {
      "currency_code": "EUR",
      "value": "0.00"
    },
    "subscriber": {
      "name": {
        "given_name": firstname,
        "surname": surname
      },
      "email_address": email,
      "shipping_address": {
        "name": {
          "full_name": firstname + surname
        },
        "address": {
          "address_line_1": address,
          "address_line_2": address,
          "admin_area_2": city,
          "admin_area_1": city,
          "postal_code": postalcode,
          "country_code": country
        }
      }
    },
    "application_context": {
      "brand_name": "Brots",
      "locale": "en-US",
      "shipping_preference": "SET_PROVIDED_ADDRESS",
      "user_action": "SUBSCRIBE_NOW",
      "payment_method": {
        "payer_selected": "PAYPAL",
        "payee_preferred": "IMMEDIATE_PAYMENT_REQUIRED"
      },
      "return_url": "http://localhost:80/artist2/dashboard.php?u=successpaypal",
      "cancel_url": "http://localhost:80/artist2/dashboard.php?u=cancelled"
    }
  }),
};

//$.ajax(premium).done(function (response) {
///  alert(response.status);
//});






      paypal.Buttons({
            style: {
              shape: 'rect',
              color: 'blue',
              layout: 'vertical',
              label: 'subscribe'
          },

          createSubscription: function(data, actions) {
        return actions.subscription.create({
          /* Creates the subscription */
          plan_id: 'P-5N106501E11064031MB2IBBY'
        });
      },

        onApprove: function(data, actions) {
         
              console.log(data);
              //console.log('Payer : ' + details.payer);
              //console.log('Purchase_units are : ' + details.purchase_units);
              //console.log('Status : ' + details.status);
              //console.log('ID: ' + details.id);
              var billinToken = data.billinToken;
              var facilitatorAccessToken = data.facilitatorAccessToken;
              var orderID = data.orderID;
              var subscriptionID = data.subscriptionID;
              var paymentID = data.paymentID;
              var amount = "4.99";
              savesubscription(billinToken, facilitatorAccessToken, orderID , subscriptionID, paymentID, amount);
              console.log('Subscription completed, 4,99!');
        
        }
      }).render('#premium'); // Display payment options on your web page


      paypal.Buttons({
        style: {
              shape: 'rect',
              color: 'blue',
              layout: 'vertical',
              label: 'subscribe'
          },
          createSubscription: function(data, actions) {
            return actions.subscription.create({
            /* Creates the subscription */
            plan_id: 'P-6VY508359F846583AMB2XHPY'
            });
          },

        onApprove: function(data, actions) {
              console.log(data);
              //console.log('Payer : ' + details.payer);
              //console.log('Purchase_units are : ' + details.purchase_units);
              //console.log('Status : ' + details.status);
              //console.log('ID: ' + details.id);
              var billinToken = data.billinToken;
              var facilitatorAccessToken = data.facilitatorAccessToken;
              var orderID = data.orderID;
              var subscriptionID = data.subscriptionID;
              var paymentID = data.paymentID;
              var amount = "49.99";
              savesubscription(billinToken, facilitatorAccessToken, orderID , subscriptionID, paymentID, amount);
              console.log('Superstar Subscription completed, 49,99!');
        }
      }).render('#superstar'); // Display payment options on your web page



      function savesubscription(billinToken, facilitatorAccessToken, orderID , subscriptionID, paymentID, amount)
      {

               var postData = {
               "billinToken" : billinToken,
               "facilitatorAccessToken" : facilitatorAccessToken,
               "orderID" : orderID,
               "subscriptionID" : subscriptionID,
               "paymentID" : paymentID,
               "amount" : amount	        
                };
                $.ajax({
          
                url: "add_new_subscription_class.php",
                type: "POST",
                data: postData,
                success: function(responsedata){
                    
                    console.log('Subscription submitted!');
                    //alert('transaction submitted!');
                    $('#successmsg').html(' <div class="alert alert-success alert-dismissible fade show" role="alert"><span class="alert-icon"><i class="ni ni-like-2"></i></span><span class="alert-text"><strong>Success!</strong> Your Plan purchase is successful! To check the transaction, go to Transactions page...</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>')

                }	        
                });
      }
    </script>

    <script>
    //stripe API call
    var stripe = Stripe("pk_test_51IegieFXDieSdWwIA71Yf5hh85VZg39vi0HlLnifDBtK8KlqyzvKv4o8sQV6emr8ergbTNbsS6x6emjtWjZZwS00009WgEYLAE");
    var checkoutButton = document.getElementById("checkout-button1");
      checkoutButton.addEventListener("click", function () {
      const formData = new FormData();
      const packagedetail = "Premium";
      const totalprice = "4.99";
      const username = "<?php echo $username; ?>";
       
      let data = {
        'package': packagedetail,
        'amount': totalprice, 
        'username': username,
      }
      formData.append('package', packagedetail);
      formData.append('amount', totalprice);
      formData.append('username', username);
        console.log(data);

                $.ajax({
          
                url: "checkout_session.php",
                type: "POST",
                dataType: 'json',
                data: data,
                success: function(responsedata){
                    console.log(responsedata);
                    return stripe.redirectToCheckout({ sessionId: responsedata.id });

                }	        
                });


    });
    </script>
</body>

</html>