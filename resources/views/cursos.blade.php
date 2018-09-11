@extends('layouts.layout')

@section('title', 'cursos')

    
@section('content')
<br>
<br>
    <!--Seccion de Cursos-->
    <div class="section">
            <div class="col s12 center-align">
                <h1 class="orange-text lighten-5-text">Cursos</h1>
            </div>
            <div class="container">
                <div class="row" id="cursos-destacados">
                    <div class="col s12">
                         <!--haciendo uso de tabs-->
                         <ul class="tabs tab-demo black">
                                <li class="tab col s3"><a  class="active white-text" href="#test1">Cursos vigentes</a></li>
                                <li class="tab col s3"><a href="#test2" class="white-text">Cursos Gratuitos</a></li>
                                <li class="tab col s3 disabled"><a href="#test3" class="white-text">Disabled Tab</a></li>
                              </ul>
                            </div>
                            <div id="test1" class="row">
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
                            <div id="test2" class="col s12">Test 2</div>
                            <div id="test3" class="col s12">Test 3</div>

                          </div>
                <div class="row"></div>
            </div>
        </div>
        <br><br>
@endsection
@section('scripts')
<script type="text/javascript">
 var instance = M.Tabs.init('.tabs',{swipeable:true,})
    $(document).ready(function(){
    $('.tabs').tabs({swipeable:false,});
  });
</script>
@endsection