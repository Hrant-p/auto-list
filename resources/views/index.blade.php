@extends('layouts.app')

@section('title-block')
    Home page
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Car Image</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Year</th>
                    <th scope="col">Price</th>
                </tr>
                </thead>
                <tbody>
                @if($cars->count())
                    @foreach($cars as $car)
                        <tr>
                            <td>{{$car->id}}</td>
                            <td>
                                <img src={{$car->img}} alt="car_image" class="img-responsive">
                            </td>
                            <th scope="row"> {{$car->model_id}}</th>
                            <td>{{$car->name}}</td>
                            <td>{{$car->year}}</td>
                            <td>{{$car->price}}</td>
                            <td>
                                <a href="{{route('edit-car', $car->id)}}">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
               </tbody>
            </table>
        </div>
    </div>

@endsection
