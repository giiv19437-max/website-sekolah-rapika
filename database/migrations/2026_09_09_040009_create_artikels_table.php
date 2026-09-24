<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();

            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('isi');
            $table->string('gambar')->nullable();
           

            // Relasi ke artikel kategori
            $table->foreignId('artikelkategori_id')
                  ->constrained('artikelkategoris')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();

            // Relasi ke users
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};