@extends('layouts.layout')
@section('title', 'Suscripcion')
@section('links')
<link rel="stylesheet" href="{{ asset('css/custompagar.css') }}">    
@endsection

@section('content')


<!--nuevo form-->

<div class="container">
    <section>
        <div class="row">
            <div class="col s12">
                <div class="center-align">
                    <h1>Paga tu Suscripcion</h1>
                </div>
            </div>
        </div>
        <article>
           <div class="row">
               <form class="col s12 m6 l6" action="{{ route('cashier') }}" method="post" id="payment-form">
                   <div class="row">
                       <div class="input-field col s12">
                           <input class="my-input" id="name" type="text">
                           <label for="name">Nombre de Tarjeta</label>
                       </div>
                   </div>
                   <div class="row">
                       <div class="input-field col s12">
                           <div class="my-input" id="card"></div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="input-field col s12">
                        <select name="plan">
                                <option value="" disabled selected>Elegir Plan de Pago</option>
                                <option value="1" {{isset($_GET['plan']) && $_GET['plan']==1?'selected':''}}>Mensual -- S/.33.00</option>
                                <option value="2" {{isset($_GET['plan']) && $_GET['plan']==2?'selected':''}}>3 Meses -- S/.90.00</option>
                                <option value="3" {{isset($_GET['plan']) && $_GET['plan']==1?'selected':''}}>6 Meses -- S/.180.00</option>
                              </select>
                       </div>
                   </div>
                   <div class="row">
                       <div class="center-align col s12">
                           <!-- Used to display Element errors. -->
								<div id="card-errors" role="alert"></div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="center-align col s12">
                            <button class="btn waves-effect waves-light" type="submit">
                                Pagar
                            </button>
                       </div>
                   </div>

               </form>
               <aside>
                   <div class="col s12 m6 l6">
                        <img id="promocion" class="responsive-img" src="{{ asset('img/oferta.png') }}" alt="Promoción">
                   </div>
               </aside>
           </div>  
           
        </article>
    </section>
</div>
@endsection

@section('scripts')
	<script src="https://js.stripe.com/v3/"></script><!--add libreria Stripe-->
    <script src="{{ asset('js/customStripe.js') }}"></script>
    <script type="text/javascript">
		$(document).ready(function(){
		    $('select').formSelect();
		  });
	</script>
@endsection
