<?php
include('include/db.php');
include('session.php');
$billinToken = $_POST['billinToken'];
$facilitatorAccessToken = $_POST['facilitatorAccessToken'];
$orderID = $_POST['orderID'];
$subscriptionID = $_POST['subscriptionID'];
$paymentID = $_POST['paymentID'];
$amount = $_POST['amount'];
$datenow = date('Y-m-d H:i:s');
if(isset($_POST['subscriptionID']))
{
    $result = mysqli_query($con,"INSERT INTO `payments`(`username`, `payer_email`, `amount`, `create_time`, `intent`, `txn_id`, `payer_first_name`, `payer_last_name`, `address`, `city`, `country`, `postal_code`, `update_time`, `currency_code`, `status`) VALUES ('$username', '$email', '$amount', '$datenow', 'Subscription', '$subscriptionID', '$firstname', '$surname', '$address', '$city', '$country', '$postalcode', '$datenow', 'EUR', 'ACTIVE')");
    mysqli_query($con, "Insert into activities (title, description, type, user) VALUES ('New Package Purchased!','A New Package has been purchased by Account: $email Successfully!','PLAN_PURCHASED','$username')");
    mysqli_query($con, "update users set type='1' where email='$username'") or die(mysqli_error($con));
    //echo "<Script>window.location='edit_customers.php?u=1&id=$id';</script>";
    echo $result;
}


?>