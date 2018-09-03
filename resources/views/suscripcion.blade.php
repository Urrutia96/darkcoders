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
                <div class="col s12 m4"></div>
                <div class="col s12 m4">
                    <p class="cyan-text text-darken-4"> esto es con materialize</p>
                    <div class="formulario">
                        <form>
                            <label>
                                <input name="cardholder-name" class="field is-empty" placeholder="Alex Tobar">
                                <span><span>Name</span></span>
                            </label>
                            <label>
                                <div id="card-element" class="field is-empty"></div>
                                <span><span>card</span></span>
                            </label>
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
                <div class="col s12 m4"></div>

            </div>
        </div>
        <!--fin del container-->
    </article>
</section>
@endsection

@section('scripts')
	<script src="https://js.stripe.com/v3/"></script><!--add libreria Stripe-->
	<script src="{{ asset('js/customStripe2.js') }}"></script>
@endsection
