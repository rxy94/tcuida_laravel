<?php

/**
 * Adaptación del proyecto T-Cuida a Laravel
 * Autora: Ruyi Xia Ye - 2ºDAW
 */

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Alergia;

class AlergiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alergias = [
            "Pollen Allergy",
            "Peanut Allergy",
            "Latex Allergy",
            "Fish Allergy",
            "Soy Allergy",
            "Egg Allergy",
            "Wheat Allergy",
        ];

        foreach ($alergias as $item) {
            Alergia::create([ "nomAlergia" => $item ]);
        }
        
    
    }

}
