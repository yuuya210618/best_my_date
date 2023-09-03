<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Best_my_date</title>

</head>
<body>
<div class="p-3 mb-2 bg-primary text-white">
@include('header')

<div>
<button type="button" class="btn btn-warning"><a href="{{ route('create') }}">食材記録</a></button>
</div>

    <div>
        <hi>食材一覧</h1>
        <ui>
        @foreach ($ingredients as $ingredient)
        <div class="card" style="width: 18rem;">
        <h2>食材名：{{ $ingredient->ingredients_name }}</h2>
        <div class="card-body">
        <h5 class="card-title">賞味期限：{{ $ingredient->best_my_date }}</h5>
        <p class="card-text">
            <?php
            $day1 = new DateTime($ingredient->best_my_date);
            $day2 = new DateTime('today');
 
            if ($day1 < $day2) {
                $interval = $day2->diff($day1);
                $remainingDays = $interval->format('%r%a');
                echo "期限切れ {$remainingDays}日";
            } else {
                $interval = $day1->diff($day2);
                $remainingDays = $interval->format('%a');
                echo "残り日数 {$remainingDays}日";
            }
            ?>
            </p>
            </div>
</div>
        @endforeach
        </ui>
    </div>
    </div>

    <button type="button" class="btn btn-warning"><a href="{{ route('question') }}">Q&A</a></button>

</body>

</html>


