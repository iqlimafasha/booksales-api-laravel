<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    // Read All Genres
    public function index()
    {
        $genreModel = new Genre();
        $genres = $genreModel->getGenres();

        return response()->json([
            "success" => true,
            "message" => "Get all genres",
            "data" => $genres
        ], 200);
    }

    // Create Genre (simulasi)
    public function store(Request $request)
    {
        $newGenre = [
            'id' => rand(100, 999),
            'name' => $request->name
        ];

        return response()->json([
            "success" => true,
            "message" => "Genre created successfully",
            "data" => $newGenre
        ], 201);
    }
}
