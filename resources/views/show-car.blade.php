@extends('layouts.app')

@section('content')
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{--Todo image source --}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$car->model_id}}</h5>
            <p class="card-text">{{$car->name}}</p>
            <p class="card-text">{{$car->year}}</p>
            <p class="card-text">{{$car->price}}$</p>
            <a href="{{route('get-all-cars')}}" class="btn btn-primary">
                Go to home
            </a>
        </div>
    </div>
@endsection
