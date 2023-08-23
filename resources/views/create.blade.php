<form method="post" action="{{ route('store') }}">
    @csrf
        <label for="ingredients_name">食材名</label>
        <input type='text' name="ingredients_name" id="ingredients_name">

        <label for="賞味期限">賞味期限</label>
        <input type='date' name="best_my_date" id="best_my_date" >

        <button>食品追加</button>
    </form>

    <a href="{{ route('welcome') }}">戻る</a>