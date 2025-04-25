<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\Author;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(6);
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . Str::random(5),
            'body' => $this->faker->realText(5000), // Generate 5000 karakter
            'author_id' => Author::factory(), // Bisa di-recycle juga
            'img' => 'images/' . $this->faker->image('public/images', 320, 320, 'genshin impact', false),
        ];
    }
}
