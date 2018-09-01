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
							<form class="col s12" action="/charge" method="post" id="payment-form">
								<div class="row">
									<div class="input-field col s12">
											<!-- Used to display Element errors. -->
											<div id="card-errors" role="alert"></div>
											<div id="card-numero"></div>
											<label for="card-numero">
												N&uacute;mero de Tajeta
											</label>
											
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
@endsection