<?php
include('include/db.php');
include('session.php');
$sub_id = $_POST['sub_id'];
 $statusupdateuser = mysqli_query($con, "update users set type='0' where email='$username'") or die(mysqli_error($con));
 $cancelpaypal = mysqli_query($con, "update payments set status='Cancelled' where txn_id='$sub_id'") or die(mysqli_error($con));
echo $statusupdateuser;
?>