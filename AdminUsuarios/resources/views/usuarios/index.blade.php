<!-- resources/views/usuarios/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Listado de Usuarios</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo Electrónico</th>
                <th>Fecha de Registro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellido }}</td>
                    <td>{{ $usuario->correo }}</td>
                    <td>{{ $usuario->fecha_registro }}</td>
                    <td>
                        <a href="{{ route('usuarios.show', $usuario->id) }}">Ver</a>
                        <a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
                        <!-- Agrega el formulario para eliminar si lo deseas -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
