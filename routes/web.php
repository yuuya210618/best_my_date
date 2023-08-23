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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', [IngredientController::class, 'welcome'])->name('welcome'); //追加

Route::post('/store', [IngredientController::class, 'store'])->name('store'); //追加

Route::get('/create', [IngredientController::class, 'create'])->name('create');