<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Panel | DarkCoders</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    </head>
    <body>
        
        <!-- Body -->
        <header>
            <h1 class="align center">Registrate</h1>
         </header>
        <div id="app">
            <div class="container">
                <registro></registro>
            </div>
        </div>
    <!--
    <footer>
        <div class="row">
            <div class="col s12">
                <div class="grey darken-4">
                    <span class="align center">
                        <p class=" white-text">
                            Pie de pagina
                        </p>
                    </span>
                </div>
            </div>
        </div>
    </footer>
-->
        <!-- Scripts -->
        <script src="{{ asset('js/materialize.min.js') }}"></script>
        <script src=" {{ asset('js/app.js') }}"></script>
    </body>
</html>