<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->paragraph(),
            'price' => fake()->randomDigit(),
            'customer_id' => fake()->numberBetween(1,40),
            'city_id' => fake()->numberBetween(1,11),
            'category_id' => fake()->numberBetween(1,20),
        ];
    }
}