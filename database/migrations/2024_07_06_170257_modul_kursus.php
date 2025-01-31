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
        Schema::create('modul_kursuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kursus_id')->constrained('kursuses')->onDelete('cascade');;
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->longText('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modul_kursuses');
    }
};
