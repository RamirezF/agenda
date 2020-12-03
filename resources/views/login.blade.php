@extends('layout')
@section('content')
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        .carrito{
        position: absolute;
        top: 50%;
        left: 50%;
        height: 80%;
        width: 50%;
        margin: -15% 0 0 -25%;
        color: white;
        }
        </style>
    </head>
    <body>
        <div align="center" class="carrito">
            <form mothod="POST">
                <div class="card-body bg-danger">
                    <div class="card-title">Login</div>
                    <table>
                        <tr><td><input type="email" placeholder="Ingrese su correo"></td></tr>
                        <tr><td><input type="password" placeholder="Ingrese su contraseña"></td></tr>
                        <tr>
                            <td><button class="btn btn-primary">Ingresar</button>
                            <a href="/" class="btn btn-success">Cancelar</a></td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </body>
@endsection