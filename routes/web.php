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


    Route::get('/pizzas', function () {
        $pizzas = [
            [
                'type'  => 'Margarita',
                "base"  => "cheesy crust",
                "price" => 20,
            ],
            [
                'type'  => 'Margarita',
                "base"  => "cheesy crust",
                "price" => 20,
            ],
            [
                'type'  => 'Margarita',
                "base"  => "cheesy crust",
                "price" => 20,
            ],
        ];

    $age = request('age');
    return view('pizzas', [
        'pizzas' => $pizzas,
        'name' => request('name'),
        'age' => $age
    ]);
});

Route::get('/pizzas/{id}', function($id) {
    // Use the $id variable to quesry the db for a record
    return view('details', ['id' => $id]);
});