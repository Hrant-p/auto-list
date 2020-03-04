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


    public function show($id)
    {

    }


    public function delete($id)
    {

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'model_id' => 'required',
            'name' => 'required',
            'year' => 'required',
            'price' => 'required',
        ]);

        $car_data = Car::find($id);
        $car_data->model_id = $request->input('model_id');
        $car_data->model_id = $request->input('name');
        $car_data->model_id = $request->input('year');
        $car_data->model_id = $request->input('price');
        if ($request->input('img')) {
            $car_data->model_id = $request->input('img');
        }
        $car_data->save();
        return redirect('/')->with([
            'success' => 'Car info successfully updated'
            ]);
    }

    public function edit(Request $req, $id)
    {
        $car = Car::find($id);
        return view('edit-car', compact('car'));
    }
}
