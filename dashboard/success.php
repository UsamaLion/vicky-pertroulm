<?php
// This example sets up an endpoint using the Slim framework.
// Watch this video to get started: https://youtu.be/sGcNPFX1Ph4.

require 'stripe-php/init.php';
include('include/db.php');
session_start();
\Stripe\Stripe::setApiKey('sk_test_51IegieFXDieSdWwIeHqqcr7oZ4iC1k8fleoMdXKNAqqJ9incD4uzdo0gx0sew08a8IDqzwkXK01k1WmmdDbbcDD200xTyMrBtE');
$stripe = new \Stripe\StripeClient("sk_test_51IegieFXDieSdWwIeHqqcr7oZ4iC1k8fleoMdXKNAqqJ9incD4uzdo0gx0sew08a8IDqzwkXK01k1WmmdDbbcDD200xTyMrBtE");
$sessionid= $_GET['session_id'];
$session = \Stripe\Checkout\Session::retrieve($sessionid);
$customer = \Stripe\Customer::retrieve($session->customer);
$linesitems = \Stripe\Checkout\Session::allLineItems($sessionid);

//echo $linesitems['data'][0];
//echo $session;
if($session["payment_status"]=="paid")
{
  $id = $session["id"];
  $amount = $session["amount_total"];
  $email = $session["customer_details"]["email"];
  $status = $session["payment_status"];
  $customer = $session["customer"];
  $package = $linesitems['data'][0]['description'];
  $username = $session["client_reference_id"];
  $result = mysqli_query($con, "INSERT INTO `sales`(`u_id`, `cus_id`, `username`, `pkg_name`, `email`, `total`, `status`) VALUES ('$id','$customer','$username','$package','$email','$amount','$status')");
  $_SESSION['username'] = $username;
  //echo "inserted " . $result;
  echo "<script>window.location = 'dashboard.php?u=1&cus=$_SESSION[username]';</script>";
}
?>

