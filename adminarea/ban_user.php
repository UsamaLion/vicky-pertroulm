<?php
include('include/db.php');
$id = $_GET['id'];
$status = $_GET['status'];
$query = mysqli_query($con, "update users set status='$status' where id='$id'") or die(mysqli_error($con));

echo "<script>window.location='subscriptions.php?u=1'</script>";


?>