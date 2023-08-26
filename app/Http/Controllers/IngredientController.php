<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ingredient; 

class IngredientController extends Controller
{

    public function welcome()
    {
        $user = Auth::user(); // ログイン中のユーザー情報を取得
        $ingredients = Ingredient::where('user_id', $user->id)->get(); // ログインユーザーが投稿した記事を取得

        return view('welcome', compact('ingredients'));
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $ingredient_name = $request->input('ingredients_name');
        $best_my_date = $request->input('best_my_date');  

        $ingredient = new Ingredient();
        $ingredient->ingredients_name = $ingredient_name;
        $ingredient->best_my_date = $best_my_date;
        $ingredient->save();

        return redirect()->action([IngredientController::class, 'welcome']);
    }

}
