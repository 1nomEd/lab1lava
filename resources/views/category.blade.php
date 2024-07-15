<!DOCTYPE html>
<html>
<head>
    <title>Books by Category</title>
</head>
<body>
    <h1>Books in {{ $category->name }}</h1>
    <ul>
        @foreach($books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>
</body>
</html>
