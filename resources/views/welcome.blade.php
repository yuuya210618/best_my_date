<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Best_my_date</title>
</head>
<body>
<a href="{{ route('create') }}">食材記録</a>

    <div>
        <hi>食材一覧</h1>
        <ui>
        @foreach ($ingredients as $ingredient)
            <li><span>食材名：{{ $ingredient->ingredients_name }}</span></li>
            <span>賞味期限：{{ $ingredient->best_my_date }}</span>
        @endforeach
        </ui>
    </div>
    

</body>
</html>