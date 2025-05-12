<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        ['id' => 1, 'name' => 'Tere Liye'],
        ['id' => 2, 'name' => 'Mark Manson'],
        ['id' => 3, 'name' => 'Masashi Kishimoto'],
        ['id' => 4, 'name' => 'J.K. Rowling'],
        ['id' => 5, 'name' => 'Stephen Hawking'],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
