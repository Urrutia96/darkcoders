@extends('layouts.layout')

@section('title', 'inicio')
  
@section('content')  
{{session('mensaje')}}
@auth
    {{Auth::user()->tipoSuscripcion()}}    
    {{Auth::user()->isProfesor()?"es Profesor":"No es profesor"}}
@endauth
  <div class="section no-pad-bot" id="index-banner">
    <div class="container" id="banner">
      <br><br>
      <h1 class="header center cyan-text text-darken-3">Bienvenido</h1>
      <div class="row center">
        <h5 class="header col s12 light">Laravel, Vue, HTML5</h5>
      </div>
      <div class="row center">
        <a href="#" id="download-button" class="btn-large waves-effect waves-light orange accent-3">Empezamos?</a>
      </div>
      <br><br>

    </div>
  </div>
 <br>
 <br>
<div class="divider"></div>
  
    <div class="section cyan lighten-5">
        <div class="col s12 center-align">
            <h1 class="orange-text lighten-5-text">Cursos Destacados</h1>
        </div>
        <div class="container">
            <div class="row" id="cursos-destacados">
                <div class="col s12 m4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="{{ asset('img/curso-html5.png') }}">
                            <span class="card-title">Curso de HTML5</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light "><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <p>Lenguaje de <b>Marcado de Hiper Texto</b>  
                            basado en etiquetas y atributos, nos define estructura y contenido.</p>
                        </div>
                    </div>
                </div><!--fin del primer col s12-->
                <div class="col s12 m4">
                        <div class="card hoverable">
                                <div class="card-image">
                                    <img src="{{ asset('img/curso-html5.png') }}">
                                    <span class="card-title">Curso de HTML5</span>
                                    <a class="btn-floating halfway-fab waves-effect waves-light "><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <p>Lenguaje de <b>Marcado de Hiper Texto</b>  
                                    basado en etiquetas y atributos, nos define estructura y contenido.</p>
                                </div>
                        </div>
                </div>
                <div class="col s12 m4">
                        <div class="card hoverable">
                                <div class="card-image">
                                    <img src="{{ asset('img/curso-html5.png') }}">
                                    <span class="card-title">Curso de HTML5</span>
                                    <a class="btn-floating halfway-fab waves-effect waves-light "><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <p>Lenguaje de <b>Marcado de Hiper Texto</b>  
                                    basado en etiquetas y atributos, nos define estructura y contenido.</p>
                                </div>
                        </div>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </div>
    <br><br>
    <div class="container">
    <!--seccion de precios-->
    <div class="section">
        <!--creo una fila-->
        <div class="row">
            <div class="col s12"><!--creo un espacio 12 grid-->
                <h1 class="orange-text lighten-5-text center">Precios</h1>
            </div>
        </div><!--finaliza la fila-->
        <div class="row">
            <!--1° tarje-precio-->
            <div class="col s12 m4 l4">
                <div class="tarjeta-precios cyan lighten-5 hoverable center"><!--inicializo 1° tarjeta-precios-->
                    <div class="row"><!--espacio para encabezado-->
                        <div class="col s12">
                            <h5 class="cyan-text">Mensual</h5>
                        </div>
                    </div>    
                    <div class="row"><!--espacio datos-->
                        <div class="col s12"><!--contenido de precios-->
                            <p class="grey-text pos-inl sim-dolar">S/.</p>
                            <h1 class="orange-text accent-3 tarje-precio pos-inl">33.00</h1>
                                <div class="text-black justify">
                                    <p style="font-size: 16px; padding-left: 20px; padding-right: 20px">
                                        Aun no estas convencido? prueba la opcion mensual y decide.
                                    </p>
                                </div>
                                <div class="pad-boton">
                                    <a class="waves-effect waves-light btn-large" href="{{route('suscripcion')}}?plan=1">Start</a>
                                </div>
                        </div>                            
                    </div>    
                </div><!--tarjeta-precios-->
            </div>
            <!--2° tarje-precio-->
            <div class="col s12 m4 l4">
               
                <div class="tarjeta-precios cyan lighten-5 hoverable center"><!--inicializo 1° tarjeta-precios-->
                    <div class="row"><!--espacio para encabezado-->
                        <div class="col s12">
                            <h5 class="cyan-text">3 Meses</h5>
                        </div>
                    </div>    
                    <div class="row"><!--espacio datos-->
                        <div class="col s12"><!--contenido de precios-->
                            <p class="grey-text pos-inl sim-dolar">S/.</p>
                            <h1 class="orange-text accent-3 tarje-precio pos-inl">90.00</h1>
                                <div class="card-content justify">
                                    <p style="font-size: 16px; padding-left: 20px; padding-right: 20px">
                                        Aun no estas convencido? prueba la opcion mensual y decide.
                                    </p>
                                </div>
                                <div class="pad-boton">
                                    <a class="waves-effect waves-light btn-large" href="{{route('suscripcion')}}?plan=2">Start</a>
                                </div>
                        </div>                            
                    </div>    
                </div><!--tarjeta-precios-->
            </div>
            <!--3° tarje-precio-->
            <div class="col s12 m4 l4">
               
                <div class="tarjeta-precios cyan lighten-5 hoverable center"><!--inicializo 1° tarjeta-precios-->
                    <div class="row"><!--espacio para encabezado-->
                        <div class="col s12">
                            <h5 class="cyan-text">6 Meses</h5>
                        </div>
                    </div>    
                    <div class="row"><!--espacio datos-->
                        <div class="col s12"><!--contenido de precios-->
                            <p class="grey-text pos-inl sim-dolar">S/.</p>
                            <h1 class="orange-text accent-3 tarje-precio pos-inl">180.00</h1>
                                <div class="card-content justify">
                                    <p style="font-size: 16px; padding-left: 20px; padding-right: 20px">
                                        Aun no estas convencido? prueba la opcion mensual y decide.
                                    </p>
                                </div>
                                <div class="pad-boton">
                                    <a class="waves-effect waves-light btn-large" href="{{route('suscripcion')}}?plan=3">Start</a>
                                </div>
                        </div>                            
                    </div>    
                </div><!--tarjeta-precios-->
            </div>
        </div>
    </div><!-- fin seccion de precios-->
    <br>
    <br>
  </div>     
@endsection