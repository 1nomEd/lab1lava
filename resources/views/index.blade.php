<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
</head>
<body>
    <h1>Books</h1>
    <h2>Highest Price</h2>
    <ul>
        @foreach($booksHighestPrice as $book)
            <li>{{ $book->title }} - {{ $book->price }}</li>
        @endforeach
    </ul>

    <h2>Lowest Price</h2>
    <ul>
        @foreach($booksLowestPrice as $book)
            <li>{{ $book->title }} - {{ $book->price }}</li>
        @endforeach
    </ul>
</body>
</html>
