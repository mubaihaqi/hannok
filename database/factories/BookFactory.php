<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\Author;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(3);
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . Str::random(5),
            'description' => fake()->paragraphs(3, true),
            'preview' => fake()->text(150),

            'harga_buku' => fake()->numberBetween(30000, 150000),
            'rating' => fake()->numberBetween(1, 5),
            'author_id' => Author::factory(), // Bisa di-recycle nanti
            'genre_id' => Genre::factory(),   // Bisa override nanti
            'img' => 'images/' . $this->faker->image('public/images', 320, 320, 'genshin impact', false),
        ];
    }
}
