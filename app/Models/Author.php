<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    use HasFactory;

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }

    // barangkali u lupa ini tuh bacanya satu author bisa punya banyak blog, jadi pakainya hasMany, anyway semangat ngodingnya

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
