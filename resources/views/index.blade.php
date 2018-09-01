@extends('layouts.layout')

@section('title', 'inicio')
  
@section('content')  
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
 

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center cyan-text text-darken-4"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
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
                            <p class="grey-text pos-inl sim-dolar">$</p>
                            <h1 class="orange-text accent-3 tarje-precio pos-inl">15</h1>
                                <div class="text-black justify">
                                    <p>
                                        HOLA
                                    </p>
                                </div>
                                <div class="pad-boton">
                                    <a class="waves-effect waves-light btn-large" >Start</a>
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
                            <h5 class="cyan-text">TRIMESTRAL</h5>
                        </div>
                    </div>    
                    <div class="row"><!--espacio datos-->
                        <div class="col s12"><!--contenido de precios-->
                            <p class="grey-text pos-inl sim-dolar">$</p>
                            <h1 class="orange-text accent-3 tarje-precio pos-inl">30</h1>
                                <div class="card-content justify">
                                    <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum ratione illo labore odit architecto ipsum explicabo dicta omnis consectetur quaerat reiciendis eum corrupti beatae reprehenderit voluptatum, molestiae dignissimos quo error!
                                    </p>
                                </div>
                                <div class="pad-boton">
                                    <a class="waves-effect waves-light btn-large" >Start</a>
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
                            <h5 class="cyan-text">ANUAL</h5>
                        </div>
                    </div>    
                    <div class="row"><!--espacio datos-->
                        <div class="col s12"><!--contenido de precios-->
                            <p class="grey-text pos-inl sim-dolar">$</p>
                            <h1 class="orange-text accent-3 tarje-precio pos-inl">90</h1>
                                <div class="card-content justify">
                                    <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum ratione illo labore odit architecto ipsum explicabo dicta omnis consectetur quaerat reiciendis eum corrupti beatae reprehenderit voluptatum, molestiae dignissimos quo error!
                                    </p>
                                </div>
                                <div class="pad-boton">
                                    <a class="waves-effect waves-light btn-large" >Start</a>
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