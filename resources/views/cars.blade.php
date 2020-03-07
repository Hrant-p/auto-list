@extends('layouts.app')

@section('title-block')
    Home page
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            @if($cars->count())
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Car Image</th>
                        <th scope="col">Make</th>
                        <th scope="col">Model</th>
                        <th scope="col">Year</th>
                        <th scope="col">Price</th>
                        <th scope="col">Published by</th>
                        <th scope="col">Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <td>{{$car->id}}</td>
                            <td>
                                <img src={{$car->img}} alt="car_image" class="img-responsive">
                            </td>
                            <th scope="row"> {{$car->model_id}}</th>
                            <td scope="row">{{$car->name}}</td>
                            <td scope="row">{{$car->year}}</td>
                            <td scope="row">{{$car->price}}</td>
                            <td scope="row">{{$car->user_id}}</td>
                            <td scope="row">
                                <a
                                    href="{{route('show-car', $car->id)}}"
                                    class="btn btn-info"
                                >
                                    Details
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    @else
                        <div class="card text-center">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">There is no cars</h5>
                                <p class="card-text">***</p>
                                <a href="{{route('car-add-form')}}" class="btn btn-primary">
                                    Load your car announcement
                                </a>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                        </div>
                    @endif
                    </tbody>
                </table>
        </div>
    </div>
@endsection
