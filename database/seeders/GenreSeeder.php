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
            'color' => 'bg-orange-500',
        ]);
        Genre::create([
            'nama' => 'Fantasy',
            'slug' => 'fantasy',
            'deskripsi' => 'Fantasy is a genre that features magical elements, fantastical creatures, and imaginary worlds.',
            'color' => 'bg-purple-700',
        ]);

        Genre::create([
            'nama' => 'Science Fiction',
            'slug' => 'science-fiction',
            'deskripsi' => 'Science Fiction involves futuristic technology, space exploration, and other advanced scientific concepts.',
            'color' => 'bg-blue-500',
        ]);

        Genre::create([
            'nama' => 'Mystery',
            'slug' => 'mystery',
            'deskripsi' => 'Mystery involves solving a crime or uncovering hidden secrets.',
            'color' => 'bg-yellow-400',
        ]);

        Genre::create([
            'nama' => 'Romance',
            'slug' => 'romance',
            'deskripsi' => 'Romance focuses on love stories and relationships.',
            'color' => 'bg-pink-500',
        ]);

        Genre::create([
            'nama' => 'Thriller',
            'slug' => 'thriller',
            'deskripsi' => 'Thriller is a genre that builds suspense, excitement, and anticipation.',
            'color' => 'bg-red-600',
        ]);

        Genre::create([
            'nama' => 'Adventure',
            'slug' => 'adventure',
            'deskripsi' => 'Adventure stories involve journeys, exploration, and unexpected challenges.',
            'color' => 'bg-green-500',
        ]);

        Genre::create([
            'nama' => 'Horror',
            'slug' => 'horror',
            'deskripsi' => 'Horror is designed to scare and provoke fear in the audience.',
            'color' => 'bg-red-900',
        ]);

        Genre::create([
            'nama' => 'Historical Fiction',
            'slug' => 'historical-fiction',
            'deskripsi' => 'Historical Fiction combines real historical events with fictional characters or stories.',
            'color' => 'bg-red-800',
        ]);

        Genre::create([
            'nama' => 'Action',
            'slug' => 'action',
            'deskripsi' => 'Action focuses on physical feats, including combat, chases, and explosions.',
            'color' => 'bg-orange-600',
        ]);

        Genre::create([
            'nama' => 'Comedy',
            'slug' => 'comedy',
            'deskripsi' => 'Comedy is meant to entertain and amuse the audience with humor.',
            'color' => 'bg-yellow-300',
        ]);

        Genre::create([
            'nama' => 'Drama',
            'slug' => 'drama',
            'deskripsi' => 'Drama involves intense emotional themes, conflicts, and character development.',
            'color' => 'bg-orange-700',
        ]);

        Genre::create([
            'nama' => 'Crime',
            'slug' => 'crime',
            'deskripsi' => 'Crime involves unlawful activities, criminals, and law enforcement.',
            'color' => 'bg-blue-900',
        ]);

        Genre::create([
            'nama' => 'Biography',
            'slug' => 'biography',
            'deskripsi' => 'Biography tells the life story of a real person.',
            'color' => 'bg-amber-900',
        ]);

        Genre::create([
            'nama' => 'Documentary',
            'slug' => 'documentary',
            'deskripsi' => 'Documentary presents factual information or events in an informative way.',
            'color' => 'bg-green-200',
        ]);

        Genre::create([
            'nama' => 'Adventure Fantasy',
            'slug' => 'adventure-fantasy',
            'deskripsi' => 'Adventure Fantasy combines thrilling journeys with magical or fantastical elements.',
            'color' => 'bg-gray-300',
        ]);

        Genre::create([
            'nama' => 'Superhero',
            'slug' => 'superhero',
            'deskripsi' => 'Superhero genre centers on characters with extraordinary abilities and powers.',
            'color' => 'bg-red-400',
        ]);

        Genre::create([
            'nama' => 'Post-apocalyptic',
            'slug' => 'post-apocalyptic',
            'deskripsi' => 'Post-apocalyptic features dystopian worlds after a catastrophic event.',
            'color' => 'bg-slate-800',
        ]);

        Genre::create([
            'nama' => 'Urban Fantasy',
            'slug' => 'urban-fantasy',
            'deskripsi' => 'Urban Fantasy blends fantastical elements with modern urban settings.',
            'color' => 'bg-indigo-900',
        ]);

        Genre::create([
            'nama' => 'Western',
            'slug' => 'western',
            'deskripsi' => 'Western typically involves stories set in the late 19th century American frontier.',
            'color' => 'bg-orange-800',
        ]);
    }
}
