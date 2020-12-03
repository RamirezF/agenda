@extends('layout')
@section('content')
<br><br>
<div align="center">
        <p style="color: red"><h1 style="color:white">Desarrollo de Soluciones en la Nube</h1></p>
    </div>
    <div class="container">
        <a href="/agenda/crear" class="btn btn-primary"><i class="far fa-address-book"></i> Crear Nuevo Contacto</a>
        <a href="/login" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> Login</a>
    </div>
    <div class="container">
        <table class="table table-dark animate__animated animate__fadeIn">
            <tr>
                <td>Apellidos y nombres</td>
                <td>Correo</td>
                <td>Teléfono</td>
                <td><button class="btn btn-warning">Editar</button></td>
                <td><button class="btn btn-danger">Eliminar</button></td>
            </tr>
            <tr align="center">
                <td><i class="fas fa-address-card"></i></td>
                <td><i class="fas fa-envelope-square"></i></td>
                <td><i class="fas fa-phone"></i></td>
                <td><i class="fas fa-edit"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            @forelse ($registro as $registroItem)
            <tr>

                <td><a href="{{ route('portfolio.show', $registroItem) }}">{{ $registroItem->name }} </a></td>
                <td>{{ $registroItem->email }}</td>
                <td>{{ $registroItem->phone }}</td>
                <td><a href="{{ route('portfolio.edit', $registroItem ) }}" class="btn btn-outline-warning">Editar</a></td>
                <td>
                    <form method="POST" action="{{ route('portfolio.destroy', $registroItem) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                    </form>

                </td>
                @empty
                <td>Vacío</td>
                <td>Vacío</td>
                <td>Vacío</td>
                <td>Vacío</td>
                <td>Vacío</td>
            </tr>

            @endforelse
        </table>
    </div>
@endsection
