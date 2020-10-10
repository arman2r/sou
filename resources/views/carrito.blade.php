@extends('layouts.layout')

@section('title', 'Boutique de ropa')

@section('estilos')
    @parent

    <link rel="stylesheet" href="https://unpkg.com/materialize-stepper@3.1.0/dist/css/mstepper.min.css">
    <link rel="stylesheet" href="css/carrito.css">
@endsection

@section('content')
<div class="container">
    <div class="row bread">
        <div class="col s12 m12 l12 xl10 offset-xl1">
            <nav class="white no-shadow">
                <div class="nav-wrapper">
                    <div class="col s12">
                        <a href="#!" class="breadcrumb grey-text text-darken-1">Inicio</a>
                        <a href="#!" class="breadcrumb grey-text text-darken-1">Tienda virtual</a>
                        <a href="#!" class="breadcrumb grey-text text-darken-1">Bolsa</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 xl10 offset-xl1">
            <ul class="stepper horizontal linear">
                <li class="step active">
                    <div class="step-title waves-effect">Compras</div>
                    <div class="step-content">
                        <table class="responsive-table grey-text text-darken-1">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#"><img style="height:80px" src="img/categorias/vestido.jpg" alt="vestido toda vida blanco"></a>
                                    </td>
                                    <td><a class="grey-text text-darken-1">Vestido Todavida Color Blanco</a></td>
                                    <td>
                                        <p><b>Precio</b></p>
                                        <b>$120.000</b>
                                    </td>
                                    <td>
                                        <p><b>Cantidad</b></p>
                                        <select class="browser-default">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </td>
                                    <td><p><b>Subtotal</b></p><b>$240.000</b></td>
                                    <td><p><a href="#" class="btn-floating btn-flat center" style="line-height:55px"><span class="grey-text text-darken-1 material-icons">cancel_presentation</span></a></p></td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#"><img style="height:80px" src="img/categorias/vestido.jpg" alt="vestido toda vida blanco"></a>
                                    </td>
                                    <td><a class="grey-text text-darken-1">Vestido Todavida Color Blanco</a></td>
                                    <td>
                                        <p><b>Precio</b></p>
                                        <b>$120.000</b>
                                    </td>
                                    <td>
                                        <p><b>Cantidad</b></p>
                                        <select class="browser-default">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </td>
                                    <td><p><b>Subtotal</b></p><b>$240.000</b></td>
                                    <td><p><a href="#" class="btn-floating btn-flat center" style="line-height:55px"><span class="grey-text text-darken-1 material-icons">cancel_presentation</span></a></p></td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#"><img style="height:80px" src="img/categorias/vestido.jpg" alt="vestido toda vida blanco"></a>
                                    </td>
                                    <td><a class="grey-text text-darken-1">Vestido Todavida Color Blanco</a></td>
                                    <td>
                                        <p><b>Precio</b></p>
                                        <b>$120.000</b>
                                    </td>
                                    <td>
                                        <p><b>Cantidad</b></p>
                                        <select class="browser-default">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </td>
                                    <td><p><b>Subtotal</b></p><b>$240.000</b></td>
                                    <td><p><a href="#" class="btn-floating btn-flat center" style="line-height:55px"><span class="grey-text text-darken-1 material-icons">cancel_presentation</span></a></p></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Your step content goes here (like inputs or so) -->
                        <div class="step-actions white">
                            <!-- Here goes your actions buttons -->
                            <button class="waves-effect waves-dark btn no-shadow next-step">Finalizar Compra</button>
                            <button class="waves-effect waves-dark btn next-step btn-border btn-flat grey-text text-darken-1" style="margin-right: -5px">$305.000 <span>Subtotal</span></button>
                        </div>
                    </div>
                </li>
                <li class="step">
                    <div class="step-title waves-effect">Cuenta</div>
                    <div class="step-content">
                        <!-- Your step content goes here (like inputs or so) -->
                        <div class="step-actions">
                            <!-- Here goes your actions buttons -->
                            <button class="waves-effect waves-dark btn next-step">Compras</button>
                        </div>
                    </div>
                </li>
                <li class="step">
                    <div class="step-title waves-effect">Envío</div>
                    <div class="step-content">
                        <!-- Your step content goes here (like inputs or so) -->
                        <div class="step-actions">
                            <!-- Here goes your actions buttons -->
                            <button class="waves-effect waves-dark btn next-step">Envío</button>
                        </div>
                    </div>
                </li>
                <li class="step">
                    <div class="step-title waves-effect">Confirmación</div>
                    <div class="step-content">

                        <!-- Your step content goes here (like inputs or so) -->
                        <div class="step-actions">
                            <!-- Here goes your actions buttons -->
                            <button class="waves-effect waves-dark btn next-step">Confirmación</button>
                        </div>
                    </div>
                </li>
                <li class="step">
                    <div class="step-title waves-effect">Pagos</div>
                    <div class="step-content">

                        <!-- Your step content goes here (like inputs or so) -->
                        <div class="step-actions">
                            <!-- Here goes your actions buttons -->
                            <button class="waves-effect waves-dark btn next-step">Pagos</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <br/>
    <br/>

</div>
@endsection

@section('scripts')
    @parent

    <script src="https://unpkg.com/materialize-stepper@3.1.0/dist/js/mstepper.min.js"></script>
    <script src="js/carrito.js"></script>
@endsection
