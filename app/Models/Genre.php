<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    /** @use HasFactory<\Database\Factories\GenreFactory> */
    use HasFactory;

    public function blogs(): BelongsToMany
    {
        return $this->belongsToMany(Blog::class);
    }

    // nah kalau ini tuh bacanya satu genre bisa dimiliki banyak blog, jadi pakainya belongsTo, anyway semangat ngodingnya ya, jgn lupa makan

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
