<?php

/**
 * Adaptación del proyecto T-Cuida a Laravel
 * Autora: Ruyi Xia Ye - 2ºDAW
 */

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Diagnostico;

class DiagnosticoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $diagnosticos = [
            "Hypertension",
            "Diabetes",
            "Asthma",
            "Back Pain",
            "Depression",
            "Anxiety",
            "Arthritis",
            "Cancer",
            "Obesity",
            "Celiac Disease",
            "Epilepsy",
            "Gout",
        ];

        foreach($diagnosticos as $item) {
            Diagnostico::create([ "nomDiag" => $item ]);
        }

    }
    
}
