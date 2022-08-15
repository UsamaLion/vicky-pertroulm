<?php
include('include/db.php');
$id = $_GET['id'];
$type = $_GET['type'];
$query = mysqli_query($con, "update users set type='$type' where id='$id'") or die(mysqli_error($con));

echo "<script>window.location='subscriptions.php?u=2'</script>";


?>