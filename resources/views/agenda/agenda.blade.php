<?php
    $arreglo= array("Ramírez Gomero Francisco Jesús", "francisco.ramirez@tecsup.edu.pe","987535717");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            height: 950px;
            background-color: #cccccc;
            background-image: linear-gradient(black,white);
        }
    </style>
    <title>Agenda Personalizada</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
        <a class="navbar-brand" href="index.php">Agenda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register">Registrar</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Deslizar
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Acción</a>
                <a class="dropdown-item" href="#">Otra Acción</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Destruir</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Deshabilitado</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <div align="center">
        <p style="color: red"><h1 style="color:white">Desarrollo de Soluciones en la Nube</h1></p>
    </div>
    <div class="container">
        <a href="register.create" class="btn btn-primary">Crear Nuevo Contacto</a>
        <a href="/login" class="btn btn-success">Login</a>
    </div>
    <div class="container">
        <table class="table table-dark">
            <tr>
                <td>Apellidos y nombres</td>
                <td>Correo</td>
                <td>Teléfono</td>
            </tr>
            @forelse ($registro as $registroItem)
            <tr>
                <td>{{ $registroItem->name }}</td>
                <td>{{ $registroItem->email }}</td>
                <td>{{ $registroItem->telefono }}</td>
                <td><button class="btn btn-warning">Editar</button></td>
                <td><button class="btn btn-danger">Eliminar</button></td>
                @empty
                <td>Vacío</td>
                <td>Vacío</td>
                <td>Vacío</td>
                <td>Vacío</td>
                <td>Vacío</td>
            </tr>
            @endforelse
        </table>
        <ul>
        </ul>
    </div>
</body>
</html>