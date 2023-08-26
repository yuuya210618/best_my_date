@include('header')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<h2>食材を登録しよう！</h2>
<form method="post" action="{{ route('store') }}" style="display: flex; flex-direction: column;">
    @csrf
        <label for="ingredients_name">食材名</label>
        <input type="text" id="ingredients_name" class="form-control" aria-describedby="passwordHelpBlock">
        <label for="賞味期限">賞味期限</label>
        <input type="date" id="best_my_date" class="form-control" aria-describedby="passwordHelpBlock">

        <button type="button" class="btn btn-outline-primary">食品追加</button>
    </form>

    <button type="button" class="btn btn-outline-danger"><a href="{{ route('welcome') }}">戻る</a></button>