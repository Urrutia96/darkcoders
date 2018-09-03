<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="author" content="Wilber Tobar">
	<meta name="description" content="p&aacutegina inicial">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>DarkCoders @yield('title')</title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
	
	<!-- css opcionales -->
	@yield('links')
</head>
<body>
	<div class="navbar-fixed">
		<!--coloco el navbar en position estatica-->
		<nav class="cyan darken-4" role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" href="#" class="brand-logo">
				<!--añado una imagen svg-->
					<img style="max-height: 100px;" src="{{ asset('img/Logo.svg') }}" alt="Logo">
				</a>
			<!--icono tres lineas-->
				<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="#">Cursos</a></li>
						<li><a href="">Blog</a></li>
						@auth
							@if(Auth::user()->suscrito())
							
							@else
								<li><a href="">Precio</a></li>
							@endif
						@endauth
						<li>
							@auth
								<a  data-target="slide-out" class="waves-effect waves-light sidenav-trigger show-on-large">{{ Auth::user()->name }}<i class="material-icons right">account_circle</i></a>
							@else
								<a href="{{ route('login') }}" class="waves-effect waves-light sidenav-trigger show-on-large">Login/Register<i class="material-icons right">input</i></a>
							@endif
						</li>
					</ul>
			</div>
		</nav>
	</div>
	<!--finaliza el navbar en position estatica-->
	 <ul class="sidenav" id="mobile-demo">
		<li><a href="#">Cursos</a></li>
		<li><a href="#">Blog</a></li>
	</ul>
	<!--info-user - faltan hacer pruebas -->
	<ul id="slide-out" class="sidenav">
		 <li>
			 <div class="user-view">
					<div class="background">
						<img src="{{ asset('img/windows-broken.jpg')  }}">
					</div>
					<a href="#user"><img class="circle" src="{{ asset('img/Pinguinos.jpg')  }}"></a>
					@if (Route::has('login'))
							@auth
									<a href="#name"><span class="white-text name">{{Auth::user()->name}}</span></a>
									<a href="#email"><span class="white-text email">{{Auth::user()->email}}</span></a>
							@else
									<a href="#name"><span class="white-text name">Unknow</span></a>
									<a href="#email"><span class="white-text email">mail@mail.com</span></a>
							@endauth
			</div>
					@endif
		 </li>
		 <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
		 <li><a href="#!">Second Link</a></li>
		 <li><div class="divider"></div></li>
		 <li><a class="subheader">Subheader</a></li>
		 <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
	 </ul>

			
	<!-- Contenido de la pagina -->
	@yield('content')
	<!-- final Conenido -->

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
	@yield('scripts')
	</body>
</html>
										