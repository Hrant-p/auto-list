@extends('layouts.app');

@section('title-block')
    Home page
@endsection

@section('content')
    <div class="row">
        <div class="col-sm bg-primary">
            Car Image
        </div>
        <div class="col-sm bg-primary">
            Make
        </div>
        <div class="col-sm bg-primary">
            Name
        </div>
        <div class="col-sm bg-primary">
            Year
        </div>
        <div class="col-sm bg-primary">
            Price
        </div>
    </div>
    @if($cars->count() > 0)
        @foreach($cars as $car)
        <div class="row">
            <div class="col-sm bg-info">
                <img src={{$car->img}} alt="car_image" class="img-responsive">
            </div>
            <div class="col-sm bg-info">
                {{$car->model}}
            </div>
            <div class="col-sm bg-info">
                {{$car->name}}
            </div>
            <div class="col-sm bg-info">
                {{$car->year}}
            </div>
            <div class="col-sm bg-info">
                {{$car->price}}
            </div>
        </div>
        @endforeach
    @endif
@endsection
