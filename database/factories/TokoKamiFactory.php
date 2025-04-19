<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TokoKami>
 */
class TokoKamiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // 'img' => 'images/' . $this->faker->image('public/images', 320, 320, 'genshin impact', false),

        $namaToko = fake()->sentence(3, false);
        $hari = 'Senin - Minggu';
        $jamBuka = '10:00';
        $jamTutup = '22:00';

        return [
            'nama_toko' => $namaToko,
            'slug' => Str::slug($namaToko) . '-' . Str::random(3),
            'img' => $this->faker->imageUrl(640, 480, 'business', true), // gambar random
            'alamat' => $this->faker->address,
            'waktu_buka' => "$hari $jamBuka - $jamTutup",
        ];
    }
}
