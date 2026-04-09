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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_artikel');
            $table->string('slug')->nullable();
            $table->string('label')->nullable();
            $table->string('tag')->nullable();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('gambar_utama')->nullable();
            $table->json('galeri')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
