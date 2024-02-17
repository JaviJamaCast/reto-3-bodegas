<?php

namespace Database\Factories;

use App\Models\Formato;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'formato_id' => Formato::factory(),
            'descripcion' => fake()->sentence(),
            'referencia' =>fake()->unique()->word,
            'nombre' => fake()->name,
            'precio' => fake()->randomFloat(2, 10, 1000),
        ];
    }
}
