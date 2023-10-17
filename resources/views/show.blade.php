<div class="p-3 mb-2 bg-light text-dark">
@include('header')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <div class="card" style="width: 30rem;">
        <h2>食材名：{{ $ingredient->ingredients_name }}</h2>
        <div class="card-body">
        <h2 class="card-title">賞味期限：{{ $ingredient->best_my_date }}</h2>
        </div>
</div>

<button type="button" class="btn btn-warning"><a href="{{ route('ingredients.edit', $ingredient->id) }}">編集</a></button>
<button type="button" class="btn btn-warning"><a href="{{ route('ingredients.destroy', $ingredient->id) }}">削除</a></button>
<button type="button" class="btn btn-warning"><a href="{{ route('welcome') }}">戻る</a></button>

<style>
        a {
            text-decoration: none;
            color: black; 
        }
    </style>