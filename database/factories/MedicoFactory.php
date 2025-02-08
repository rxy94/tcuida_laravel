<?php

/**
 * Adaptación del proyecto T-Cuida a Laravel
 * Autora: Ruyi Xia Ye - 2ºDAW
 */

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MedicoFactory extends Factory
{

    protected $model = \App\Models\Medico::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            "nomMed" => fake()->firstName(),
            "apeMed" => fake()->lastName(),
            "numColegiado" => fake()->unique()->numerify("2########"),
            "contactoMed" => fake()->unique()->regexify("[69][0-9]{8}"),
            "emailMed" => fake()->unique()->email(),
            "fotoMed" => "https://picsum.photos/200",

        ];
    }
}
