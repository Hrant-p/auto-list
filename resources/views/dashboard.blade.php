@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        @if($cars->count())
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Car Image</th>
                        <th scope="col">Make</th>
                        <th scope="col">Model</th>
                        <th scope="col">Year</th>
                        <th scope="col">Price</th>
                        <th scope="col">Details</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($cars as $car)
                    <tr>
                        <td>
                            <img src={{$car->img}} alt="car_image" class="img-responsive">
                        </td>
                        <th scope="row"> {{$car->model_id}}</th>
                        <td scope="row">{{$car->name}}</td>
                        <td scope="row">{{$car->year}}</td>
                        <td scope="row">{{$car->price}}</td>
                        <td scope="row">
                            <a
                                href="{{route('show-car', $car->id)}}"
                                class="btn btn-info"
                            >
                                Details
                            </a>
                        </td>
                        <td scope="row">
                            <a
                                href="{{route('edit-car', $car->id)}}"
                                class="btn btn-info"
                            >
                                Edit
                            </a>
                        </td>
                        <td>
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
                        </td>
                    </tr>
                @endforeach
                @else
                    <h5 class="card-title">Yuo dont have announcements</h5>
                    <a href="{{route('car-add-form')}}" class="btn btn-primary">
                        Load your car announcement
                    </a>
                    <div class="card-footer text-muted">
                    </div>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
