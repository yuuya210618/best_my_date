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
        <input type="best_my_date" name="best_my_date">
        <button>食品追加</button>
    </form>

    <ul>
        @foreach ($ingredients as $ingredient)
            <li>{{ $ingredient->ingredients_name }}</li>
            <li>{{ $ingredient->best_mya_date }}</li>
        @endforeach
    </ul>

</body>
</html>