@extends('layouts.layout')

@section('title', 'pagar')

@section('content')
<div class="container">
	
	<section>
		<div class="section">
			<article>
				<div class="row">
					<div class="col s12 m4"></div>
					<div class="col s12 m4">
						<div class="row">
							<form class="col s12" action="{{ route('cashier') }}" method="post" id="payment-form">
								{{ csrf_field() }}
								<div class="input-field col s12">
								   <select name="plan">
								     <option value="" disabled selected>Choose your option</option>
								     <option value="1">Mensual -- S/.33.00</option>
								     <option value="2">3 Meses -- S/.90.00</option>
								     <option value="3">6 Meses -- S/.180.00</option>
								   </select>
								   <label>Selecciona tu plan de suscripción</label>
								 </div>
								<div class="row">
									<div class="input-field col s12">
											<label for="card-numero">
													N&uacute;mero de Tajeta
											</label>
											<div id="card-numero"></div>
											
											<!-- Used to display Element errors. -->
											<div id="card-errors" role="alert"></div>
											
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
											<div id="card-exp"></div>
									</div>
									<div class="input-field col s6">
											<div id="card-cvc" ></div>
									</div>
								</div>
								<!-- Used to display Element errors. -->
								<div id="card-errors" role="alert"></div>
								<br>

								<input type="text" placeholder="Nombre en la tarjeta">
								
							  
							
							  <button>Pagar</button>
							</form>
						</div>
					</div><!--Elemento Centrado-->
					<div class="col s12 m4"></div>
				</div>
			</article>
		</div>
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