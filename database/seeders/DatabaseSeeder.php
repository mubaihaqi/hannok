<?php

namespace Database\Seeders;

use App\Models\Blog;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\User;
use App\Models\Genre;
use App\Models\Promo;
use App\Models\Author;
use App\Models\Bahasa;
use App\Models\TokoKami;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([GenreSeeder::class, AuthorSeeder::class, BahasaSeeder::class, UserSeeder::class]);

        $genres = Genre::all();
        $authors = Author::all();
        $bahasas = Bahasa::all();

        $authors->each(function ($author) use ($bahasas) {
            $author->bahasas()->attach($bahasas->random(rand(2, 3))->pluck('id'));
        });

        Blog::factory(100)
            ->recycle(Author::all()->random(50))
            ->create()
            ->each(function ($blog) use ($genres) {
                $blog->genres()->attach($genres->random(3)->pluck('id'));
            });

        Book::factory(500)
            ->recycle(Author::all()->random(50))
            ->create([
                'genre_id' => fn() => $genres->random()->id,
            ]);

        Promo::factory(24)->create();

        TokoKami::factory(16)->create();
    }
}
