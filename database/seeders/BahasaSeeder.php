<?php

namespace Database\Seeders;

use App\Models\Bahasa;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BahasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bahasa::create([
            'nama' => 'Bahasa Arab',
            'slug' => Str::slug('Bahasa Arab'),
        ]);

        Bahasa::create([
            'nama' => 'Bahasa Jepang',
            'slug' => Str::slug('Bahasa Jepang'),
        ]);

        Bahasa::create([
            'nama' => 'Bahasa Mandarin',
            'slug' => Str::slug('Bahasa Mandarin'),
        ]);

        Bahasa::create([
            'nama' => 'Bahasa Korea',
            'slug' => Str::slug('Bahasa Korea'),
        ]);

        Bahasa::create([
            'nama' => 'Bahasa Prancis',
            'slug' => Str::slug('Bahasa Prancis'),
        ]);

        Bahasa::create([
            'nama' => 'Bahasa Spanyol',
            'slug' => Str::slug('Bahasa Spanyol'),
        ]);

        Bahasa::create([
            'nama' => 'Bahasa Jerman',
            'slug' => Str::slug('Bahasa Jerman'),
        ]);

        Bahasa::create([
            'nama' => 'Bahasa Rusia',
            'slug' => Str::slug('Bahasa Rusia'),
        ]);

        Bahasa::create([
            'nama' => 'Bahasa Turki',
            'slug' => Str::slug('Bahasa Turki'),
        ]);

        Bahasa::create([
            'nama' => 'Bahasa Urdu',
            'slug' => Str::slug('Bahasa Urdu'),
        ]);
    }
}
