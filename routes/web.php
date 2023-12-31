<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/logout', 'Auth\LogoutController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('ingredients', 'IngredientController');

Route::get('/welcome', [IngredientController::class, 'welcome'])->name('welcome'); 

Route::post('/store', [IngredientController::class, 'store'])->name('store'); 

Route::get('/create', [IngredientController::class, 'create'])->name('create');

Route::get('/question', [IngredientController::class, 'question'])->name('question');

