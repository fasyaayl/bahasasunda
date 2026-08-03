<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();

            // Judul materi
            $table->string('title');

            // Kategori materi
            $table->enum('category', [
                'pemula',
                'menengah',
                'lanjutan'
            ]);

            // Deskripsi singkat
            $table->text('description')->nullable();

            // Isi materi lengkap
            $table->longText('content');

            // Urutan tampil
            $table->unsignedInteger('order')->default(1);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};