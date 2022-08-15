<?php
include('include/db.php');
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);
if(isset($_POST['login']))
{
  
        $result = mysqli_query($con, "select * from users where email='$username' and password = '$password' ");

        $row = mysqli_fetch_array($result);
    
        $count = mysqli_num_rows($result);
    
        if ($count > 0  && $row['status'] == 'ACTIVE')
        {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['id'] = $row['email'];
            $_SESSION['user'] = $row['email'];
            $_SESSION['ch'] = "u";
            $id=$_SESSION['id'];
            mysqli_query($con, "Insert into logs (title, description, type, user) VALUES ('User Logged In','A User logged in to the system! User ID: $id','LOGIN_SUCCESS','$username')");
            header("location:dashboard/dashboard.php?u=0&id=$id&ch=u");
        }
     
       
      
      
        else if($count == 0)
        {
            echo mysqli_error($con);
            mysqli_query($con, "Insert into logs (title, description, type, user) VALUES ('Failed Attempt','A Failed Login Attempt Made By User ID: $username','LOGIN_FAILED','$username')");
            echo "<script>alert('Invalid Credentials for User!');</script>";
            
        }

}

?>