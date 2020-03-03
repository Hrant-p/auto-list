<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('index', compact('cars'));
    }

    public function add()
    {
        return view('add-car');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        //Todo Add validation

        Car::create($data);

        return redirect('/')->with([
            'success' => 'Car info successfully added!'
        ]);
    }


    public function showCar($id)
    {

    }


    public function deleteCar($id)
    {

    }

    public function updateCar(Request $request, $id)
    {

    }
}
