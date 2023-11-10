<!-- resources/views/usuarios/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Detalles del Usuario</h2>

    <p><strong>ID:</strong> {{ $usuario->id }}</p>
    <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
    <p><strong>Apellido:</strong> {{ $usuario->apellido }}</p>
    <p><strong>Correo Electrónico:</strong> {{ $usuario->correo }}</p>
    <p><strong>Fecha de Registro:</strong> {{ $usuario->fecha_registro }}</p>

    <!-- Agrega más detalles según sea necesario -->

    <a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
    <!-- Agrega el formulario para eliminar si lo deseas -->
@endsection
