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
    <div class="header pb-6 d-flex align-items-center" style="min-height: 150px; background-image: url(../../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <!--<div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white"><span>Hello</span><span><?php echo $firstname; ?></span></h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="#!" class="btn btn-neutral">Edit profile</a>
          </div>-->
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
      
        <div class="col-xl-8 order-xl-1">
          <div class="row">
         
           
          </div>
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">View/Edit profile </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" id="updatebtn" class="btn btn-sm btn-primary">Update Profile</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="username">Username</label>
                        <input type="text" id="username" class="form-control" placeholder="Username" value="<?php echo $username?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="email">Email address</label>
                        <input type="email" id="email" class="form-control" placeholder="jesse@example.com" value="<?php echo $username?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="firstname">First name</label>
                        <input type="text" id="firstname" class="form-control" placeholder="First name" value="<?php echo $firstname?>" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="surname">Last name</label>
                        <input type="text" id="surname" class="form-control" placeholder="Last name" value="<?php echo $surname?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <h6 class="heading-small text-muted mb-4">Social Media Links</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="facebook">Facebook</label>
                        <input id="facebook" class="form-control" placeholder="Facebook Link / Url" value="<?php echo $fb_url?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="youtube">Youtube</label>
                        <input id="youtube" class="form-control" placeholder="Youtube Link / Url" value="<?php echo $yt_url?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="instagram">instagram</label>
                        <input id="instagram" class="form-control" placeholder="Instagram Link / Url" value="<?php echo $insta_url?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="spotify">Spotify</label>
                        <input id="spotify" class="form-control" placeholder="Spotify Link / Url" value="<?php echo $spotify_url?>" type="text">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="address">Address</label>
                        <input id="address" class="form-control" placeholder="Home Address" value="<?php echo $address?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="city">City</label>
                        <input type="text" id="city" class="form-control" placeholder="City" value="<?php echo $city?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="country">Country</label>
                        <input type="text" id="country" class="form-control" placeholder="Country" value="<?php echo $country?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="postalcode">Postal code</label>
                        <input type="number" id="postalcode" class="form-control" placeholder="0" value="<?php echo $postalcode?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">About Me</label>
                    <textarea rows="4" class="form-control" id="aboutme" placeholder="A few words about you ..."><?php echo $aboutme?></textarea>
                  </div>
                </div>
              </form>
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
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.1.0"></script>
  <Script>
    $('#updatebtn').on('click', function(){
      var username = $('#username').val();
      var email = $('#email').val();
      var firstname = $('#firstname').val();
      var surname = $('#surname').val();
      var address = $('#address').val();
      var city = $('#city').val();
      var country = $('#country').val();
      var postalcode = $('#postalcode').val();
      var aboutme = $('#aboutme').val();
      var facebook = $('#facebook').val();
      var youtube = $('#youtube').val();
      var instagram = $('#instagram').val();
      var spotify = $('#spotify').val();

      var postData = {
                'username': username,
                'email': email,
                'firstname':firstname,
                'surname':surname,
                'address':address,
                'city':city,
                'country':country,
                'postalcode':postalcode,
                'aboutme':aboutme,
                'facebook':facebook,
                'youtube':youtube,
                'instagram':instagram,
                'spotify':spotify,
                'update':'update'
		            	        
                };
                $.ajax({
          
                url: "update_profile_class.php",
                type: "POST",
                data: postData,
                success: function(responsedata){
                    
                    console.log('profile updated!');
                    //alert('profile updated!');

                }	        
                });
    });
  </script>
</body>

</html>