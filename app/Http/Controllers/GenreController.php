<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    private $genres;

    public function __construct()
    {
        $genreModel = new Genre();
        $this->genres = $genreModel->getGenres();
    }

    // SHOW (tampilkan satu genre berdasarkan ID)
    public function show($id)
    {
        $genre = collect($this->genres)->firstWhere('id', $id);

        if (!$genre) {
            return response()->json([
                "success" => false,
                "message" => "Genre not found"
            ], 404);
        }

        return response()->json([
            "success" => true,
            "data" => $genre
        ], 200);
    }

    // UPDATE (simulasi update karena data manual)
    public function update(Request $request, $id)
    {
        $genre = collect($this->genres)->firstWhere('id', $id);

        if (!$genre) {
            return response()->json([
                "success" => false,
                "message" => "Genre not found"
            ], 404);
        }

        $updated = [
            'id' => $id,
            'name' => $request->name
        ];

        return response()->json([
            "success" => true,
            "message" => "Genre updated successfully (simulasi)",
            "data" => $updated
        ], 200);
    }

    // DESTROY (hapus genre, simulasi)
    public function destroy($id)
    {
        $genre = collect($this->genres)->firstWhere('id', $id);

        if (!$genre) {
            return response()->json([
                "success" => false,
                "message" => "Genre not found"
            ], 404);
        }

        return response()->json([
            "success" => true,
            "message" => "Genre deleted successfully (simulasi)"
        ], 200);
    }
}
