<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Espionage',
            'slug' => 'espionage',
            'deskripsi' => 'Espionage is a genre that involves spying, intelligence gathering, and covert operations.',
            'color' => '#FF5733',
        ]);
        Genre::create([
            'nama' => 'Fantasy',
            'slug' => 'fantasy',
            'deskripsi' => 'Fantasy is a genre that features magical elements, fantastical creatures, and imaginary worlds.',
            'color' => '#8A2BE2',
        ]);

        Genre::create([
            'nama' => 'Science Fiction',
            'slug' => 'science-fiction',
            'deskripsi' => 'Science Fiction involves futuristic technology, space exploration, and other advanced scientific concepts.',
            'color' => '#1E90FF',
        ]);

        Genre::create([
            'nama' => 'Mystery',
            'slug' => 'mystery',
            'deskripsi' => 'Mystery involves solving a crime or uncovering hidden secrets.',
            'color' => '#FFD700',
        ]);

        Genre::create([
            'nama' => 'Romance',
            'slug' => 'romance',
            'deskripsi' => 'Romance focuses on love stories and relationships.',
            'color' => '#FF1493',
        ]);

        Genre::create([
            'nama' => 'Thriller',
            'slug' => 'thriller',
            'deskripsi' => 'Thriller is a genre that builds suspense, excitement, and anticipation.',
            'color' => '#DC143C',
        ]);

        Genre::create([
            'nama' => 'Adventure',
            'slug' => 'adventure',
            'deskripsi' => 'Adventure stories involve journeys, exploration, and unexpected challenges.',
            'color' => '#32CD32',
        ]);

        Genre::create([
            'nama' => 'Horror',
            'slug' => 'horror',
            'deskripsi' => 'Horror is designed to scare and provoke fear in the audience.',
            'color' => '#8B0000',
        ]);

        Genre::create([
            'nama' => 'Historical Fiction',
            'slug' => 'historical-fiction',
            'deskripsi' => 'Historical Fiction combines real historical events with fictional characters or stories.',
            'color' => '#A52A2A',
        ]);

        Genre::create([
            'nama' => 'Action',
            'slug' => 'action',
            'deskripsi' => 'Action focuses on physical feats, including combat, chases, and explosions.',
            'color' => '#FF4500',
        ]);

        Genre::create([
            'nama' => 'Comedy',
            'slug' => 'comedy',
            'deskripsi' => 'Comedy is meant to entertain and amuse the audience with humor.',
            'color' => '#FFFF00',
        ]);

        Genre::create([
            'nama' => 'Drama',
            'slug' => 'drama',
            'deskripsi' => 'Drama involves intense emotional themes, conflicts, and character development.',
            'color' => '#D2691E',
        ]);

        Genre::create([
            'nama' => 'Crime',
            'slug' => 'crime',
            'deskripsi' => 'Crime involves unlawful activities, criminals, and law enforcement.',
            'color' => '#000080',
        ]);

        Genre::create([
            'nama' => 'Biography',
            'slug' => 'biography',
            'deskripsi' => 'Biography tells the life story of a real person.',
            'color' => '#8B4513',
        ]);

        Genre::create([
            'nama' => 'Documentary',
            'slug' => 'documentary',
            'deskripsi' => 'Documentary presents factual information or events in an informative way.',
            'color' => '#98FB98',
        ]);

        Genre::create([
            'nama' => 'Adventure Fantasy',
            'slug' => 'adventure-fantasy',
            'deskripsi' => 'Adventure Fantasy combines thrilling journeys with magical or fantastical elements.',
            'color' => '#D3D3D3',
        ]);

        Genre::create([
            'nama' => 'Superhero',
            'slug' => 'superhero',
            'deskripsi' => 'Superhero genre centers on characters with extraordinary abilities and powers.',
            'color' => '#FF6347',
        ]);

        Genre::create([
            'nama' => 'Post-apocalyptic',
            'slug' => 'post-apocalyptic',
            'deskripsi' => 'Post-apocalyptic features dystopian worlds after a catastrophic event.',
            'color' => '#2F4F4F',
        ]);

        Genre::create([
            'nama' => 'Urban Fantasy',
            'slug' => 'urban-fantasy',
            'deskripsi' => 'Urban Fantasy blends fantastical elements with modern urban settings.',
            'color' => '#4B0082',
        ]);

        Genre::create([
            'nama' => 'Western',
            'slug' => 'western',
            'deskripsi' => 'Western typically involves stories set in the late 19th century American frontier.',
            'color' => '#A0522D',
        ]);
    }
}
