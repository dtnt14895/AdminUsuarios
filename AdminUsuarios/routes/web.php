<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/use App\Http\Controllers\UsuariosController;

// Ruta para mostrar el listado de usuarios
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');

// Ruta para mostrar el formulario de creación de usuario
Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create');

// Ruta para almacenar un nuevo usuario en la base de datos
Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');

// Ruta para mostrar los detalles de un usuario específico
Route::get('/usuarios/{usuario}', [UsuariosController::class, 'show'])->name('usuarios.show');

// Ruta para mostrar el formulario de edición de un usuario
Route::get('/usuarios/{usuario}/edit', [UsuariosController::class, 'edit'])->name('usuarios.edit');

// Ruta para actualizar un usuario en la base de datos
Route::put('/usuarios/{usuario}', [UsuariosController::class, 'update'])->name('usuarios.update');

// Ruta para eliminar un usuario
Route::delete('/usuarios/{usuario}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');


Route::get('/', function () {
    return view('welcome');
});
