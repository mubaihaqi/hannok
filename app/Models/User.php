<?php

/// app/Models/User.php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;  // Mengubah ke Authenticatable
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function carts()
    {
        return $this->hasMany(Cart::class); // One user can have many carts
    }

    // Relasi ke buku lewat cart
    public function booksInCart()
    {
        return $this->belongsToMany(Book::class, 'carts')
            ->withPivot('quantity') // nyimpen field quantity
            ->withTimestamps();
    }
}
