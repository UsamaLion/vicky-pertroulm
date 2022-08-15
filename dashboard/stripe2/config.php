<?php 
// Subscription plans 
// Minimum amount is $0.50 US 
// Interval day, week, month or year 
$plans = array( 
    '1' => array( 
        'name' => 'Premium Pack Monthly Subscription', 
        'price' => 4.99, 
        'interval' => 'month' 
    ), 
    '2' => array( 
        'name' => 'Super Star Yearly Subscription', 
        'price' => 49.99, 
        'interval' => 'year' 
    ) 
); 
$currency = "EUR";  
 
/* Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', 'sk_test_51IegieFXDieSdWwIeHqqcr7oZ4iC1k8fleoMdXKNAqqJ9incD4uzdo0gx0sew08a8IDqzwkXK01k1WmmdDbbcDD200xTyMrBtE'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51IegieFXDieSdWwIA71Yf5hh85VZg39vi0HlLnifDBtK8KlqyzvKv4o8sQV6emr8ergbTNbsS6x6emjtWjZZwS00009WgEYLAE'); 
