<div class="p-3 mb-2 bg-light text-dark">
@include('header')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<h2>食材の賞味期限を登録しよう！</h2>
<form method="post" action="{{ route('store') }}" style="display: flex; flex-direction: column;">
    @csrf
        <label for="ingredients_name">食材名</label>
        <input type="text" id="ingredients_name" name="ingredients_name" class="form-control" aria-describedby="passwordHelpBlock">
        <label for="賞味期限">賞味期限</label>
        <input type="date" id="best_my_date" name="best_my_date" class="form-control" aria-describedby="passwordHelpBlock">

        <button type="submit" name="submit" class="btn btn-warning btn-sm">食品追加</button>
    </form>

    <style>
        a {
            text-decoration: none;
            color: black; 
        }
    </style>

    <button type="button" class="btn btn-warning"><a href="{{ route('welcome') }}">戻る</a></button>

    </div>