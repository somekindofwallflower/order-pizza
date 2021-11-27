<?php

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


Route::get('/pizzas', 'PizzaController@index')->middleware('auth');
Route::get('/pizzas/create', 'PizzaController@create');
Route::get('/pizzas/{id}', 'PizzaController@show')->middleware('auth');
Route::post('/pizzas', 'PizzaController@store');
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->middleware('auth');

// php artisan route:list -> Use this command to see all the routes of the app and by including an array with respective route with the boolean value it is possible to disable a route
Auth::routes([register => false]);

Route::get('/home', 'HomeController@index')->name('home');
