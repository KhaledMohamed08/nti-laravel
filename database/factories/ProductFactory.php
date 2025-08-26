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
        $sizes = ['s', 'm', 'l'];

        return [
            'title' => fake()->sentence(2),
            'description' => fake()->paragraph(),
            'stock' => rand(10, 100),
            'price' => rand (50*10, 100*10) / 10,
            'size' => $sizes[array_rand($sizes)],
        ];
    }
}
