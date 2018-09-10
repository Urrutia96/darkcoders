@extends('layouts.layout')
@section('title', '| detalleCurso')

@section('content')

        <div class="row teal lighten-3">
            <div class="col s9 left-align">
                <h3 class="orange-text lighten-5-text">--Nombre del Cursos--</h3>
                <p class="white-text">
                    Una breve descripcion del curso
                </p>
            </div>
            <div class="col s3 center-align">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="{{ asset('img/curso-html5.png') }}">
                        <span class="card-title">Curso de HTML5</span>
                    </div>
                    <div class="card-content">
                        <p>Lenguaje de <b>Marcado de Hiper Texto</b>  
                        basado en etiquetas y atributos, nos define estructura y contenido.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s8">
                    <div class="box-items">
                        <ul class="white-text">
                            <li>Tema #1</li>
                            <li>Tema #2</li>
                            <li>Tema #3</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
@endsection
    
