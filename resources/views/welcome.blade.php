<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Best_my_date</title>
</head>
<body>
    <form method="post" action="{{ route('store') }}">
    @csrf
        <input type="ingredients_name" name="ingredients_name">
        <button>食品追加</button>
    </form>

    <ul>
        @foreach ($ingredients as $ingredient)
            <li>{{ $ingredient->ingredients_name }}</li>
        @endforeach
    </ul>

</body>
</html>