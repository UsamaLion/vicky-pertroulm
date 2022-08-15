<?php
include ('class/phpmailer/PHPMailerAutoload.php');
include('include/db.php');
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$fb_url = $_POST['fb_url'];
$yt_url = $_POST['yt_url'];
$insta_url = $_POST['insta_url'];
$spotify_url = $_POST['spotify_url'];
$type = "User";
if(isset($_POST['submit']))
{

    $checkdata  = mysqli_query($con, "select * from users where email = '$email' ") ;
    $count = mysqli_num_rows($checkdata);

    if($count == 0)
    {
        if($type == 'User')
        {
            $result = mysqli_query($con, "insert into users (firstname, surname, email, password, type, status , yt_url, fb_url, insta_url, spotify_url) VALUES ('$name', '$surname', '$email', '$password', '$type','ACTIVE', '$yt_url','$fb_url','$insta_url','$spotify_url') ");
            echo "<Script>window.location='index.php?u=1';</script>";
     
        }
       
      
    }
    else if ($count > 0)
    {
        echo "<Script> alert('This Username already exists!');window.location='register.php';</script>";
    }
}

?>