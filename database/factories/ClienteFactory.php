<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Crypt;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo_acceso' => Crypt::encrypt(fake()->unique()->numberBetween(100000, 999999)),
            'nombre' => fake()->firstName(),
            'apellidos' => fake()->lastName(),
            'telefono' => fake()->phoneNumber,
            'direccion' => fake()->address,
            'email' => fake()->unique()->safeEmail(),
            'foto_perfil' =>fake()->imageUrl(640, 480),
        ];
    }
}
