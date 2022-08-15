<?php
include('include/db.php');
include('session.php');
$payer_id = $_POST['payer_id'];
$amount = $_POST['amount'];
$payer_first_name = $_POST['payer_first_name'];
$payer_last_name = $_POST['payer_last_name'];
$payer_email = $_POST['payer_email'];
$create_time = $_POST['create_time'];
$intent = $_POST['intent'];
$address= $_POST['address'];
$city= $_POST['city'];
$country= $_POST['country'];
$postal_code= $_POST['postal_code'];
$update_time= $_POST['update_time'];
$status = $_POST['status'];
if(isset($_POST['payer_id']))
{
    $result = mysqli_query($con,"INSERT INTO `payments`(`username`, `payer_email`, `amount`, `create_time`, `intent`, `txn_id`, `payer_first_name`, `payer_last_name`, `address`, `city`, `country`, `postal_code`, `update_time`, `currency_code`, `status`) VALUES ('$username', '$payer_email', '$amount', '$create_time', '$intent', '$payer_id', '$payer_first_name', '$payer_last_name', '$address', '$city', '$country', '$postal_code', '$update_time', 'EUR', '$status')");
    mysqli_query($con, "Insert into activities (title, description, type, user) VALUES ('New Package Purchased!','A New Package has been purchased by Account: $payer_email Successfully!','PLAN_PURCHASED','$username')");
    mysqli_query($con, "update users set city='$city', country='$country', postalcode='$postal_code', address='$address' where username='$username'") or die(mysqli_error($con));
    //echo "<Script>window.location='edit_customers.php?u=1&id=$id';</script>";
    echo $result;
}


?>