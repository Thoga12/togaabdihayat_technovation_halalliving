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
        Schema::create('kursuses', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('kategori');
            $table->string('img');
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 10, 2)->nullable();
            $table->string('visibility');
            $table->timestamps();
        });

        Schema::create('kursus_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kursus_id')->constrained('kursuses')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursuses');
    }
};
