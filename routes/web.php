<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.App');
})->name('home');

Route::get('/cars', 'CarController@allCars')->name('get-all-cars');

Route::get('/add-car', function () {
    return view('AddCar');
})->name('car-form');

Route::post('/add-car', 'CarController@addCar')->name('post-car-data');
