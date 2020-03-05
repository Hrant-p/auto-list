<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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

        $this->validate($request, [
            'model_id' => 'required',
            'name' => 'required',
            'year' => 'required',
            'price' => 'required',
        ]);

        Car::create($data);

        return redirect('/')->with([
            'success' => 'Car info successfully added!'
        ]);
    }


    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('show-car', compact('car'));
    }


    public function delete($id)
    {
        $current_car = Car::findOrFail($id);
        $current_car->delete();
        return redirect('/')->with([
            'success' => 'Car successfully deleted'
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'model_id' => 'required',
            'name' => 'required',
            'year' => 'required',
            'price' => 'required',
        ]);

        $data = $request->except('img', '_token', '_method');

        if ($request->input('img')) {
            $data['img'] = $request->input('img');
        }

        Car::where('id', $id)->update($data);

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
