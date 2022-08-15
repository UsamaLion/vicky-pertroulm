<?php
include('include/db.php');
include('session.php');
$username = $_POST['username'];
$surname = $_POST['surname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$country= $_POST['country'];
$aboutme= $_POST['aboutme'];
$postalcode= $_POST['postalcode'];
$facebook= $_POST['facebook'];
$youtube= $_POST['youtube'];
$instagram= $_POST['instagram'];
$spotify= $_POST['spotify'];
if(isset($_POST['update']))
{
    $result = mysqli_query($con,"UPDATE users set firstname='$firstname', surname='$surname', `address`='$address',`city`='$city', `country`='$country', `postalcode`='$postalcode', `fb_url`='$facebook', `yt_url`='$youtube', `insta_url`='$instagram', `spotify_url`='$spotify', `aboutme`='$aboutme' where email ='$username'");
    mysqli_query($con, "Insert into activities (title, description, type, user) VALUES ('Profile EDITED','Profile Data Edited! Username: $username','PROFILE_EDITED','$username')");

    //echo "<Script>window.location='edit_customers.php?u=1&id=$id';</script>";

}
?>