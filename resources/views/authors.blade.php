<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Author</title>
</head>
<body>
    <h1>Daftar Penulis</h1>
    <p>Berikut adalah daftar penulis buku:</p>

    @foreach ($authors as $author)
    <ul>
        <li>ID: {{ $author['id'] }}</li>
        <li>Nama Penulis: {{ $author['name'] }}</li>
    </ul>
    @endforeach
</body>
</html>
