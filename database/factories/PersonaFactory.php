<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'edad' => $this->faker->numberBetween(18, 60),
            'sexo' => $this->faker->randomElement(['masculino', 'femenino']),
            'fecha_nacimiento' => $this->faker->date,
            'ruta_foto' => $this->faker->optional()->imageUrl(), // Cambia esto según tus necesidades
        ];
    }
}
