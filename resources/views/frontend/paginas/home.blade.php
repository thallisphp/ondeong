@extends('frontend.base')

@section('conteudo')
    <div id="map_canvas" class="map"></div>

    <div class="row site">
        @include('frontend.includes.iconesLaterias')

        <div class="col-md-11 general_content_styles index_content" id="cont">
            @include('frontend.includes.header')
            @include('frontend.includes.botaoAbrirMapa')
            @include('frontend.includes.busca')
            @include('frontend.includes.funcoes')
            @include('frontend.includes.linha')
            @include('frontend.includes.destaques')
        </div>
    </div>
@stop
