<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Best_my_date</title>
</head>
<body>

<?php
 $time = date("Y年m月j日 Ah:i");
 print $time;
?>

<div>
<a href="{{ route('create') }}">食材記録</a>
</div>

    <div>
        <hi>食材一覧</h1>
        <ui>
        @foreach ($ingredients as $ingredient)
            <li><span>食材名：{{ $ingredient->ingredients_name }}</span></li>
            <span>賞味期限：{{ $ingredient->best_my_date }}</span>
            <?php
            $day1 = new DateTime($ingredient->best_my_date);
            $day2 = new DateTime('today');
 
            $interval = $day1->diff($day2);
 
            echo $interval->format('残り日数 %a日');
            ?>
        @endforeach
        </ui>
    </div>

</body>
</html>