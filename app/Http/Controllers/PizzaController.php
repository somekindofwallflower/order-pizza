<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
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
    }

    public function show($id) {
        // Use the $id variable to query the db for a record
        return view('details', ['id' => $id]);
}
}
