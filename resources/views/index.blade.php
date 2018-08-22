<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="author" content="Wilber Tobar">
  <meta name="description" content="p&aacutegina inicial">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Home | DarkCoders</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
  <div class="navbar-fixed"><!--coloco el navbar en position estatica-->
    <nav class="cyan darken-4" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">
        <!--añado una imagen svg-->
          <img style="max-height: 100px;" src="{{ asset('img/Logo.svg') }}" alt="Logo">
        </a>
      <!--icono tres lineas-->
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#">Navbar Link</a></li>
            <li><a href="">navbar link</a></li>
            <li><a  data-target="slide-out" class="waves-effect waves-light outnav-trigger btn">User<i class="material-icons right">account_circle</i></a></li></li>
          </ul>
      </div>
    </nav>
  </div><!--finaliza el navbar en position estatica-->
       <ul class="sidenav" id="mobile-demo">
        <li><a href="#">Navbar Link</a></li>
        <li><a href="#">Navbar Link</a></li>
        
      </ul>
      <!--info-user - faltan hacer pruebas -->
        <ul id="slide-out" class="sidenav">
           <li>
             <div class="user-view">
                <div class="background">
                  <img src="images/office.jpg">
                </div>
                <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                <a href="#name"><span class="white-text name">John Doe</span></a>
                <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
             </div>
           </li>
           <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
           <li><a href="#!">Second Link</a></li>
           <li><div class="divider"></div></li>
           <li><a class="subheader">Subheader</a></li>
           <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
         </ul>

      
  
  
  <div class="section no-pad-bot" id="index-banner">
    <div class="container" id="banner">
      <br><br>
      <h1 class="header center cyan-text text-darken-3">Bienvenido</h1>
      <div class="row center">
        <h5 class="header col s12 light">Hello World11</h5>
      </div>
      <div class="row center">
        <a href="#" id="download-button" class="btn-large waves-effect waves-light orange accent-3">Empezemos</a>
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

    <div class="section">
        <div class="row">
            <div class="col s12"> 
                <h1 class="orange-text lighten-5 center">Precios</h1>
            </div>
            <div class="col s12 m4">
                <div class="card-panel cyan lighten-5 center hoverable">
                  <div class="row">
                  <div class="col s12">
                    <h5 class="cyan-text">MENSUAL</h2>
                  </div>
                  <!--Precios-->
                  <div class="col s12">
                     <p class="grey-text pos-inl sim-dolar  ">$</p>
                     <h1 class="orange-text accent-3-text tarj-precio pos-inl">15</h1>
                  </div>
                  <!--info-->
                  <div class="col s12">
                    <p class="">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum ratione illo labore odit architecto ipsum explicabo dicta omnis consectetur quaerat reiciendis eum corrupti beatae reprehenderit voluptatum, molestiae dignissimos quo error!
                  </p>
                  <a class="waves-effect waves-light btn-large pad-boton">start</a>    
                  </div>
                  </div>
                  
                  
                </div>
            </div>
            <div class="col s12 m4">
            <div class="card-panel cyan lighten-5 center hoverable">
                  <div class="row">
                  <div class="col s12">
                    <h5 class="cyan-text">TRIMESTRAL</h2>
                  </div>
                  <!--Precios-->
                  <div class="col s12">
                     <p class="grey-text pos-inl sim-dolar  ">$</p>
                     <h1 class="orange-text accent-3-text tarj-precio pos-inl">30</h1>
                  </div>
                  <!--info-->
                  <div class="col s12">
                    <p class="">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum ratione illo labore odit architecto ipsum explicabo dicta omnis consectetur quaerat reiciendis eum corrupti beatae reprehenderit voluptatum, molestiae dignissimos quo error!
                    </p>
                  </div>
                  <a class="waves-effect waves-light btn-large pad-boton">start</a> 
                  </div>
                </div>
                
            </div>
            <div class="col s12 m4">
            <div class="card-panel cyan lighten-5 center hoverable">
                <div class="row">
                  <div class="col s12">
                    <h5 class="cyan-text">ANUAL</h2>
                  </div>
                  <!--Precios-->
                  <div class="col s12">
                     <p class="grey-text pos-inl sim-dolar  ">$</p>
                     <h1 class="orange-text accent-3-text tarj-precio pos-inl">90</h1>
                  </div>
                  <!--info-->
                  <div class="col s12">
                    <p class="">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum ratione illo labore odit architecto ipsum explicabo dicta omnis consectetur quaerat reiciendis eum corrupti beatae reprehenderit voluptatum, molestiae dignissimos quo error!
                    </p>
                  </div>
                  <a class="waves-effect waves-light btn-large pad-boton">start</a> 
                  </div>
                </div>
                
            </div>
        </div>
    </div>
    <br>
    <br>
  </div>
<!--init footer-->
  <footer class="page-footer cyan darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">DarkCoders</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
  <!--Finish Footer-->


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('js/materialize.min.js') }}"></script>
  <script src="{{ asset('js/myScript.js') }}"></script>

  </body>
</html>
                    