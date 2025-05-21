<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    // READ all authors
    public function index()
    {
        $authorModel = new Author();
        $authors = $authorModel->getAuthors();

        return response()->json([
            "success" => true,
            "message" => "Get all authors",
            "data" => $authors
        ], 200);
    }

    // CREATE a new author (simulasi)
    public function store(Request $request)
    {
        $newAuthor = [
            'id' => rand(100, 999), // simulasi ID
            'name' => $request->name
        ];

        return response()->json([
            "success" => true,
            "message" => "Author created successfully",
            "data" => $newAuthor
        ], 201);
    }
}
