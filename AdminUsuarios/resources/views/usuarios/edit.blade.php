<!-- resources/views/usuarios/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Editar Usuario</h2>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $usuario->nombre }}" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" value="{{ $usuario->apellido }}" required>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" name="correo" value="{{ $usuario->correo }}" required>

        <!-- Agrega más campos según sea necesario -->

        <button type="submit">Guardar Cambios</button>
    </form>
@endsection
