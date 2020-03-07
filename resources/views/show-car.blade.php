@extends('layouts.app')

@section('content')
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{--Todo image source --}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Manufacturer - {{$car->model_id}}</h5>
            <p class="card-text">Model - {{$car->name}}</p>
            <p class="card-text">Year - {{$car->year}}</p>
            <p class="card-text">Price - {{$car->price}}$</p>
            <p class="card-text">Created at {{$car->created_at}}</p>
            <a href="{{route('get-all-cars')}}" class="btn btn-primary">
                Go to List
            </a>
            <a href="{{route('get-all-cars')}}" class="btn btn-primary">
                Go to Dashboard
            </a>
        </div>
    </div>
@endsection
