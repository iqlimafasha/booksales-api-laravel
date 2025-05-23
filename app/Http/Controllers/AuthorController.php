<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    private $authors;

    public function __construct()
    {
        $authorModel = new Author();
        $this->authors = $authorModel->getAuthors();
    }

    // SHOW (ambil 1 data berdasarkan ID)
    public function show($id)
    {
        $author = collect($this->authors)->firstWhere('id', $id);

        if (!$author) {
            return response()->json([
                "success" => false,
                "message" => "Author not found"
            ], 404);
        }

        return response()->json([
            "success" => true,
            "data" => $author
        ], 200);
    }

    // UPDATE (ubah data author, simulasi)
    public function update(Request $request, $id)
    {
        $author = collect($this->authors)->firstWhere('id', $id);

        if (!$author) {
            return response()->json([
                "success" => false,
                "message" => "Author not found"
            ], 404);
        }

        $updated = [
            'id' => $id,
            'name' => $request->name
        ];

        return response()->json([
            "success" => true,
            "message" => "Author updated successfully (simulasi)",
            "data" => $updated
        ], 200);
    }

    // DESTROY (hapus author, simulasi)
    public function destroy($id)
    {
        $author = collect($this->authors)->firstWhere('id', $id);

        if (!$author) {
            return response()->json([
                "success" => false,
                "message" => "Author not found"
            ], 404);
        }

        return response()->json([
            "success" => true,
            "message" => "Author deleted successfully (simulasi)"
        ], 200);
    }
}
