<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PacienteAlergiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table("paciente_alergia")->insert([

            ["idPac" => 1, "idAlergia" => 2],
            ["idPac" => 1, "idAlergia" => 4],
            ["idPac" => 3, "idAlergia" => 5],
            ["idPac" => 4, "idAlergia" => 7],
            ["idPac" => 4, "idAlergia" => 10],
            ["idPac" => 5, "idAlergia" => 6],
            ["idPac" => 6, "idAlergia" => 8],
            ["idPac" => 7, "idAlergia" => 9],
            ["idPac" => 8, "idAlergia" => 11],  

        ]);

    }
}
