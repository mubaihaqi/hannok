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
        $title = $this->faker->sentence(5); // 5 kata, lebih pendek dan realistis
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . Str::random(5),
            'body' => $this->faker->realText(60000), // 10 paragraf, digabung
            'author_id' => Author::factory(),
            // 'img' => 'images/' . $this->faker->image('public/images', 640, 480, 'people', false),
        ];
    }
}
