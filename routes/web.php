<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;

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

// Route::get('games',[GameController::class,'index'])->name('games');
// Route::get('games/{id}',[GamesController::class,'show']);
Route::get('/games', 'GameController@index');
Route::get('/games/create','GameController@create');
Route::post('/games','GameController@store');
Route::get('/games/{id}', 'GameController@show');

