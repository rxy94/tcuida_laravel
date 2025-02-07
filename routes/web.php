<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get("/usuarios", [ UsuarioController::class, "listarUsuarios"])->name("usuario.listar");
Route::get("usuarios/borrar/{usuario}", [ UsuarioController::class, "borrarUsuario"])->name("usuario.borrar");
Route::match(["get", "post"], "usuarios/crear", [ UsuarioController::class, "crearUsuario"])->name("usuario.crear");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
