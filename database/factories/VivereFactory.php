<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\vivere>
 */
class VivereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'cantidad' => $this->faker->randomFloat(2, 0, 100),
            'unidad_medida' => $this->faker->randomElement(['kilos', 'litros', 'unidades']),
        ];
    }
}
