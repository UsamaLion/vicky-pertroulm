<?php 
/* 
 * PayPal and database configuration 
 */ 
  
// PayPal configuration 
define('PAYPAL_ID', 'primesolutions100@gmail.com'); 
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 
 
define('PAYPAL_RETURN_URL', 'http://localhost/artist2/dashboard/paypal_api/success.php'); 
define('PAYPAL_CANCEL_URL', 'http://localhost/artist2/dashboard/paypal_api/cancel.php'); 
define('PAYPAL_NOTIFY_URL', 'http://localhost/artist2/dashboard/paypal_api/ipn.php'); 
define('PAYPAL_CURRENCY', 'USD'); 
 
// Database configuration 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'artist'); 
 
// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");
?>