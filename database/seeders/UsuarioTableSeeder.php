<?php

/**
 * Adaptación del proyecto T-Cuida a Laravel
 * Autora: Ruyi Xia Ye - 2ºDAW
 */

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

use App\Models\Usuario;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            
            "nomUsu" => "Ruyi",
            "apeUsu" => "Xia Ye",
            "emailUsu" => "ruyi@tcuida.com",
            "claveUsu" => Hash::make("123456789"),
            "admin" => true,
            
        ]);


    }


}


