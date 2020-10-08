@extends('layouts.layout')

@section('title', 'Boutique de ropa')

@section('estilos')
    @parent

    <link rel="stylesheet" href="css/banner-home.css">
    <link rel="stylesheet" href="css/galeria.css">
@endsection

@section('content')
    <div id="bannerHome" class="carousel carousel-slider center">
        <!--
        <div class="carousel-fixed-item center">
            <a class="btn waves-effect white grey-text darken-text-2">button</a>
        </div>
        -->
        <div class="carousel-item valign-wrapper red white-text" style="background-image: url(img/banner-home/banner-1.jpg);" href="#one!">
            <div class="container left-align">
                <h1>Segura<br/> de sí misma</h1>
                <h2 class="accent-text">prepárate para nuestra<br/> nueva colección</h2>
                <a href="#" class="btn">Ver producto</a>
            </div>
        </div>
        <div class="carousel-item valign-wrapper amber white-text" style="background-image: url(img/banner-home/banner-1.jpg);" href="#two!">
            <div class="container">
                <h3>Second Panel</h3>
                <h6 class="white-text">This is your second panel</h6>
                <a href="#" class="btn">Ver producto</a>
            </div>
        </div>
        <div class="carousel-item valign-wrapper green white-text" style="background-image: url(img/banner-home/banner-1.jpg);" href="#three!">
            <div class="container">
                <h3>Third Panel</h3>
                <h6 class="white-text">This is your third panel</h6>
                <a href="#" class="btn">Ver producto</a>
            </div>
        </div>
        <div class="carousel-item valign-wrapper blue white-text" style="background-image: url(img/banner-home/banner-1.jpg);" href="#four!">
            <div class="container">
                <h3>Fourth Panel</h3>
                <h6 class="white-text">This is your fourth panel</h6>
                <a href="#" class="btn">Ver producto</a>
            </div>
        </div>
    </div>

    <div class="container">
        <br><br>
        <div class="row">
            <div class="grid">
                <div class="grid__gutter-sizer"></div>
                <div class="grid-item grid-item--width2 grid-item--height2" style="background-image: url(./img/galeria/1-galeria.jpg);background-size: cover;">
                    <div class="content-category col s12">
                        <a href="{{ url('catalogo') }}" class="left">
                            <h6>Vestidos</h6>
                        </a>
                        <a href="#" class="btn-floating waves-effect right center btn-flat favorite"><img src="img/healt-white.png" alt="favoritos"></a>
                    </div>
                </div>
                <div class="grid-item grid-item--width1 grid-item--height1" style="background-image: url(./img/galeria/2-galeria.jpg);background-size: cover;">
                    <div class="content-category col s12">
                        <a href="{{ url('catalogo') }}" class="left">
                            <h6>Camisetas</h6>
                        </a>
                        <a href="#" class="btn-floating waves-effect right center btn-flat favorite"><img src="img/healt-white.png" alt="favoritos"></a>
                    </div>
                </div>
                <div class="grid-item grid-item--width3 grid-item--height2" style="background-image: url(./img/galeria/4-galeria.jpg);background-size: cover;">
                    <div class="content-category col s12">
                        <a href="{{ url('catalogo') }}" class="left">
                            <h6>Pantalones</h6>
                        </a>
                        <a href="#" class="btn-floating waves-effect right center btn-flat favorite"><img src="img/healt-white.png" alt="favoritos"></a>
                    </div>
                </div>
                <div class="grid-item grid-item--width1 grid-item--height1" style="background-image: url(./img/galeria/3-galeria.jpg);background-size: cover;">
                    <div class="content-category col s12">
                        <a href="{{ url('catalogo') }}" class="left">
                            <h6>Blusas</h6>
                        </a>
                        <a href="#" class="btn-floating waves-effect right center btn-flat favorite"><img src="img/healt-white.png" alt="favoritos"></a>
                    </div>
                </div>
                <div class="grid-item grid-item--width5 grid-item--height2" style="background-image: url(./img/galeria/5-galeria.jpg);background-size: cover;">
                    <div class="content-category col s12">
                        <a href="{{ url('catalogo') }}" class="left">
                            <h6>Faldas</h6>
                        </a>
                        <a href="#" class="btn-floating waves-effect right center btn-flat favorite"><img src="img/healt-white.png" alt="favoritos"></a>
                    </div>
                </div>
                <div class="grid-item grid-item--width4 grid-item--height2" style="background-image: url(./img/galeria/6-galeria.jpg);background-size: cover;">
                    <div class="content-category col s12">
                        <a href="{{ url('catalogo') }}" class="left">
                            <h6>Playeras</h6>
                        </a>
                        <a href="#" class="btn-floating waves-effect right center btn-flat favorite"><img src="img/healt-white.png" alt="favoritos"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="bannerInferior" class="carousel carousel-slider center inf-carrusel">
            <!--
            <div class="carousel-fixed-item center">
                <a class="btn waves-effect white grey-text darken-text-2">button</a>
            </div>
            -->
            <div class="carousel-item valign-wrapper red white-text" style="background-image: url(img/banner-inferior/banner-1.png);" href="#one!"></div>
            <div class="carousel-item valign-wrapper amber white-text" style="background-image: url(img/banner-inferior/banner-1.png);" href="#two!"></div>
            <div class="carousel-item valign-wrapper amber white-text" style="background-image: url(img/banner-inferior/banner-1.png);" href="#two!"></div>
        </div>
    </div>
    <br><br>
    <div class="row grey lighten-5">
        <br>
        <div class="container">
            <div class="col s12 m12 l10 offset-l1">
                <h6 class="center-align" style="padding-bottom: 10px"><b>SUSCRÍBETE</b></h6>
                <b>Suscríbete a nuestro newsletter y recibe un 10% o en tu próxima compra. Haz parte de nuestra familia SOU
                y entérate de las ofertas exclusivas que tenemos para ti! </b>
                <form class="row suscribe">
                    <div class="input-field browser-default col s12 m4">
                        <input placeholder="NOMBRE: ¿Cómo prefieres que te llamen?" id="first_name" type="text" class="validate">
                    </div>
                    <div class="input-field browser-default inline col s12 m4">
                        <input placeholder="CORREO ELECTRÓNICO" id="email_inline" type="email" class="validate">
                    </div>
                    <button type="submit" class="col s12 m4 btn no-shadow waves-effect">Suscribirse</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row" style="padding-top: 5px">
        <div class="container">
            <div class="col s12 m12 l8 offset-l2 center social-feed">
                <b style="font-size: 1.7rem;margin:-10px 10px;display:inline-block;vertical-align:top;font-weight: 600;">SÍGUENOS EN:</b>
                <a href="#" style="display:inline-block;vertical-align:top;margin:-4px 5px"><img style="height: 25px;" src="img/facebook.png" alt="facebook - sou"></a>
                <a href="#" style="display:inline-block;vertical-align:top;margin:-4px 5px"><img style="height: 25px;" src="img/instagram.png" alt="instagram - sou"></a>
                <b style="font-size: 1.7rem;margin:-10px 10px;display:inline-block;vertical-align:top;font-weight: 600;">@SOUCOLOMBIA</b>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    <script type="text/javascript" src="js/utils-home.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="js/galeria.js"></script>
@endsection
