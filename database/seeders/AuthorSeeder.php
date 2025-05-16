<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use Illuminate\Support\Facades\DB;



class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'Tere Liye'],
            ['name' => 'Mark Manson'],
            ['name' => 'Masashi Kishimoto'],
            ['name' => 'J.K. Rowling'],
            ['name' => 'Stephen Hawking'],
        ]);
    }
}
