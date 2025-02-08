<?php

/**
 * Adaptación del proyecto T-Cuida a Laravel
 * Autora: Ruyi Xia Ye - 2ºDAW
 */

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UsuarioFactory extends Factory
{
    
    protected $model = \App\Models\Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nomUsu" => fake()->firstName(),
            "apeUsu" => fake()->lastName(),
            "emailUsu" => fake()->unique()->safeEmail(),
            "claveUsu" => Hash::make("123456789"),
            "admin" => fake()->boolean(),

        ];
    }

}
