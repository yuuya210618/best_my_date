<form method="post" action="{{ route('store') }}">
    @csrf
        <input type="ingredients_name" name="ingredients_name">
        <input type="best_my_date" name="best_my_date">
        <button>食品追加</button>
    </form>