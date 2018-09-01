
/**
 * Montar formulario de stripe 
 */
var stripe = Stripe('pk_test_3edeNOdFS1hDivtTiMIanqQr');
var elements = stripe.elements();

var style = {
  base: {
    fontSize: '16px',
  },  
};

// Seleccionar elementoo Tarjeta
var cardN = elements.create('cardNumber', {style: style});
var cardE = elements.create('cardExpiry', {style: style});
var cardCvc = elements.create('cardCvc', {style:style});

// Add an instance of the card Element into the `card-element` <div>.
cardN.mount('#card-numero');
cardE.mount('#card-exp');
cardCvc.mount('#card-cvc');

cardN.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});
// Create a token or display an error when the form is submitted.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(cardN).then(function(result) {
    if (result.error) {
      // Inform the customer that there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);console.log(result);
    }
  });
});
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}