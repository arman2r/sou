@extends('layouts.layout')

@section('title', 'Catálogo de ropa')

@section('estilos')
    @parent

    <link rel="stylesheet" href="css/categorias.css">
@endsection

@section('content')
<div class="container">
        <br>
        <h1 class="center dark-text" style="font-size: 1.5rem;font-family:'Merriweather Sans', sans-serif !important;font-weight: 600;">TIENDA VIRTUAL</h1>
        <br>
        <div class="row">
            <div class="col s12 m3 filters">
                <ul class="collapsible expandable no-shadow">
                    <li class="active">
                        <div class="collapsible-header primary">CATEGORÍAS<i class="material-icons">menu</i></div>
                        <div class="collapsible-body grey lighten-5">
                            <div class="row" style="margin:0 0 !important">
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12"><b>Ver todo</b></a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12">Básicas [53]</a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12">Camisas y blusas [32]</a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12">Camisetas [14]</a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12">Chaquetas y sacos [20]</a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12">Faldas [41]</a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12">Pantalones [30]</a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12">Shorts [12]</a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12">Vestidos [50]</a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12">Camisetas [9]</a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12"><b>DENIM</b></a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12">Chaquetas [9]</a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12">Jeans [10]</a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12">Shorts [53]</a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12"><b>BÁSICOS</b></a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12">Blusas [10]</a>
                                <a href="#" class="btn waves-effect btn-flat grey-text text-darken-1 col s12">Camisetas [7]</a>
                            </div>
                        </div>
                    </li>
                    <li class="active">
                        <div class="collapsible-header primary">FILTRAR<i class="material-icons">arrow_drop_down</i></div>
                        <div class="collapsible-body grey lighten-5">
                            <div class="row" style="margin:0 0 !important">
                                <a href="" class="btn waves-effect btn-flat grey-text text-darken-1 col s12"><b>Colores</b></a>
                                <a href="" class="btn waves-effect btn-flat grey-text text-darken-1 col s12"><b>Precio</b></a>
                                <a href="" class="btn waves-effect btn-flat grey-text text-darken-1 col s12"><b>Otros</b></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col s12 m9 content-category">
                <form class="col s12 search-category">
                    <div class="row">
                        <div class="input-field col s12 m6 l4">
                            <input placeholder="Buscador" id="first_name" type="text" class="validate">
                            <a class="btn-floating waves-effect btn-flat prefix"><i class="material-icons grey-text text-darken-2">search</i></a>
                        </div>
                    </div>
                </form>
                <div class="row category-cards">
                    <div class="col s12 m6 l4">
                        <div class="card no-shadow">
                            <a href="{{ url('detalle-producto') }}" class="card-image">
                                <img src="img/categorias/camisa-rayas-salmon.jpg" alt="camisa a rayas color salmon">
                            </a>
                            <div class="card-content">
                                <a href="{{ url('detalle-producto') }}" class="card-title truncate grey-text text-darken-1">Camisa Rayas Color Salmón</a>
                                <a href="{{ url('detalle-producto') }}" class="grey-text">$80.000</a>
                            </div>
                            <div class="card-action" style="padding:10px 0 !important">
                                <a class="btn waves-effect" style="width: 100%" href="{{ url('detalle-producto') }}">ver producto</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card no-shadow">
                            <a href="{{ url('detalle-producto') }}" class="card-image">
                                <img src="img/categorias/vestido.jpg" alt="vestido">
                            </a>
                            <div class="card-content">
                                <a href="{{ url('detalle-producto') }}" class="card-title truncate grey-text text-darken-1">Vestido Todavida Color Blanco</a>
                                <a href="{{ url('detalle-producto') }}" class="grey-text">$120.000</a>
                            </div>
                            <div class="card-action" style="padding:10px 0 !important">
                                <a class="btn waves-effect" style="width: 100%" href="{{ url('detalle-producto') }}">ver producto</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card no-shadow">
                            <a href="{{ url('detalle-producto') }}" class="card-image">
                                <img src="img/categorias/blusa-amaflora.jpg" alt="Blusa amaflora">
                            </a>
                            <div class="card-content">
                                <a href="{{ url('detalle-producto') }}" class="card-title truncate grey-text text-darken-1">Blusa Amaflora</a>
                                <a href="{{ url('detalle-producto') }}" class="grey-text">$78.000</a>
                            </div>
                            <div class="card-action" style="padding:10px 0 !important">
                                <a class="btn waves-effect" style="width: 100%" href="{{ url('detalle-producto') }}">ver producto</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card no-shadow">
                            <a href="{{ url('detalle-producto') }}" class="card-image">
                                <img src="img/categorias/basica-unim.jpg" alt="Básica unim">
                            </a>
                            <div class="card-content">
                                <a href="{{ url('detalle-producto') }}" class="card-title truncate grey-text text-darken-1">Básica Unim Color Rosa</a>
                                <a href="{{ url('detalle-producto') }}" class="grey-text">$65.000</a>
                            </div>
                            <div class="card-action" style="padding:10px 0 !important">
                                <a class="btn waves-effect" style="width: 100%" href="{{ url('detalle-producto') }}">ver producto</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card no-shadow">
                            <a href="{{ url('detalle-producto') }}" class="card-image">
                                <img src="img/categorias/vestido-favorito.jpg" alt="Vestido Favorit">
                            </a>
                            <div class="card-content">
                                <a href="{{ url('detalle-producto') }}" class="card-title truncate grey-text text-darken-1">Vestido Favorit</a>
                                <a href="{{ url('detalle-producto') }}" class="grey-text">$135.000</a>
                            </div>
                            <div class="card-action" style="padding:10px 0 !important">
                                <a class="btn waves-effect" style="width: 100%" href="{{ url('detalle-producto') }}">ver producto</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card no-shadow">
                            <a href="{{ url('detalle-producto') }}" class="card-image">
                                <img src="img/categorias/pantalon-palazzo.jpg" alt="Pantalón Palazzo">
                            </a>
                            <div class="card-content">
                                <a href="{{ url('detalle-producto') }}" class="card-title truncate grey-text text-darken-1">Pantalón Palazzo</a>
                                <a href="{{ url('detalle-producto') }}" class="grey-text">$95.000</a>
                            </div>
                            <div class="card-action" style="padding:10px 0 !important">
                                <a class="btn waves-effect" style="width: 100%" href="{{ url('detalle-producto') }}">ver producto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    <script src="js/categorias.js"></script>
@endsection
