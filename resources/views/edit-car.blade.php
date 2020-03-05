@extends('layouts.app')

@section('title-block')
    Edit Car
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add Cars</h1>
            <form
                action="{{ route('update-car', $car->id) }}"
                method="post"
                enctype="multipart/form-data"
            >
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="make">Make</label>
                    <select
                        name="model_id"
                        id="make"
                        class="form-control"
                        required
                    >
                        <option selected>{{$car->model_id}}</option>
                        <option value="1">Mercedes</option>
                        <option value="2">BMW</option>
                        <option value="3">Audi</option>
                        <option value="4">Porsche</option>
                        <option value="5">Toyota</option>
                        <option value="6">Nissan</option>
                        <option value="7">Volvo</option>
                        <option value="8">Mazda</option>
                        <option value="9">Cadillac</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input
                        type="text"
                        id="name"
                        class="form-control"
                        name="name"
                        value="{{$car->name}}"
                        placeholder="Name"
                        minlength="2"
                        required
                    >
                </div>
                <div class="form-group">
                    <label for="year">Year</label>
                    <input
                        type="date"
                        name="year"
                        value="{{$car->year}}"
                        placeholder="Year"
                        id="year"
                        class="form-control"
                        minlength="4"
                        required
                    >
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input
                        type="number"
                        name="price"
                        value="{{$car->price}}"
                        placeholder="Price"
                        id="price"
                        class="form-control"
                        required
                    >
                </div>
                <div class="form-group">
                    <label for="img">Select Image File</label>
                    <input
                        type="file"
                        name="img"
                        value=""
                        placeholder="Select Image File"
                        id="img"
                        class="form-control"
                    >
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
