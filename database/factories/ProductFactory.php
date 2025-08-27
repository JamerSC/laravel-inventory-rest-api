<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

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
            'name' => $this->faker->words(2, true), // e.g. "Steel Chair", "Paper Folder"
             //'sku' => $this->faker->numberBetween(1,100),
            'description' => $this->faker->sentence(),
            'quantity' => $this->faker->numberBetween(1,100),
             //'price'=> $this->faker->randomFloat(2,0,0),
            'category' => $this->faker->randomElement(['Office Supplies', 'Furniture', 'Tools', 'Equipment']),
        ];
    }
}
