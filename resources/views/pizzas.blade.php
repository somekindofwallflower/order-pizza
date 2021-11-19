@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        <p>{{ $name }} - {{ $age  }}</p>

        @foreach($pizzas as $pizza)
           <p>{{ $pizza['name'] }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}</p>
        @endforeach
    </div>
</div>
@endsection