<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UsuarioTableSeeder::class,
            AlergiaTableSeeder::class, 
            DiagnosticoTableSeeder::class,
            EspecialidadTableSeeder::class,
            
        ]);

        \App\Models\Usuario::factory(9)->create();
        \App\Models\Alergia::factory(8)->create();
        \App\Models\Diagnostico::factory(5)->create();
        \App\Models\Especialidad::factory(5)->create();
        \App\Models\Medico::factory(10)->create();
        \App\Models\Paciente::factory(15)->create();

        $this->call([
            MedicoEspecialidadTableSeeder::class,
            PacienteAlergiaTableSeeder::class,
            PacienteDiagnosticoTableSeeder::class,

        ]); 

    }


}
