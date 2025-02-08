<?php

/**
 * Adaptación del proyecto T-Cuida a Laravel
 * Autora: Ruyi Xia Ye - 2ºDAW
 */

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Medico;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{

    protected $model = \App\Models\Paciente::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            "nomPac" => fake()->firstName(),
            "apePac" => fake()->lastName(),
            "dniPac" => fake()->unique()->regexify("[1-9][0-9]{7}[A-Z]"),
            "fechaNac" => fake()->date(),
            "genero" => fake()->randomElement(["male", "female"]),
            "contactoPac" => fake()->unique()->regexify("[69][0-9]{8}"),
            "numHistoria" => fake()->unique()->regexify("[1-9][0-9]{9}"),
            "dirPaciente" => fake()->address(),

            # Valores aleatorios para la Foreign Key
            "idMed" => Medico::inRandomOrder()->first()->idMed,

        ];
    }
}
