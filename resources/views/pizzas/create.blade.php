@extends('layouts.layout')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a new pizza</h1>
        <form action="/pizzas" method="POST">
            @csrf
            <label for="name"> Your name:</label>
            <input type="text" id="name" name="name">
            <label for="type"> Choose pizza type:</label>
            <select id="type" name="type">
                <option value="margarita">Margartita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="base"> Choose base type:</label>
            <select id="base" name="base">
                <option value="cheesy crust">Cheesy crust</option>
                <option value="garlic crust">Garlic crust</option>
                <option value="this & crispy">Thin & crispy</option>
                <option value="thick">Thick</option>
            </select>
            <fieldset>
                <label>Extra toppings</label>
                <input type="checkbox" name="toppings[]" value="mashrooms">Mushrooms <br>
                <input type="checkbox" name="toppings[]" value="peppers">Peepers <br>
                <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
                <input type="checkbox" name="toppings[]" value="olives">Olives <br>
            </fieldset>
            <input type="submit" value="Order Pizza">
        </form>
    </div>
@endsection