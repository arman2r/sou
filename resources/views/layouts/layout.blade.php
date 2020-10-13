<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>SOU - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @section('estilos')
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->

        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/colors.css">
    @show

    <!--Let browser know website is optimized for mobile-->

</head>

<body>
    @section('sidebar')
        <div id="header">
            <nav class="nav-extended nav-all-content white no-shadow">
                <div class="nav-wrapper container">
                    <a href="{{ url('/') }}" class="brand-logo center">
                        <img src="img/logo.png" alt="sou - logo">
                    </a>
                    <ul class="left">
                        <li>
                            <a onclick="openMenu()" class="btn-floating menu-btn waves-effect btn-flat dark-text"></a>
                        </li>
                        <li class="shared-btn hide-on-large-only">
                            <div class="fixed-action-btn" style="position: relative;display: inline-block;right: 24px;">
                                <a class="btn-floating btn-flat waves-effect share-btn">
                                    <i class="large material-icons dark-text">share</i>
                                </a>
                                <ul>
                                    <li>
                                        <a class="btn-floating sub-btn light waves-effect"><img src="img/facebook.png" alt="facebook - sou"></a>
                                    </li>
                                    <li>
                                        <a class="btn-floating sub-btn light waves-effect"><img src="img/instagram.png" alt="instagram - sou"></a>
                                    </li>
                                    <li>
                                        <a class="btn-floating sub-btn light waves-effect"><img src="img/whatsapp.png" alt="whatsapp - sou"></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="hide-on-med-and-down">
                            <a class="btn-floating mini-btn waves-effect btn-flat" href="sass.html"><img src="img/facebook.png" alt="facebook"></a>
                        </li>
                        <li class="hide-on-med-and-down">
                            <a class="btn-floating mini-btn waves-effect btn-flat" href="badges.html"><img src="img/instagram.png" alt="instagram"></a>
                        </li>
                        <li class="hide-on-med-and-down">
                            <a class="btn-floating mini-btn waves-effect btn-flat" href="collapsible.html"><img src="img/whatsapp.png" alt="whatsapp"></a>
                        </li>
                    </ul>
                    <ul class="right second-icons">
                        <li class="buscador-item">
                            <div class="row" style="margin-bottom: 0;">
                                <div id="scale-demo" class="input-field col scale-transition scale-out">
                                    <i class="material-icons dark-text prefix hide-on-large-only" onclick="openSearch()">arrow_back_ios</i>
                                    <a href="#" class="prefix search-prefix waves-effect btn-floating btn-flat light"><i class="material-icons dark-text">search</i></a>
                                    <input autofocus id="buscador" type="text" class="validate">
                                    <label for="buscador">Buscador...</label>
                                </div>
                                <a class="btn-floating mini-btn btn-flat waves-effect search-btn-trger" onclick="openSearch()" id="scale-demo-trigger" style="line-height: 40px !important;margin-top:4px !important" href="#!"></a>
                            </div>
                        </li>
                        <li class="hide-on-med-and-down">
                            <a class="btn-floating mini-btn btn-flat dropdown-trigger" data-target="perfiledrop" href="#"><img src="img/profile.png" alt="perfil"></a>
                        </li>
                        <li class="hide-on-med-and-down">
                            <a class="btn-floating mini-btn btn-flat" href="collapsible.html"><img src="img/health.png" alt="favoritos"></a>
                        </li>
                        <li>
                            <span class="quantity">5</span>
                            <a class="btn-floating mini-btn btn-flat dropdown-cart" href='#' data-target='itemsCart'><img src="img/carrito.png" alt="carrito de compras"></a>
                        </li>
                    </ul>
                </div>
                <!-- Dropdown Structure -->
                <ul id='perfiledrop' class="dropdown-content">
                    <li>
                        <a href="{{ url('perfil') }}">Mi perfil</a>
                    </li>
                    <li>
                        <a href="{{ url('ingresar') }}">Ingresar</a>
                    </li>
                    <li>
                        <a href="#">Cerrar sesión</a>
                    </li>
                </ul>
                <ul id='itemsCart' class='dropdown-content drop-cart'>
                    <li>
                        <ul class="collection">
                            <li class="collection-item avatar">
                                <img src="img/categorias/camisa-rayas-salmon.jpg" alt="producto 1" class="circle">
                                <span class="title">Camisa Rayas Color Salmón a rayas blancas</span>
                                <p>$ 160.000 x 2</p>
                                <a href="{{ url('carrito') }}" class="secondary-content btn-floating btn-flat"><i class="material-icons grey-text text-darken-2">send</i></a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider" tabindex="-1"></li>
                    <li>
                        <ul class="collection">
                            <li class="collection-item avatar">
                                <img src="img/categorias/camisa-rayas-salmon.jpg" alt="producto 1" class="circle">
                                <span class="title">Camisa Rayas Color Salmón a rayas blancas</span>
                                <p>$ 160.000 x 2</p>
                                <a href="{{ url('carrito') }}" class="secondary-content btn-floating btn-flat"><i class="material-icons grey-text text-darken-2">send</i></a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider" tabindex="-1"></li>
                    <li>
                        <ul class="collection">
                            <li class="collection-item avatar">
                                <img src="img/categorias/camisa-rayas-salmon.jpg" alt="producto 1" class="circle">
                                <span class="title">Camisa Rayas Color Salmón a rayas blancas</span>
                                <p>$ 160.000 x 2</p>
                                <a href="{{ url('carrito') }}" class="secondary-content btn-floating btn-flat"><i class="material-icons grey-text text-darken-2">send</i></a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider" tabindex="-1"></li>
                    <li>
                        <ul class="collection">
                            <li class="collection-item avatar">
                                <img src="img/categorias/camisa-rayas-salmon.jpg" alt="producto 1" class="circle">
                                <span class="title">Camisa Rayas Color Salmón</span>
                                <p>$ 160.000 x 2</p>
                                <a href="{{ url('carrito') }}" class="secondary-content btn-floating btn-flat"><i class="material-icons grey-text text-darken-2">send</i></a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider" tabindex="-1"></li>
                    <li>
                        <ul class="collection">
                            <li class="collection-item avatar">
                                <img src="img/categorias/camisa-rayas-salmon.jpg" alt="producto 1" class="circle">
                                <span class="title">Camisa Rayas Color Salmón</span>
                                <p>$ 160.000 x 2</p>
                                <a href="{{ url('carrito') }}" class="secondary-content btn-floating btn-flat"><i class="material-icons grey-text text-darken-2">send</i></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div id="menu" class="nav-content container center-align nav-menu-mobile valign-wrapper">
                    <ul class="tabs tabs-transparent center-align ">
                        <li style="display: inline-block;float:none" class="tab">
                            <a onmouseover="openSubMenu()" class="light" href='#'>NUEVO</a>
                            <ul class="submenu">
                                <li class="all-products-btn"><a href="#"><b>Ver todo</b></a></li>
                                <div class="blocks">
                                    <li><a class="waves-effect" href="#">Básicas</a></li>
                                    <li><a class="waves-effect" href="#">Camisas y blusas</a></li>
                                    <li><a class="waves-effect" href="#">Camisetas</a></li>
                                    <li><a class="waves-effect" href="#">Chaquetas y sacos</a></li>
                                </div>
                                <div class="blocks">
                                    <li><a class="waves-effect" href="#">Faldas</a></li>
                                    <li><a class="waves-effect" href="#">Pantalones</a></li>
                                    <li><a class="waves-effect" href="#">Shorts</a></li>
                                    <li><a class="waves-effect" href="#">Vestidos</a></li>
                                </div>
                            </ul>
                        </li>
                        <li style="display: inline-block;float:none" class="tab">
                            <a onmouseover="openSubMenu()" class="light">ROPA</a>
                            <ul class="submenu">
                                <li class="all-products-btn"><a href="#"><b>Ver todo</b></a></li>
                                <div class="blocks">
                                    <li><a class="waves-effect" href="#">Básicas</a></li>
                                    <li><a class="waves-effect" href="#">Camisas y blusas</a></li>
                                    <li><a class="waves-effect" href="#">Camisetas</a></li>
                                    <li><a class="waves-effect" href="#">Chaquetas y sacos</a></li>
                                </div>
                                <div class="blocks">
                                    <li><a class="waves-effect" href="#">Faldas</a></li>
                                    <li><a class="waves-effect" href="#">Pantalones</a></li>
                                    <li><a class="waves-effect" href="#">Shorts</a></li>
                                    <li><a class="waves-effect" href="#">Vestidos</a></li>
                                </div>
                            </ul>
                        </li>
                        <li style="display: inline-block;float:none" class="tab"><a class="light" href='#'>DENIM</a></li>
                        <li style="display: inline-block;float:none" class="tab"><a class="light" href='#'>BÁSICOS</a></li>
                        <li style="display: inline-block;float:none" class="tab"><a class="light" href="#">SALE</a></li>
                        <li style="display: inline-block;float:none" class="tab"><a class="light" href="#">SOU LOVERS</a></li>
                        <li style="display: inline-block;float:none" class="tab"><a class="light" href="#">NOSOTROS</a></li>
                    </ul>
                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content drop-back no-shadow' style="overflow: visible !important">
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li><a href="#!">three</a></li>
                        <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                        <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                    </ul>
                    <ul id='dropdown2' class='dropdown-content drop-back no-shadow' style="overflow: visible !important">
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li><a href="#!">three</a></li>
                        <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                        <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                    </ul>
                    <ul id='dropdown3' class='dropdown-content drop-back no-shadow' style="overflow: visible !important">
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li><a href="#!">three</a></li>
                        <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                        <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                    </ul>
                    <ul id='dropdown4' class='dropdown-content drop-back no-shadow' style="overflow: visible !important">
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li><a href="#!">three</a></li>
                        <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                        <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                    </ul>
                    <div id="backdrop" class="backdrop-dropdown"></div>
                </div>
            </nav>
        </div>
    @show

    @yield('content')

    @section('footer')
        <footer class="page-footer grey lighten-5 black-text">
            <div class="container">
                <div class="row">
                    <div class="col l4 s12">
                        <h6 class="col s12">ATENCIÓN AL CLIENTE</h6>
                        <br><br/>
                        <ul>
                            <li class="col s6">Lunes-Viernes: </li>
                            <li class="col s6">7:30 am-1:00pm</li>
                            <li class="col s6">Sábados: </li>
                            <li class="col s6">8:00 am-1:00pm</li>
                        </ul>
                        <br/>
                        <br/>
                        <ul>
                            <li class="col s12 m6">Linea de servicio: </li>
                            <li class="col s12 m6">+57 320 577 4153</li>
                            <li class="col s12 m6">WhatsApp: </li>
                            <li class="col s12 m6">+57 310 484 5670</li>
                        </ul>

                        <div class="col s12">

                            <p>Carrera 48 SUR # 85 - 85 Avenida Mirolindo Ibagué, Colombia.</p>

                            <a class="black-text" href="mailto:contactanos@sou.com.co">contactanos@sou.com.co</a>
                        </div>


                    </div>
                    <div class="col l4 s12">
                        <h6 class="center">MAPA DEL SITIO</h6>
                        <ul>
                            <li class="col s6 m6 l5 offset-l1"><a class="btn truncate black-text left-align truncate btn-flat" href="#!">Nuevo</a></li>
                            <li class="col s6 m6 l5 offset-l1"><a class="btn truncate black-text left-align truncate btn-flat" href="#!">Nosotros</a></li>
                            <li class="col s6 m6 l5 offset-l1"><a class="btn truncate black-text left-align truncate btn-flat" href="#!">Ropa</a></li>
                            <li class="col s6 m6 l5 offset-l1"><a class="btn truncate black-text left-align truncate btn-flat" href="#!">Contacto</a></li>
                            <li class="col s6 m6 l5 offset-l1"><a class="btn truncate black-text left-align truncate btn-flat" href="#!">Denim</a></li>
                            <li class="col s6 m6 l5 offset-l1"><a class="btn truncate black-text left-align truncate btn-flat" href="#!">SOU Lovers</a></li>
                            <li class="col s6 m6 l5 offset-l1"><a class="btn truncate black-text left-align truncate btn-flat" href="#!">Básicos</a></li>
                            <li class="col s6 m6 l5 offset-l1"><a class="btn truncate black-text left-align truncate btn-flat" href="#!">Novedades</a></li>
                            <li class="col s6 m6 l5 offset-l1"><a class="btn truncate black-text left-align truncate btn-flat" href="#!">Sale</a></li>
                            <li class="col s6 m6 l5 offset-l1"><a class="btn truncate black-text left-align truncate btn-flat" style="height: 40px;line-height: 20px;text-align: left !important;" href="#!">Preguntas <br/>Frecuentes</a></li>
                        </ul>
                    </div>
                    <div class="col l4 s12">
                        <h6 class="center">POLÍTICAS</h6>
                        <ul>
                            <li class="col s12 offset-l1"><a class="btn black-text left-align truncate btn-flat" href="#!">Términos y condiciones</a></li>
                            <li class="col s12 offset-l1"><a class="btn black-text left-align truncate btn-flat" href="#!">Garantía</a></li>
                            <li class="col s12 offset-l1"><a class="btn black-text left-align truncate btn-flat" href="#!">Cambios y devoluciones</a></li>
                            <li class="col s12 offset-l1"><a class="btn black-text left-align truncate btn-flat" href="#!">Protección de datos</a></li>
                        </ul>
                    </div>
                    <div class="col s12 center" style="padding:20px 0">
                        <img class="responsive-img" src="img/medios-de-pago.png" alt="medios de pago">
                    </div>
                    <div class="col s12 center">
                        <br>
                        <h6>© 2020 TODOS LOS DERECHOS RESERVADOS | SUPERINTENDENCIA DE INDUSTRIA Y COMERCIO </h6>
                        <a href="#" class="black-text">Diseñado por: UNIO</a>
                    </div>
                </div>
            </div>
        </footer>
    @show
    @section('scripts')
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/header.js"></script>
    @show
</body>

</html>
