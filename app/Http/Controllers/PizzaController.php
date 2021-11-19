<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index() {
        //$pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name')->get();
        //$pizzas = Pizza::orderBy('name', 'desc')->get();
        //$pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();
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
