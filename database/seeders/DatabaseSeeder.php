<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'TestUser',
            'email' => 'test@example.com',
            'role' => 'admin',
            'password' => '123456',
        ]);
        User::factory()->create([
            'name' => 'Naruto',
            'email' => 'sss@gmail.com',
            'role' => 'user',
            'password' => '123456',
        ]);

        DB::table('kursuses')->insert([
            [
                'judul' => 'Fiqih Dasar',
                'kategori' => 'Fiqih',
                'img' => 'images/learning.png',
                'deskripsi' => 'Kursus tentang fiqih dasar dalam Islam.',
                'harga' => 100000.00,
                'visibility' => 'public',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Ekonomi Syariah',
                'kategori' => 'Ekonomi',
                'img' => 'images/learning.png',
                'deskripsi' => 'Kursus tentang ekonomi syariah.',
                'harga' => 150000.00,
                'visibility' => 'subscribers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Ekonomi Syariah',
                'kategori' => 'Ekonomi',
                'img' => 'images/learning.png',
                'deskripsi' => 'Kursus tentang ekonomi syariah.',
                'harga' => 150000.00,
                'visibility' => 'subscribers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Ekonomi Syariah',
                'kategori' => 'Ekonomi',
                'img' => 'images/learning.png',
                'deskripsi' => 'Kursus tentang ekonomi syariah.',
                'harga' => 150000.00,
                'visibility' => 'subscribers',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Tambahkan data lainnya sesuai kebutuhan
        ]);

        DB::table('kursus_user')->insert([
            [
                'kursus_id' => 1, // Sesuaikan dengan ID kursus yang ada
                'user_id' => 1,   // Sesuaikan dengan ID user yang ada
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kursus_id' => 2, // Sesuaikan dengan ID kursus yang ada
                'user_id' => 2,   // Sesuaikan dengan ID user yang ada
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kursus_id' => 3, // Sesuaikan dengan ID kursus yang ada
                'user_id' => 2,   // Sesuaikan dengan ID user yang ada
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kursus_id' => 3, // Sesuaikan dengan ID kursus yang ada
                'user_id' => 2,   // Sesuaikan dengan ID user yang ada
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
