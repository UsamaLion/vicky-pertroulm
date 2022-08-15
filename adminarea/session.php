<?php
session_start();
include('include/db.php');
if(!isset($_SESSION['username']))
{
    header("location:../admin_login.php?session=expired");
}
else if(isset($_SESSION['username']))
{
    

$username = $_SESSION['username'];
$Choice = $_SESSION['ch'];

        
        $result = mysqli_query($con, "select * from admin where username='$username' ") or die(mysqli_error($con));

        $row = mysqli_fetch_array($result);

            $id = $row['id'];
            $username=$row['email'];
            $email=$row['email'];
            $password=$row['password'];
            $profile_pic = $row['profile_pic'];

            $songsquery = mysqli_query($con, "select * from songs") or die(mysqli_error($con));
            
            $totalsongs = mysqli_num_rows($songsquery);
                
            $likes = 0;
            $superlikes = 0;
            $dislikes = 0;
            $totalswipes = 0;
            $ratingquery = mysqli_query($con, "select * from ratings") or die(mysqli_error($con));
            $totalswipes = mysqli_num_rows($ratingquery);    
                while($row2 = mysqli_fetch_array($ratingquery))
                {
                    if($row2['liketype']==1)
                    {
                        $superlikes++;
                    }
                    else if($row2['liketype']==2)
                    {
                        $likes++;
                    }
                    else if($row2['liketype']==3)
                    {
                        $dislikes++;
                    }
    
                }

                $nonpaid = 0;
                $paid = 0;
                $totalusers = 0;
                $usersquery = mysqli_query($con, "select * from users") or die(mysqli_error($con));
                while($userdata = mysqli_fetch_array($usersquery))
                {
                    $totalusers++;
                    if($userdata['type']==0)
                    {
                        $nonpaid++;
                    }
                    else if($userdata['type']==1)
                    {
                        $paid++;
                    }
                }

        

        

}

?>