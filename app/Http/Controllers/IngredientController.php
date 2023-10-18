<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient; 

class IngredientController extends Controller
{

    public function welcome()
    {
        $ingredients = Ingredient::where('user_id', \Auth::user()->id)->get();

        return view('welcome', compact('ingredients'));
    }


    public function create()
    {
        return view('create');
    }

    public function question()
    {
        return view('question');
    }

    public function show($id)
    {
        $ingredient = Ingredient::find($id);
        return view('show')->with('ingredient', $ingredient);

    }

    public function edit($id)
    {
        $ingredient = Ingredient::find($id);
        return view('edit')->with('ingredient', $ingredient);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ingredients_name' => 'required',
            'best_my_date' => 'required',
        ]);
        
        $ingredient_name = $request->input('ingredients_name');
        $best_my_date = $request->input('best_my_date');  

        $ingredient = Ingredient::find($id);
        $ingredient->user_id = \Auth::id();
        $ingredient->ingredients_name = $ingredient_name;
        $ingredient->best_my_date = $best_my_date;
        $ingredient->save();

        return redirect('weilcome');
    }

    public function destroy($id)
    {
      $ingredient = Ingredient::find($id);
      $ingredient->delete();
      return redirect('welcome');
    }


    public function store(Request $request)
    {
        $request->validate([
            'ingredients_name' => 'required',
            'best_my_date' => 'required',
        ]);
        
        $ingredient_name = $request->input('ingredients_name');
        $best_my_date = $request->input('best_my_date');  

        $ingredient = new Ingredient();
        $ingredient->user_id = \Auth::id();
        $ingredient->ingredients_name = $ingredient_name;
        $ingredient->best_my_date = $best_my_date;
        $ingredient->save();

        return redirect()->action([IngredientController::class, 'welcome']);
    }

    public function user()
    {
        return $this->belongsRTO(User::class);
    }
}
