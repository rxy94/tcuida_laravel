<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alergia>
 */
class AlergiaFactory extends Factory
{

    protected $model = \App\Models\Alergia::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nomAlergia" => fake()->word(),

        ];
    }
}
