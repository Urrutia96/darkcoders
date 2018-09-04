@extends('layouts.layout')
@section('title', 'Suscripcion')
@section('links')
<link rel="stylesheet" href="{{ asset('css/custompagar.css') }}">    
@endsection

@section('content')
<section>
    <article>
        <div class="container">
            <div class="row">
                <div class="col s12 m4 l2"></div>
                <div class="col s12 m4 l8">
                    <div class="formulario">
                        <form>
                            <label>
                                <input name="cardholder-name" class="field is-empty" placeholder="Alex Tobar" autocomplete="off">
                                <span><span>Nombre de la tarjeta</span></span>
                            </label>
                            <label>
                                <div id="card-element" class="field is-empty"></div>
                                <span><span>N° Tarjeta</span></span>
                            </label>
                            <label>Selecciona tu plan de suscripción</label>
                            <select name="plan">
                                    <option value="" disabled selected>Elegir Plan de Pago</option>
                                    <option value="1" {{isset($_GET['plan']) && $_GET['plan']==1?'selected':''}}>Mensual -- S/.33.00</option>
                                    <option value="2" {{isset($_GET['plan']) && $_GET['plan']==2?'selected':''}}>3 Meses -- S/.90.00</option>
                                    <option value="3" {{isset($_GET['plan']) && $_GET['plan']==1?'selected':''}}>6 Meses -- S/.180.00</option>
                                  </select>
                            <button type="submit">Suscripción</button>
                            <div class="outcome">
                                <div class="error"></div>
                                <div class="success">
                                    Success! Your Stripe token is <span class="token"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col s12 m4 l2"></div>

            </div>
        </div>
        <!--fin del container-->
    </article>
</section>
@endsection

@section('scripts')
	<script src="https://js.stripe.com/v3/"></script><!--add libreria Stripe-->
    <script src="{{ asset('js/customStripe2.js') }}"></script>
    <script type="text/javascript">
		$(document).ready(function(){
		    $('select').formSelect();
		  });
	</script>
@endsection
