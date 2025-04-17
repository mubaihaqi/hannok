<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_genre', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained(
                table: 'blogs',
                indexName: 'blog_genre_blog_id'
            )->onDelete('cascade');
            $table->foreignId('genre_id')->constrained(
                table: 'genres',
                indexName: 'blog_genre_genre_id'
            )->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_genre');
    }
};
