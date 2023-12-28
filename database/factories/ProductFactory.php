<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition()
    {
        $categories = Category::all();
        $categoriesId = $categories->pluck('id')->toArray();
        return [
            'name' => fake()->name(),
            'description' => fake()->realText(),
            'price' => fake()->randomNumber(4, true),
            'category_id' => fake()->randomElement($categoriesId)
        ];
    }
}
