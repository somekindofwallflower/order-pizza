@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1 class="view-all-pizzas"><a style="color: white;" href="{{route('pizzas.index')}}">View all pizza orders</a></h1>
            </div>
        </div>
@endsection
