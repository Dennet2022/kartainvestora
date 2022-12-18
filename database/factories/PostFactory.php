<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 6),
            'slug' => $this->faker->slug(),
            'title' => $this->faker->text(100),
            'description' => $this->faker->text(),
            'content' => $this->faker->randomHtml(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
