<?php
session_start();
include('include/db.php');
$username = $_POST['username'];
$password = md5($_POST['password']);
if(isset($_POST['login']))
{
  
        $result = mysqli_query($con, "select * from admin where username='$username' and password = '$password' ");

        $row = mysqli_fetch_array($result);
    
        $count = mysqli_num_rows($result);
    
         if ($count > 0 && $row['type'] == 'admin')
        {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user'] = $row['email'];
            $_SESSION['username'] = $row['username'];

            $_SESSION['ch'] = "SA";
            header("location:adminarea/dashboard.php?id=$_SESSION[user_id]&ch=sa");
        }
       
      
      
        else if($count == 0)
        {
            echo mysqli_error($con);
            mysqli_query($con, "Insert into logs (title, description, type, user) VALUES ('Failed Attempt','A Failed Login Attempt Made By User ID: $username','LOGIN_FAILED','$username')");
            echo "<script>alert('Invalid Credentials for Admin!');</script>";
            
        }

}

?>