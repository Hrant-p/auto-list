@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Details</h3>
        </div>
        <div class="card-body">
            <img class="img-responsive" src="/storage/car_image/{{$car->img}}" alt="Card image cap">
        </div>
        <div class="card-body">
            <h5 class="card-title">Manufacturer - {{$car->model_id}}</h5>
            <p class="card-text">Model - {{$car->name}}</p>
            <p class="card-text">Year - {{$car->year}}</p>
            <p class="card-text">Price - {{$car->price}}$</p>
            <p class="card-text">Created at {{$car->created_at}}</p>
            <p class="card-text">Published by {{$car->user->name}}</p>
        </div>
        <div class="card-footer">
            @if(!Auth::guest())
                @if(Auth::user()->id === $car->user->id)
                    <div class="row justify-content-around">
                        <a
                            href="{{route('edit-car', $car->id)}}"
                            class="btn btn-info"
                        >
                            Edit
                        </a>
                        <form
                            action="{{route('delete-car', $car->id)}}"
                            method="post"
                            enctype="multipart/form-data"
                        >
                            @csrf
                            @method('delete')
                            <button
                                type="submit"
                                class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </div>
                @endif
            @endif
        </div>
    </div>

@endsection
