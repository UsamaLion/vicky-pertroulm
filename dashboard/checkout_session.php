<?php
$package = $_POST['package'];
$amount = $_POST['amount'];
$amount = $amount * 100;
$username = $_POST['username'];

require 'stripe-php/init.php';
\Stripe\Stripe::setApiKey('sk_test_51IegieFXDieSdWwIeHqqcr7oZ4iC1k8fleoMdXKNAqqJ9incD4uzdo0gx0sew08a8IDqzwkXK01k1WmmdDbbcDD200xTyMrBtE');
header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:80/artist2/dashboard/';

$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'eur',
      'unit_amount' => $amount,
      'product_data' => [
        'name' => $package,
        'images' => ["https://i.imgur.com/EHyR2nP.png"],
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.php?session_id={CHECKOUT_SESSION_ID}',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
  'client_reference_id'=> $username,
]);

echo json_encode(['id' => $checkout_session->id]);

?>