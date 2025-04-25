<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Bahasa extends Model
{
    /** @use HasFactory<\Database\Factories\BahasaFactory> */
    use HasFactory;

    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class, 'bahasa_author');
    }
}
