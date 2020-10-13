@extends('layouts.layout')

@section('title', 'Mi Perfil')

@section('estilos')
    @parent

    <link rel="stylesheet" href="css/perfil.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l8 offset-l2">
                <div class="row">

                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s3"><a class="active" href="#Miperfil">Mi perfil</a></li>
                            <li class="tab col s3"><a href="#direcciones">Mis direcciones</a></li>
                            <li class="tab col s3 disabled"><a href="#misCompras">Mis compras</a></li>
                        </ul>
                    </div>

                    <div id="Miperfil" class="col s12 center">
                    <br><br>
                        <a href="#" class="btn btn-floating btn-large profile grey lighten-1">
                            <span class="material-icons">person</span>
                        </a>
                        <form action="" class="col s12">
                            <div class="input-field col s12 m6">
                                <label for="nombres">Nombres</label>
                                <input id="nombres" type="text" value="Joahanna alexandra">
                            </div>
                            <div class="input-field col s12 m6">
                                <label for="apellidos">Apellidos</label>
                                <input id="apellidos" type="text" value="Doe lopez">
                            </div>
                            <div class="input-field col s12 m6">
                                <label for="correo">Correo</label>
                                <input id="correo" type="text" value="joahanna@gmail.com">
                            </div>
                            <div class="input-field col s12 m6">
                                <label for="telefono">Teléfono</label>
                                <input id="telefono" type="text" value="322 3458711">
                            </div>
                            <div class="input-field col s12 m6">
                                <label for="telefono">Nro de Identificación o NIT</label>
                                <input id="telefono" type="text" value="1110234212">
                            </div>
                            <div class="col s12 m6 left-align">
                                <label>Ciudad</label>
                                <select class="browser-default">
                                    <option value="1">Ibagué</option>
                                    <option value="2">Bogotá</option>
                                    <option value="3">Medellín</option>
                                    <option value="3">Calí</option>
                                </select>
                            </div>
                            <div class="col s12">
                                <button class="waves-effect waves-light btn"><span class="material-icons left">edit</span> Editar información</button>
                            </div>
                        </form>
                    </div>
                    <div id="direcciones" class="col s12 center">
                    <br><br>
                        <a href="#" class="btn btn-floating btn-large profile grey lighten-1">
                            <span class="material-icons">home</span>
                        </a>
                        <form action="" class="col s12 left-align">
                            <br>
                            <h6>Dirección:</h6>
                            <br>
                            <div class="input-field col s12 m4 left-align">
                                <select class="browser-default">
                                    <option value="1">Calle</option>
                                    <option value="2">Carrera</option>
                                    <option value="3">Manzana</option>
                                    <option value="3">Supermanzana</option>
                                    <option value="3">Transversal</option>
                                    <option value="3">Diagonal</option>
                                    <option value="3">Avenida</option>
                                </select>
                            </div>
                            <div class="input-field col s12 m8">
                                <label for="telefonofijo">Dirección</label>
                                <input id="telefonofijo" type="text" value="25b bis # 90-34, villa leones">
                            </div>
                            <div class="input-field col s12 m6 left-align">

                                <select class="browser-default">
                                    <option value="1">Tolima</option>
                                    <option value="2">Cundinamarca</option>
                                    <option value="3">Bogota</option>
                                    <option value="3">Antioquia</option>
                                </select>
                            </div>
                            <div class="input-field col s12 m6 left-align">

                                <select class="browser-default">
                                    <option value="1">Ibagué</option>
                                    <option value="2">Chía</option>
                                    <option value="3">Bogota D.C</option>
                                    <option value="3">Medellín</option>
                                </select>
                            </div>
                            <div class="input-field col s12 m6">
                                <label for="telefonofijo">Teléfono fijo</label>
                                <input id="telefonofijo" type="text" value="000 0000000">
                            </div>
                            <div class="col s12">
                                <button class="waves-effect waves-light btn"><span class="material-icons left">edit</span> Editar información</button>
                            </div>
                        </form>
                    </div>
                    <div id="misCompras">
                    <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    <script>
        var el = document.querySelectorAll('.tabs')
        var instance = M.Tabs.init(el);
    </script>
@endsection
