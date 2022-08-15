<?php

namespace Sample;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;

ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

class PayPalClient
{
    /**
     * Returns PayPal HTTP client instance with environment that has access
     * credentials context. Use this instance to invoke PayPal APIs, provided the
     * credentials have access.
     */
    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }

    /**
     * Set up and return PayPal PHP SDK environment with PayPal access credentials.
     * This sample uses SandboxEnvironment. In production, use LiveEnvironment.
     */
    public static function environment()
    {
        $clientId = getenv("CLIENT_ID") ?: "AdYdkFMvpFX3RPWsNDzo4Fj5jeTEa7MHOnjLnj-_L-LMReM8QwonKH0WK0-Bi38Jg1sZCgGhb2iDAkDo";
        $clientSecret = getenv("CLIENT_SECRET") ?: "EKAJOmOy44hV1118hPKQjUhn63IbSnk1CzWBYHF2YpQQ79jpT2N2gPCliuhHtvQqEIBXti3tmEUd9vC6";
        return new SandboxEnvironment($clientId, $clientSecret);
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
  </head>

  <body>
    <script src="https://www.paypal.com/sdk/js?client-id=AdYdkFMvpFX3RPWsNDzo4Fj5jeTEa7MHOnjLnj-_L-LMReM8QwonKH0WK0-Bi38Jg1sZCgGhb2iDAkDo&disable-funding=credit,card"> // Replace YOUR_CLIENT_ID with your sandbox client ID
    </script>

    <div id="paypal-button-container"></div>
    <div id="result"></div>

    <!-- Add the checkout buttons, set up the order and approve the order -->
    <script>
      paypal.Buttons({
          style:{
              color:'blue',
              shape: 'pill'
          },
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '9.00'
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              console.log('Details are : ');
              
            alert('Transaction completed by ' + details + '');
          });
        }
      }).render('#paypal-button-container'); // Display payment options on your web page
    </script>
  </body>
</html>