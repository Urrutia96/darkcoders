<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login | DarkCoders</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
 <!-- Body -->
<body>

   
    <header>
        <h1 class="align center">Login</h1>
    </header>
    <div class="container">
        <section>
            
            <article>
                <div class="row">
                    <div class="col s0 m1 l4">

                    </div>
                    <div class="col s12 m10 l4">
                        <div class="row">

                            <form class="col s12" action=" {{ route('registro.store') }} ">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email_inline" type="email" class="validate">
                                        <label for="email_inline">Email</label>
                                        <span class="helper-text" data-error="wrong" data-success="right"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate">
                                        <label for="password">Password</label>
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
                                        <a href="{{ url('user/registrarse') }}">Registrarse</a>
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

    <!-- Footer -->
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
    <!-- EndFooter -->

    <!-- Scripts -->
    <script src="{{ asset('js/materialize.min.js') }}"></script>
</body>

</html>