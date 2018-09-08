var stripe = Stripe('pk_test_3edeNOdFS1hDivtTiMIanqQr');
var elements= stripe.elements();
var card = elements.create('card', {
    iconStyle: 'solid',
    style:{
        base:{
            iconColor: '#8898AA',
            lineHeight: '36px',
            fontWeight: 300,
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSize: '19px',
        '::placeholder':{
            color: '#8898AA',
        },
    },
    focus:{
        
    },
    invalid: {
        iconColor: '#e85746',
        color: '#e85746',
         }
    },
    classes:{
        focus: 'is-focused',
        empty: 'is-empty',
    },
});
card.mount('#card-element');
//creamos funcion para cambiar propiedades y aplicar reglas
var inputs = document.querySelectorAll('input.field');
Array.prototype.forEach.call(inputs, function(input){
    input.addEventListener('focus', function(){
        input.classList.add('is-focused');
    });
    input.addEventListener('blur', function(){
        input.classList.remove('is-focused');
    });
    input.addEventListener('keyup', function(){
        if(input.value.lenght === 0){
            input.classList.add('is-empty');
        }else{
            input.classList.remove('is-empty');
        }
    });
});

/**
 * salidas en pantalla
 */
function setOutCome(result){
    var successElement = document.querySelector('.success');
    var errorElement= document.querySelector('.error');
    successElement.classList.remove('visible');
    errorElement.classList.remove('visible');
    if(result.token){
        successElement.querySelector('.token').textContent  = result.token.id;
        successElement.classList.add('visible');
    }else if(result.error){
        errorElement.textContent = result.error.message;
        errorElement.classList.add('visible');
    }   
}
card.on('change',function(event){
    setOutCome(event);
});
document.querySelector('form').addEventListener('submit', function(e){
    e.preventDefault();
    var form = document.querySelector('form');
    var extraDetails = {
        name: form.querySelector('input[name=cardholder-name]').value,
    };
    stripe.createToken(card, extraDetails).then(setOutCome);
});
//crear elemento token
/** 
form.addEventListener('submit', function(event) {
    event.preventDefault();
  
    stripe.createToken(cardN).then(function(result) {
      if (result.error) {
        // Inform the customer that there was an error.
        var errorElement = document.getElementsByClassName('.error');
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
*/