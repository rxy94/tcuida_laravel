<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MedicoEspecialidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table("medico_especialidad")->insert([

            ["idMed" => 1, "idEsp" => 2],
            ["idMed" => 1, "idEsp" => 3],  
            ["idMed" => 9, "idEsp" => 10],
            ["idMed" => 3, "idEsp" => 8],
            ["idMed" => 4, "idEsp" => 5],
            ["idMed" => 5, "idEsp" => 6],
            ["idMed" => 6, "idEsp" => 7],
            ["idMed" => 7, "idEsp" => 14],
            ["idMed" => 7, "idEsp" => 11], 
            ["idMed" => 8, "idEsp" => 1],

        ]);
        


    }
}
