<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;

# Ruta para el login
Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/', [AuthenticatedSessionController::class, 'store']);

# Ruta para el logout
Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');

# Ruta para el home
Route::view('/home', 'home')->middleware('auth')->name('home');

# Rutas para Usuario
Route::middleware('auth')->group(function() {

    Route::get('/usuarios', [ UsuarioController::class, 'listarUsuarios'])
              ->name('usuario.listar');
    Route::post('usuarios/borrar/{usuario}', [ UsuarioController::class, 'borrarUsuario'])
              ->name('usuario.borrar');
    Route::match(['get', 'post'], 'usuarios/crear', [ UsuarioController::class, 'crearUsuario'])
              ->name('usuario.crear');
    Route::match(['get', 'post'], 'usuarios/editar/{usuario}', 
                 [ UsuarioController::class, 'editarUsuario'])
                 ->name('usuario.editar');

});


/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
