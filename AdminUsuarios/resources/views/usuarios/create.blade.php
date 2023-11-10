<!-- resources/views/usuarios/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Crear Nuevo Usuario</h2>

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" name="correo" required>

        <!-- Agrega más campos según sea necesario -->

        <button type="submit">Guardar</button>
    </form>
@endsection
