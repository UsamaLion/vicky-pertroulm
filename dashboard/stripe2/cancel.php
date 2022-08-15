<?php 
// Include configuration file  
require_once 'config.php'; 
include('../session.php');
$userID = $id ;
$payment_id = $statusMsg = $api_error = ''; 
$ordStatus = 'error'; 
 
// Check whether stripe token is not empty 
if(!empty($_POST['sub_id']) && !empty($_POST['sub_id'])){ 
     

    $sub_id = $_POST['sub_id']; 


    require_once 'stripe-php/init.php'; 
     
    // Set API key 
    \Stripe\Stripe::setApiKey(STRIPE_API_KEY); 
    $stripe = new \Stripe\StripeClient(
        STRIPE_API_KEY
      );
    try { 
        $cancel = $stripe->subscriptions->cancel(
            $sub_id,
            []
          );
    }catch(Exception $e) { 
        $api_error = $e->getMessage(); 
    } 

   
        if(empty($api_error) && $cancel){ 
                // Retrieve subscription data 
                $subsData = $cancel->jsonSerialize(); 
         
                // Check whether the subscription activation is successful 
                if($subsData['status'] == 'canceled'){ 
                    // Subscription info 
                
                     
                    // Include database connection file  
                    include_once 'db.php'; 
         
                    // Insert transaction data into the database 
                    $sql = "update stripe_subscriptions set status='$subsData[status]' where stripe_subscription_id = '$sub_id' "; 
                    $insert = $con->query($sql);  
  
                    // Update subscription id in the users table  
                    if($insert){   
                        $update = $con->query("UPDATE users SET type='0' WHERE id = {$userID}");  
                    } 
                     
                    $statusMsg = 'Your Subscription has been cancelled!'; 
                    //header("Location: ../packages.php?u=3&statusmsg=$statusMsg&cancellation=cancel");

                }else{ 
                    $statusMsg = "Subscription cancellation failed!"; 
                } 
            }else{ 
                $statusMsg = "Subscription API cancellation failed! ".$api_error; 
            } 
        }  
        echo $statusMsg;   
?>

<!--<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<div class="container">
    <div class="status">
        <h1 class="<?php echo $ordStatus; ?>"><?php echo $statusMsg; ?></h1>
        <?php if(!empty($subscrID)){ ?>
            <h4>Payment Information</h4>
            <p><b>Reference Number:</b> <?php echo $subscription_id; ?></p>
            <p><b>Transaction ID:</b> <?php echo $subscrID; ?></p>
            <p><b>Amount:</b> <?php echo $planAmount.' '.$planCurrency; ?></p>
			
            <h4>Subscription Information</h4>
            <p><b>Plan Name:</b> <?php echo $planName; ?></p>
            <p><b>Amount:</b> <?php echo $planPrice.' '.$currency; ?></p>
            <p><b>Plan Interval:</b> <?php echo $planInterval; ?></p>
            <p><b>Period Start:</b> <?php echo $current_period_start; ?></p>
            <p><b>Period End:</b> <?php echo $current_period_end; ?></p>
            <p><b>Status:</b> <?php echo $status; ?></p>
        <?php } ?>
    </div>
    <a href="index.php" class="btn-link">Back to Subscription Page</a>
</div>
</html> -->