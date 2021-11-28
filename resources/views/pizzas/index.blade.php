@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
    <h1>Pizza orders</h1>
    @foreach($pizzas as $pizza)
        <div class="pizza-item">
            <img src="/img/small_pizza.png" alt="pizza icon">
            <h4>
                <a href="{{route('pizzas.show', $pizza->id)}}">
                    <p>{{ $pizza['name'] }}</p>
                </a>
            </h4> 
        </div>
    @endforeach
</div>
@endsection