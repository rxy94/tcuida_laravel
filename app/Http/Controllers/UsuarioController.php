<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use \App\Models\Usuario;

class UsuarioController extends Controller
{

    public $campos = [
        [ "label" => "Nombre", "name" => "nombre", "type" => "text", "placeholder" => "Nombre" ],
        [ "label" => "Apellidos", "name" => "apellidos", "type" => "text", "placeholder" => "Apellidos" ],
        [ "label" => "Email", "name" => "email", "type" => "email", "placeholder" => "Email" ],
        [ "label" => "Contraseña", "name" => "clave", "type" => "password", "placeholder" => "Introduce tu contraseña" ],

    ];
    
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
            "nombre" => "string|required|max:100",
            "apellidos" => "string|required|max:100",
            "email" => "unique:usuario,emailUsu|required",
            "clave" => "min:5|max:15|required",

        ]);

        Usuario::create([
            "nomUsu" => $request->input("nombre"),
            "apeUsu" => $request->input("apellidos"),
            "emailUsu" => $request->input("email"),
            "claveUsu" => Hash::make($request->input("clave")),

        ]);

        return to_route("usuario.listar");
    }


    /**
     * Modifica los datos de un usuario
     *
     * @param Request $request
     * @return void
     */
    public function editarUsuario(Request $request, Usuario $usuario) {

        /* TODO */
        return to_route("usuario.listar");
    }


}
