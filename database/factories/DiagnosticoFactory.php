<?php

/**
 * Adaptación del proyecto T-Cuida a Laravel
 * Autora: Ruyi Xia Ye - 2ºDAW
 */

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diagnostico>
 */
class DiagnosticoFactory extends Factory
{

    protected $model = \App\Models\Diagnostico::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nomDiag" => fake()->words(3, true),

        ];
    }
}
