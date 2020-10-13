@extends('layouts.layout')

@section('title', 'Favoritos')

@section('estilos')
    @parent

    <link rel="stylesheet" href="css/perfil.css">
@endsection

@section('content')
<br>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l8 offset-l2">
                <ul class="collection">
                    <li class="collection-item avatar">
                        <a href="{{ url('detalle-producto') }}">
                            <img src="img/categorias/camisa-rayas-salmon.jpg" alt="Camisa rayas color salmon" class="circle">
                        </a>
                        <span class="title grey-text text-darken-1"><b>Camisa rayas color salmon</b></span>
                        <p>$80.000</p>
                        <a href="#" class="secondary-content"><i class="material-icons">cancel</i></a>
                    </li>
                    <li class="collection-item avatar">
                        <a href="{{ url('detalle-producto') }}">
                            <img src="img/categorias/camisa-rayas-salmon.jpg" alt="Camisa rayas color salmon" class="circle">
                        </a>
                        <span class="title grey-text text-darken-1"><b>Camisa rayas color salmon</b></span>
                        <p>$80.000</p>
                        <a href="#" class="secondary-content"><i class="material-icons">cancel</i></a>
                    </li>
                    <li class="collection-item avatar">
                        <a href="{{ url('detalle-producto') }}">
                            <img src="img/categorias/camisa-rayas-salmon.jpg" alt="Camisa rayas color salmon" class="circle">
                        </a>
                        <span class="title grey-text text-darken-1"><b>Camisa rayas color salmon</b></span>
                        <p>$80.000</p>
                        <a href="#" class="secondary-content"><i class="material-icons">cancel</i></a>
                    </li>
                    <li class="collection-item avatar">
                        <a href="{{ url('detalle-producto') }}">
                            <img src="img/categorias/camisa-rayas-salmon.jpg" alt="Camisa rayas color salmon" class="circle">
                        </a>
                        <span class="title grey-text text-darken-1"><b>Camisa rayas color salmon</b></span>
                        <p>$80.000</p>
                        <a href="#" class="secondary-content"><i class="material-icons">cancel</i></a>
                    </li>
                    <li class="collection-item avatar">
                        <a href="{{ url('detalle-producto') }}">
                            <img src="img/categorias/camisa-rayas-salmon.jpg" alt="Camisa rayas color salmon" class="circle">
                        </a>
                        <span class="title grey-text text-darken-1"><b>Camisa rayas color salmon</b></span>
                        <p>$80.000</p>
                        <a href="#" class="secondary-content"><i class="material-icons">cancel</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection

@section('scripts')
    @parent

@endsection
