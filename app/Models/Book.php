<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    public function authors(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function genres(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }
}
