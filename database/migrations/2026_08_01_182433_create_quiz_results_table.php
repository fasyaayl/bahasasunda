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
        Schema::create('quiz_results', function (Blueprint $table) {
            $table->id();

            // User yang mengerjakan quiz
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            // Tingkat kesulitan
            $table->enum('difficulty', [
                'easy',
                'medium',
                'hard'
            ]);

            // Hasil quiz
            $table->unsignedInteger('score');
            $table->unsignedInteger('correct');
            $table->unsignedInteger('wrong');
            $table->unsignedInteger('total');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_results');
    }
};