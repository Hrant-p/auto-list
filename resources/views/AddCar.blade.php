@extends('layouts.App')

@section('title-block')
    Add Cars
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add Cars</h1>
            <form action="{{ route('post-car-data') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="make">Make</label>
                    <select
                        name="model_id"
                        id="make"
                        class="form-control"
                    >
                        <option disabled selected>Model</option>
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
                        name="name"
                        value=""
                        placeholder="Name"
                        id="name"
                        class="form-control"
                    >
                </div>
                <div class="form-group">
                    <label for="year">Year</label>
                    <input
                        type="date"
                        name="year"
                        value=""
                        placeholder="Year"
                        id="year"
                        class="form-control"
                    >
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input
                        type="number"
                        name="price"
                        value=""
                        placeholder="Price"
                        id="price"
                        class="form-control"
                    >
                </div>
                <div class="form-group">
                    <label for="img">img</label>
                    <input
                        type="file"
                        name="img"
                        value=""
                        placeholder="img"
                        id="img"
                        class="form-control"
                    >
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
