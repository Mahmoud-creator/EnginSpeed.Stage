<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Motor>
 */
class MotorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->uuid,
            'brand' => fake()->words(1, true),
            'model' => fake()->words(1, true),
            'year' => fake()->year,
            'color' => fake()->colorName,
            'price' => fake()->randomFloat('2', 1000, 300000)
        ];
    }
}
