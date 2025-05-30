<?php

namespace App\Models;

class Book
{
    private $books = [
        [
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ],
        [
            'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
            'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup seseorang.',
            'price' => 25000,
            'stock' => 5,
            'cover_photo' => 'sebuah_seni.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ],
        [
            'title' => 'Naruto',
            'description' => 'Buku yang membahas tentang jalan ninja seseorang.',
            'price' => 30000,
            'stock' => 55,
            'cover_photo' => 'naruto.jpg',
            'genre_id' => 3,
            'author_id' => 3
        ],
        [
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'description' => 'Petualangan penyihir muda bernama Harry Potter di Hogwarts.',
            'price' => 50000,
            'stock' => 10,
            'cover_photo' => 'harry_potter.jpg',
            'genre_id' => 4,
            'author_id' => 4
        ],
        [
            'title' => 'A Brief History of Time',
            'description' => 'Penjelasan ilmiah tentang asal mula dan struktur alam semesta.',
            'price' => 60000,
            'stock' => 8,
            'cover_photo' => 'brief_history.jpg',
            'genre_id' => 5,
            'author_id' => 5
        ],
    ];

    public function getBooks()
    {
        return $this->books;
    }
}
