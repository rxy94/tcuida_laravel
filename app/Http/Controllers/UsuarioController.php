<?php

/**
 * Adaptación del proyecto T-Cuida a Laravel
 * Autora: Ruyi Xia Ye - 2ºDAW
 */

namespace App\Http\Controllers;

use \App\Models\Usuario;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    
    /**
     * Recupera los usuarios de la bbdd
     *
     * @param Request $request
     * @return void
     */
    public function listarUsuarios(Request $request)
    {
        $usuarios = Usuario::all();
        return view("usuario.listar", ["usuarios" => $usuarios]);

    }

    /**
     * Borra un usuario de la bbdd
     *
     * @param Request $request
     * @param Usuario $usuario
     * @return void
     */
    public function borrarUsuario(Request $request, Usuario $usuario)
    {
        $usuario->delete();
        return to_route("usuario.listar");
    
    }

    /**
     * Crea un nuevo usuario
     *
     * @param Request $request
     * @param Usuario $usuario
     * @return void
     */
    public function crearUsuario(Request $request)
    {
        if ($request->isMethod("GET")) {
            return view("usuario.crear");
        }

        $request->validate([
            "nombre" => "required|string|max:100",
            "apellidos" => "required|string|max:100",
            "email" => "required|unique:usuario,email",
            "clave" => "required|min:5|max:15",

        ]);

        Usuario::create([
            "nomUsu" => $request->input("nombre"),
            "apeUsu" => $request->input("apellidos"),
            "email" => $request->input("email"),
            "admin" => $request->input("admin"),
            "password" => Hash::make($request->input("clave")),

        ]);

        return to_route("usuario.listar");
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param Usuario $usuario
     * @return void
     */
    public function editarUsuario(Request $request, Usuario $usuario)
    {
        if ($request->isMethod("GET")) {
            return view("usuario.editar", ["usuario" => $usuario]);
        }

        $request->validate([
            "nombre" => "required|string|max:100",
            "apellidos" => "required|string|max:100",
            "email" => [
                "required",
                "email",
                Rule::unique("usuario", "email")->ignore($usuario->idUsu, "idUsu"),
            ],
            "clave" => "nullable|min:5|max:15",

        ]);

        $usuario->update([
            "nomUsu" => $request->input("nombre"),
            "apeUsu" => $request->input("apellidos"),
            "email" => $request->input("email"),
            "admin" => $request->input("admin"),
            "password" => $request->filled("clave") ? Hash::make($request->input("clave")): $usuario->password,

        ]);

        return to_route("usuario.listar");
    }

}
