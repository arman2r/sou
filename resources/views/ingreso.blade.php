@extends('layouts.layout')

@section('title', 'Boutique de ropa')

@section('estilos')
    @parent

    <link rel="stylesheet" href="css/ingreso.css">
@endsection

@section('content')
<div class="row grey lighten-4">
    <br>
   <div class="container">
       <div class="row">
           <div class="col s12 m6 l4 offset-m3 offset-l4 ingreso">
                <ul class="collapsible no-shadow">
                    <li class="active" style="padding-bottom: 20px !important;display: flow-root">
                        <div class="collapsible-header center"><b>CREAR CUENTA</b></div>
                        <div class="collapsible-body">
                            <form class="row">
                                <div class="col s12">
                                    <div class="input-field col s12">
                                        <input id="nombres" type="text" class="validate">
                                        <label for="nombres">Nombres</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="correo" type="email" class="validate">
                                        <label for="correo">Correo Electronico</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate">
                                        <label for="password">Contraseña</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col s12 center action-btns">
                            <button class="btn waves-effect col s12">Ingresar</button>
                        </div>
                    </li>

                    <li style="padding-bottom: 20px !important;display: flow-root">
                        <div class="collapsible-header center white">¿Ya estas registrado?</div>
                        <div class="collapsible-body white">
                            <form class="row">
                                <div class="col s12">

                                    <div class="input-field col s12">
                                        <input id="correo" type="email" class="validate">
                                        <label for="correo">Correo Electronico</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate">
                                        <label for="password">Contraseña</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col s12 center action-btns white">
                            <button class="btn waves-effect col s12">Ingresar</button>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header center white">Reestablecer contraseña</div>
                        <div class="collapsible-body white">
                            <form class="row">
                                <div class="col s12">

                                    <div class="input-field col s12">
                                        <input id="correo" type="email" class="validate">
                                        <label for="correo">Correo Electronico</label>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="col s12 center action-btns white">
                            <button class="btn waves-effect col s12">Enviar</button>
                        </div>
                    </li>
                </ul>
           </div>
        </div>
   </div>
   <br>
</div>
@endsection

@section('scripts')
    @parent

    <script src="js/ingreso.js"></script>
@endsection
