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
        Schema::create('bahasa_author', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bahasa_id')->constrained(
                table: 'bahasas',
                indexName: 'bahasa_author_bahasa_id'
            )->onDelete('cascade');
            $table->foreignId('author_id')->constrained(
                table: 'authors',
                indexName: 'bahasa_author_author_id'
            )->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahasa_author');
    }
};
