<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorite extends Model
{
    /** @use HasFactory<\Database\Factories\FavoriteFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'book_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class); // A favorite belongs to one user
    }

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class); // A favorite has one book
    }
}
