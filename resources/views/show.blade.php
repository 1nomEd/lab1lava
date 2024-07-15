<!DOCTYPE html>
<html>
<head>
    <title>{{ $book->title }}</title>
</head>
<body>
    <h1>{{ $book->title }}</h1>
    <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}">
    <p>{{ $book->author }}</p>
    <p>{{ $book->publisher }}</p>
    <p>{{ $book->publication_date }}</p>
    <p>{{ $book->price }}</p>
    <p>{{ $book->quantity }}</p>
</body>
</html>
