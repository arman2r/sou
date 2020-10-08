@extends('layouts.layout')

@section('title', 'Catálogo de ropa')

@section('estilos')
    @parent

    <link rel="stylesheet" href="css/categorias.css">
    <link rel="stylesheet" href="css/splide.min.css">
    <link rel="stylesheet" href="css/detalle-producto.css">
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
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col s12 m12 l8">
                        <div class="row content-detail">
                            <div id="secondary-slider" class="splide col s2">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/blusa-amaflora.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/basica-unim.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/camisa-rayas-salmon.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/pantalon-palazzo.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/vestido-favorito.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/vestido.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/blusa-amaflora.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/basica-unim.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/camisa-rayas-salmon.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/pantalon-palazzo.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/vestido-favorito.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/vestido.jpg" alt="blusa amaflora">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="primary-slider" class="splide col s10">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/blusa-amaflora.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/basica-unim.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/camisa-rayas-salmon.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/pantalon-palazzo.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/vestido-favorito.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/vestido.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/blusa-amaflora.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/basica-unim.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/camisa-rayas-salmon.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/pantalon-palazzo.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/vestido-favorito.jpg" alt="blusa amaflora">
                                        </li>
                                        <li class="splide__slide center">
                                            <img class="responsive-img" src="img/categorias/vestido.jpg" alt="blusa amaflora">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l4 grey-text">
                        <h3 class="grey-text text-darken-1">Vestido Todavida</h3>
                        <h6>Ref. 0000-00000</h6>

                        <h5 class="black-text">$120.000</h5>
                        <p class="grey-text text-darken-1">
                            Este vestido es todo lo que está bien en esta vida! ✨ 🤩 Perfecto para cualquier ocasión!!!
                        </p>
                        <h6>Color</h6>
                        <form action="#" class="row items-selects">
                            <div class="input-field col s12">
                                <select>
                                  <option value="" disabled selected>Seleccione el color:</option>
                                  <option value="1">Azul rey</option>
                                  <option value="2">Palo rosa</option>
                                  <option value="3">Naranja</option>
                                </select>
                            </div>
                        </form>

                        <h6>Talla</h6>
                        <form action="#" class="row items-selects">
                            <div class="col s2">
                                <label>
                                    <input name="group1" type="radio" checked />
                                    <span class="radio-color" color="#000"><b>XS</b></span>
                                </label>
                            </div>
                            <div class="col s2">
                                <label>
                                    <input name="group1" type="radio" />
                                    <span class="radio-color" color="#000"><b>S</b></span>
                                </label>
                            </div>
                            <div class="col s2">
                                <label>
                                    <input name="group1" type="radio" />
                                    <span class="radio-color" color="#000"><b>M</b></span>
                                </label>
                            </div>
                            <div class="col s2">
                                <label>
                                    <input name="group1" type="radio" />
                                    <span class="radio-color" color="#000"><b>L</b></span>
                                </label>
                            </div>
                            <div class="col s2">
                                <label>
                                    <input name="group1" type="radio" />
                                    <span class="radio-color" color="#000"><b>XL</b></span>
                                </label>
                            </div>

                        </form>
                        <h6>Cantidad</h6>
                        <div class="counter">
                            <button class="btn btn-flat waves-effect white grey-text text-darken-5">
                                -
                            </button>
                            <button class="btn btn-flat white grey-text text-darken-5">
                                1
                            </button>
                            <button class="btn btn-flat waves-effect white grey-text text-darken-5">
                                +
                            </button>
                        </div>
                    </div>
                    <div class="col s12">
                        <br>
                        <h6><b class="grey-text text-darken-1">Tal vez te puede gustar:</b></h6>
                        <br>
                        <div class="row">
                            <div class="col s12">
                                <div id="carruselslider" class="splide col s12">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide center">
                                                <a href="#">
                                                    <img class="responsive-img" src="img/categorias/blusa-amaflora.jpg" alt="blusa amaflora">
                                                    <div class="descript-product">
                                                        <p>Vestido Lrg Blanco</p>
                                                        <h6><b>$165.000</b></h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="splide__slide center">
                                                <a href="#">
                                                    <img class="responsive-img" src="img/categorias/basica-unim.jpg" alt="blusa amaflora">
                                                    <div class="descript-product">
                                                        <p>Vestido Lrg Blanco</p>
                                                        <h6><b>$165.000</b></h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="splide__slide center">
                                                <a href="#">
                                                    <img class="responsive-img" src="img/categorias/camisa-rayas-salmon.jpg" alt="blusa amaflora">
                                                    <div class="descript-product">
                                                        <p>Vestido Lrg Blanco</p>
                                                        <h6><b>$165.000</b></h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="splide__slide center">
                                                <a href="#">
                                                    <img class="responsive-img" src="img/categorias/pantalon-palazzo.jpg" alt="blusa amaflora">
                                                    <div class="descript-product">
                                                        <p>Vestido Lrg Blanco</p>
                                                        <h6><b>$165.000</b></h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="splide__slide center">
                                                <a href="#">
                                                    <img class="responsive-img" src="img/categorias/vestido-favorito.jpg" alt="blusa amaflora">
                                                    <div class="descript-product">
                                                        <p>Vestido Lrg Blanco</p>
                                                        <h6><b>$165.000</b></h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="splide__slide center">
                                                <a href="#">
                                                    <img class="responsive-img" src="img/categorias/vestido.jpg" alt="blusa amaflora">
                                                    <div class="descript-product">
                                                        <p>Vestido Lrg Blanco</p>
                                                        <h6><b>$165.000</b></h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="splide__slide center">
                                                <a href="#">
                                                    <img class="responsive-img" src="img/categorias/blusa-amaflora.jpg" alt="blusa amaflora">
                                                    <div class="descript-product">
                                                        <p>Vestido Lrg Blanco</p>
                                                        <h6><b>$165.000</b></h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="splide__slide center">
                                                <a href="#">
                                                    <img class="responsive-img" src="img/categorias/basica-unim.jpg" alt="blusa amaflora">
                                                    <div class="descript-product">
                                                        <p>Vestido Lrg Blanco</p>
                                                        <h6><b>$165.000</b></h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="splide__slide center">
                                                <a href="#">
                                                    <img class="responsive-img" src="img/categorias/camisa-rayas-salmon.jpg" alt="blusa amaflora">
                                                    <div class="descript-product">
                                                        <p>Vestido Lrg Blanco</p>
                                                        <h6><b>$165.000</b></h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="splide__slide center">
                                                <a href="#">
                                                    <img class="responsive-img" src="img/categorias/pantalon-palazzo.jpg" alt="blusa amaflora">
                                                    <div class="descript-product">
                                                        <p>Vestido Lrg Blanco</p>
                                                        <h6><b>$165.000</b></h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="splide__slide center">
                                                <a href="#">
                                                    <img class="responsive-img" src="img/categorias/vestido-favorito.jpg" alt="blusa amaflora">
                                                    <div class="descript-product">
                                                        <p>Vestido Lrg Blanco</p>
                                                        <h6><b>$165.000</b></h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="splide__slide center">
                                                <a href="#">
                                                    <img class="responsive-img" src="img/categorias/vestido.jpg" alt="blusa amaflora">
                                                    <div class="descript-product">
                                                        <p>Vestido Lrg Blanco</p>
                                                        <h6><b>$165.000</b></h6>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
    <script src="js/splide.min.js"></script>
    <script src="js/galeria-detalle.js"></script>
@endsection
