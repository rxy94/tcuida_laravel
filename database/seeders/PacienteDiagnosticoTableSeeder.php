<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PacienteDiagnosticoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table("paciente_diagnostico")->insert([
    
            ["idPac" => 1, "idDiag" => 2],
            ["idPac" => 1, "idDiag" => 4],
            ["idPac" => 2, "idDiag" => 5],
            ["idPac" => 3, "idDiag" => 6],
            ["idPac" => 4, "idDiag" => 7],
            ["idPac" => 5, "idDiag" => 8],
            ["idPac" => 6, "idDiag" => 9],
            ["idPac" => 7, "idDiag" => 10],
            ["idPac" => 8, "idDiag" => 11],
            ["idPac" => 9, "idDiag" => 12],

        ]);

    }
}
