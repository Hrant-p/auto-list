<?php

namespace App\Http\Controllers;

use App\Car;
use App\Manufacturer;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class CarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'index', 'show'
        ]]);
    }

    /**
     * Show the application dashboard.
     * @return Renderable
     */
    public function index()
    {
        $cars = Car::with('manufacturer')->get();
//        dd($cars);
        return view('cars', compact('cars'));
    }

    /**
     * Show the application dashboard.
     * @return Renderable
     */
    public function add()
    {
        $models = Manufacturer::all();
        return view('add-car', $models);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileNameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $fileNameToStore = $filename.time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/car_image', $fileNameToStore);
        } else {
            $fileNameToStore = 'no_image.jpg';
        }

        $data = array_merge($request->except('img'), [
            'user_id' => auth()->user()->id,
            'img' => $fileNameToStore
        ]);
        $this->validate($request, [
            'model_id' => 'required',
            'name' => 'required',
            'year' => 'required',
            'price' => 'required',
            'img' => 'image|nullable|max:1999'
        ]);

        Car::create($data);

        return redirect('/cars')->with([
            'success' => 'Car info successfully added!'
        ]);
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('car-details', compact('car'));
    }


    public function delete($id)
    {
        $current_car = Car::findOrFail($id);

        if (auth()->user()->id !== $current_car->user_id) {
            return redirect('/cars')->with([
                'error' => 'Unauthorized Page'
            ]);
        }

        if ($current_car->img != 'no_image.jpg') {
            Storage::delete('public/car_image/'.$current_car->img);
        }

        $current_car->delete();

        return redirect('/cars')->with([
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

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileNameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $fileNameToStore = $filename.time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/car_image', $fileNameToStore);
            $data['img'] = $fileNameToStore;
        }

        Car::where('id', $id)->update($data);

        return redirect('/cars')->with([
            'success' => 'Car info successfully updated'
        ]);
    }

    public function edit(Request $req, $id)
    {
        $car = Car::find($id);

        if (auth()->user()->id !== $car->user_id) {
            return redirect('/cars')->with([
                'error' => 'Unauthorized Page'
            ]);
        }

        return view('edit-car', compact('car'));
    }
}
