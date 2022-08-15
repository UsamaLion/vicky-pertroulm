<?php 
// Include configuration file  
require_once 'config.php'; 
include('../include/db.php'); 
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.css">
    </head>
<div class="panel">
    <form action="payment.php" method="POST" id="paymentFrm">
        <div class="panel-heading">
            <img src="stripe.png" width="320" height="150" alt="Stripe Subscription Logo" />
            <img src="brots.png" style="margin-left:40px; margin-top: 10px; margin-bottom:5px;" width="250" height="80" alt="Brots image" />

                <b>Select Plan:</b>
                <select name="subscr_plan" id="subscr_plan" class="form-control">
                    <?php foreach($plans as $id=>$plan){ ?>
                        <option value="<?php echo $id; ?>"><?php echo $plan['name'].' [$'.$plan['price'].'/'.$plan['interval'].']'; ?></option>
                    <?php } ?>
                </select>
            </p>
        </div>
        <div class="panel-body">
            <!-- Display errors returned by createToken -->
            <div id="paymentResponse"></div>
			
            <!-- Payment form -->
            <div class="form-group">
                <label>NAME</label>
                <input type="text" name="name" id="name" class="field" placeholder="Enter name" required="" autofocus="">
            </div>
            <div class="form-group">
                <label>EMAIL</label>
                <input type="email" name="email" id="email" class="field" placeholder="Enter email" required="">
            </div>
            <div class="form-group">
                <label>CARD NUMBER</label>
                <div id="card_number" class="field"></div>
            </div>
            <div class="row ml-0">
                <div class="left mr-4">
                    <div class="form-group">
                        <label>EXPIRY DATE</label>
                        <div id="card_expiry" class="field"></div>
                    </div>
                </div>
                <div class="right ml-4">
                    <div class="form-group">
                        <label>CVV CODE</label>
                        <div id="card_cvc" class="field"></div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" id="payBtn">Submit Payment</button>
        </div>
    </form>
</div>
</html>
<script src="https://js.stripe.com/v3/"></script>
<script>
  
// Create an instance of the Stripe object
// Set your publishable API key
var stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

// Create an instance of elements
var elements = stripe.elements();

var style = {
    base: {
        fontWeight: 200,
        fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
        fontSize: '13px',
        lineHeight: '1.4',
        color: '#555',
        backgroundColor: '#fff',
        '::placeholder': {
            color: '#888',
        },
    },
    invalid: {
        color: '#eb1c26',
    }
};

var cardElement = elements.create('cardNumber', {
    style: style
});
cardElement.mount('#card_number');

var exp = elements.create('cardExpiry', {
    'style': style
});
exp.mount('#card_expiry');

var cvc = elements.create('cardCvc', {
    'style': style
});
cvc.mount('#card_cvc');

// Validate input of the card elements
var resultContainer = document.getElementById('paymentResponse');
cardElement.addEventListener('change', function(event) {
    if (event.error) {
        resultContainer.innerHTML = '<p>'+event.error.message+'</p>';
    } else {
        resultContainer.innerHTML = '';
    }
});

// Get payment form element
var form = document.getElementById('paymentFrm');

// Create a token when the form is submitted.
form.addEventListener('submit', function(e) {
    e.preventDefault();
    createToken();
});

// Create single-use token to charge the user
function createToken() {
    stripe.createToken(cardElement).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error
            resultContainer.innerHTML = '<p>'+result.error.message+'</p>';
        } else {
            // Send the token to your server
            stripeTokenHandler(result.token);
        }
    });
}

// Callback to handle the response from stripe
function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
	
    // Submit the form
    form.submit();
}
</script>