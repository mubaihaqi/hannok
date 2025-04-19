<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promo>
 */
class PromoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(4);
        $start = $this->faker->dateTimeBetween('2025-04-01', '2025-04-25');
        $end = (clone $start)->modify('+' . rand(1, 7) . ' days'); // Biar range-nya pendek (1–7 hari)
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . Str::random(5),
            'img' => 'images/' . $this->faker->image('public/images', 320, 320, 'genshin impact', false),
            'body' => fake()->paragraphs(5, true),
            'start_date' => $start->format('Y-m-d'),
            'end_date' => $end->format('Y-m-d'),
        ];
    }
}
