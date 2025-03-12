<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
            'name' => $this->faker->word(),
            'category_id' => Category::factory(),
            'pricing' => $this->faker->randomFloat(2, 10, 100),
            'description' => $this->faker->paragraph(),
            'images' => json_encode([$this->faker->imageUrl()]),
        ];
    }
}
