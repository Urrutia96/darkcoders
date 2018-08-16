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
    <div class="container">
        <section>

            <article>
                <div class="row">
                    <div class="col s0 m1 l4">

                    </div>
                    <div class="col s12 m10 l4">
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Juan" id="first_name" type="text" class="validate">
                                        <label for="first_name">Nombre</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="last_name" type="text" class="validate" placeholder="Peréz">
                                        <label for="last_name">Apellidos</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s4"></div>
                                    <div class="col s4">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                            <i class="material-icons right">send</i>
                                        </button>
                                        <br>
                                        <br>
                                        <a href="{{ url('user/login') }}" Log in>Login</a>
                                    </div>
                                    <div class="col s4"></div>
                                </div>
                            </form>
                        </div>



                    </div>
                    <div class="col s0 m1 l4"></div>
                </div>
            </article>

        </section>
    </div>
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
        <!-- Scripts -->
        <script src="{{ asset('js/materialize.min.js') }}"></script>
    </body>
</html>