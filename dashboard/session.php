<?php
session_start();
include('include/db.php');
if(!isset($_SESSION['id']))
{
    header("location:../index.php?session=expired");
}
else if(isset($_SESSION['id']))
{
    

$username = $_SESSION['id'];
$id = $_SESSION['user_id'];
$Choice = $_SESSION['ch'];
$auth = 3;
        
        $result = mysqli_query($con, "select * from users where email='$username' ");

        $row = mysqli_fetch_array($result);
    
        $count = mysqli_num_rows($result);

        $status=$row['status'];
           
    
        if($count > 0 && $status == 'ACTIVE')
        {
            $id = $row['id'];
            $username=$row['email'];
            $email=$row['email'];
            $password=$row['password'];
            $firstname = $row['firstname'];
            $surname = $row['surname'];
            $fb_url = $row['fb_url'];
            $insta_url = $row['insta_url'];
            $spotify_url = $row['spotify_url'];
            $yt_url = $row['yt_url'];
            $aboutme = $row['aboutme'];
            $city = $row['city'];
            $country = $row['country'];
            $postalcode = $row['postalcode'];
            $address = $row['address'];
            $type = $row['type'];

        }
        else
        {
            header("location:../index.php?status=NonActive");
        }



        if($Choice == 'u')
        {

       
        $songsquery = mysqli_query($con, "select * from songs where artist_id ='$id'");
        
        $totalsongs = mysqli_num_rows($songsquery);
            
        $likes = 0;
        $superlikes = 0;
        $dislikes = 0;
        $totalswipes = 0;
        $ratingquery = mysqli_query($con, "select * from ratings where artist_id ='$id'");
        $totalswipes = mysqli_num_rows($ratingquery);    
            while($row = mysqli_fetch_array($ratingquery))
            {
                if($row['liketype']==1)
                {
                    $superlikes++;
                }
                else if($row['liketype']==2)
                {
                    $likes++;
                }
                else if($row['liketype']==3)
                {
                    $dislikes++;
                }

            }
        
        }
    

}

?>