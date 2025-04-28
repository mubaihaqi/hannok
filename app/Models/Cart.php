<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'book_id', 'quantity'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class); // A cart belongs to one user
    }

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class); // A cart has one book
    }
}
