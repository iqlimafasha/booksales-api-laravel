<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
            'description' => 'Filosofi hidup dan sikap bodo amat.',
            'price' => 25000,
            'stock' => 5,
            'cover_photo' => 'sebuah_seni.jpg',
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'Naruto',
            'description' => 'Cerita ninja bernama Naruto.',
            'price' => 30000,
            'stock' => 55,
            'cover_photo' => 'naruto.jpg',
            'author_id' => 3
        ]);

        Book::create([
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'description' => 'Petualangan penyihir muda bernama Harry Potter di Hogwarts.',
            'price' => 50000,
            'stock' => 10,
            'cover_photo' => 'harry_potter.jpg',
            'author_id' => 4
        ]);

        Book::create([
            'title' => 'Brief History of Time',
            'description' => 'Penjelasan ilmiah tentang asal mula dan struktur alam semesta.',
            'price' => 60000,
            'stock' => 8,
            'cover_photo' => 'brief_history.jpg',
            'author_id' => 5
        ]);
    }
}
