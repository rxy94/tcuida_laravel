<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Especialidad;

class EspecialidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $especialidades = [
            "Family Medicine",
            "Internal Medicine",
            "Surgery",
            "Orthopedics",
            "Cardiology",
            "Neurology",
            "Oncology",
            "Endocrinology",
            "Urology",
        ];

        foreach($especialidades as $item) {
            Especialidad::create([ "nomEsp" => $item ]);
        }
        
    }
}
