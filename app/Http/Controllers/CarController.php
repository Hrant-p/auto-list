<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function allCars () {
        $car = new Car;
        dd($car->all());
    }

    public function addCar() {

    }

    public function showCar() {

    }


    public function deleteCar() {

    }

    public function updateCar() {

    }
}
