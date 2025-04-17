<?php

namespace Database\Seeders;

use App\Models\Blog;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\User;
use App\Models\Genre;
use App\Models\Author;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([GenreSeeder::class, AuthorSeeder::class]);

        $genres = Genre::all();

        Blog::factory(500)
            ->recycle(Author::all()->random(50))
            ->create()
            ->each(function ($blog) use ($genres) {
                $blog->genres()->attach($genres->random(1, 3)->pluck('id'));
            });

        Book::factory(800)
            ->recycle(Author::all()->random(50))
            ->create([
                'genre_id' => fn() => $genres->random()->id,
            ]);
    }
}
