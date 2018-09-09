@extends('layouts.layout')

@section('title', 'cursos')

    
@section('content')
<br>
<br>
    <!--Seccion de Cursos-->
    <div class="section">
            <div class="col s12 center-align">
                <h1 class="orange-text lighten-5-text">Cursos Vigentes</h1>
            </div>
            <div class="container">
                <div class="row" id="cursos-destacados">
                    <div class="col s12 m6 l4">
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
                    <div class="col s12 m6 l4">
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
                    <div class="col s12 m6 l4">
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
@endsection
