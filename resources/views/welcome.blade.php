<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Best_my_date</title>
</head>
<body>
<a href="{{ route('create') }}">食材記録</a>

    <ul>
        @foreach ($ingredients as $ingredient)
            <li>{{ $ingredient->ingredients_name }}</li>
        
        @endforeach
    </ul>

</body>
</html>