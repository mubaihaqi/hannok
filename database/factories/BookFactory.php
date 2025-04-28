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
        $title = $this->faker->catchPhrase(); // CatchPhrase lebih kayak nama produk/buku
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . Str::random(5),
            'description' => $this->faker->paragraph(5), // 5 kalimat nyambung
            'preview' => $this->faker->text(200), // preview pendek
            'harga_buku' => $this->faker->numberBetween(45000, 250000), // harga lebih masuk akal
            'rating' => $this->faker->randomFloat(1, 1, 5), // rating bisa koma misal 4.3
            'author_id' => Author::factory(),
            'genre_id' => Genre::factory(),
            // 'img' => 'images/' . $this->faker->image('public/images', 320, 320, 'books', false),
            'stock' => $this->faker->numberBetween(0, 100), // <-- Ini tambahin
        ];
    }
}
