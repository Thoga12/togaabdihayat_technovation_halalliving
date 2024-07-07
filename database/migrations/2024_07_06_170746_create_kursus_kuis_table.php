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
        Schema::create('kursus_kuis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('kursuses');
            $table->text('pertanyaan');
            $table->enum('tipe', ['pilihan_ganda', 'esai']);
            $table->text('jawaban')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursus_kuis');
    }
};
