<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient; 

class IngredientController extends Controller
{
  
    public function welcome()
    {
        $ingredients = Ingredient::all();

        return view('welcome', compact('ingredients'));
    }

    public function store(Request $request)
    {
        $ingredient = new Ingredient(); 
        $ingredient->ingredients_name = $request->ingredients_name;
        $ingredient->best_my_date = $request->best_my_date;  
        $ingredient->save();

        return redirect()->action([IngredientController::class, 'welcome']);
    }

}
