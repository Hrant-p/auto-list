<?php

@extends('layouts.App')

@section('title-block')
    Add Cars
@endsection

@section('content')
    <h1>Add Cars</h1>
    <form action="{{ route('car-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="make">Make</label>
            <select
                name="make"
                placeholder="make"
                id="make"
                class="form-control"
            >
                <option value="Mercedes">Mercedes</option>
                <option value="BMW">BMW</option>
                <option value="Audi">Audi</option>
                <option value="Porsche">Porsche</option>
                <option value="Toyota">Toyota</option>
                <option value="Nissan">Nissan</option>
                <option value="Volvo">Volvo</option>
                <option value="Mazda">Mazda</option>
                <option value="Cadillac">Cadillac</option>
            </select>
        </div>
        <div class="form-group">
            <label for="model">Email</label>
            <input
                type="text"
                name="model"
                value=""
                placeholder="Model"
                id="model"
                class="form-control"
            >
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input
                type="text"
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
                type="text"
                name="price"
                value=""
                placeholder="Price"
                id="price"
                class="form-control"
            >
        </div>
        <button type="submit" class="btn btn-success">
            Create
        </button>
    </form>
@endsection
