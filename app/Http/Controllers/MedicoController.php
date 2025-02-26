<?php

/**
 * Adaptación del proyecto T-Cuida a Laravel
 * Autora: Ruyi Xia Ye - 2ºDAW
 */

namespace App\Http\Controllers;

use \App\Models\Medico;

use Illuminate\Http\Request;

class MedicoController extends Controller
{
    
    /**
     * Recupera los médicos de la base de datos
     *
     * @param Request $request
     * @return void
     */
    public function listarMedicos(Request $request) {
        $medicos = Medico::all();
        return view("medico.listar", ["medicos" => $medicos]);
    }
    

}
