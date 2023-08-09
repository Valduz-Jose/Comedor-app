<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comedore>
 */
class ComedoreFactory extends Factory
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
            'fecha' => $this->faker->date,
            'platos_servidos_diarios' => $this->faker->randomNumber(2),
            'platos_acumulados' => $this->faker->randomNumber(4),
        ];
    }
}
