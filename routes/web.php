<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/films/search","App\Http\Controllers\FilmController@search");

Route::get("/films",'App\Http\Controllers\FilmController@index');

Route::post("/films/", 'App\Http\Controllers\FilmController@store');
Route::get("/films/create",'App\Http\Controllers\FilmController@create');

Route::post("/films/{user}", 'App\Http\Controllers\FilmController@detachFilmFromUser');

Route::get("/films/{user}/edit",'App\Http\Controllers\FilmController@edit');
Route::put("/films/{user}", 'App\Http\Controllers\FilmController@update');

Route::get("/films/{user}",'App\Http\Controllers\FilmController@show');



