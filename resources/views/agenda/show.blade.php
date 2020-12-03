@extends('layout')
@section('title', 'Nombre: ' . $contacto->name)
@section('content')
<div class="container text-light">
    <h1>Contacto</h1>
    <p>Nombre y Apellidos: {{ $contacto->name }}</p>
    <p>Email: {{ $contacto->email }}</p>
    <p>Teléfono: {{ $contacto->phone }}</p>
</div>

@endsection