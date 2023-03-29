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
    public function definition()
    {
        $name = fake()->sentence(3);
        return [
            'name' => $name,
            'slug' => slugFor('products', $name),
            'detail' => fake()->paragraph(4),
            'price' => fake()->randomFloat(2,5,1000),
            'discount' => fake()->numberBetween(0, 25),
            'in_stock' => fake()->numberBetween(2,100),
            'category_id' => fake()->numberBetween(1,4),
            'brand_id' => fake()->numberBetween(1,3),
            'event_id' => fake()->numberBetween(1,3),
            'image' => "https://picsum.photos/seed/$name/400",
        ];
    }
}
