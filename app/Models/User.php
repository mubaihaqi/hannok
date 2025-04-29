<?php

/// app/Models/User.php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;  // Mengubah ke Authenticatable
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable // Meng-extend Authenticatable
{
    use HasFactory;

    // Menambahkan kolom yang bisa diisi secara massal
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'alamat',
        'nomor_telepon',
    ];

    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class); // One user can have many carts
    }

    // Relasi ke buku lewat cart
    public function booksInCart(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'carts')
            ->withPivot('quantity') // nyimpen field quantity
            ->withTimestamps();
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class); // One user can have many favorites
    }

    // Relasi ke buku lewat favorite
    public function booksInFavorites(): BelongsToMany
    {
        return $this->belongsToMany(Favorite::class, 'favorites')
            ->withTimestamps();
    }
}
