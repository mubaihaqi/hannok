<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'username' => 'adminuser',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('kasihsayangadmin'), // password default
            'alamat' => 'Jl. Buku No. 1, Jakarta',
            'email_verified_at' => now(),
            'nomor_telepon' => '08123456789',
            'remember_token' => Str::random(10),
        ]);

        // Buat contoh user tambahan
        User::factory()->count(10)->create();
    }
}
