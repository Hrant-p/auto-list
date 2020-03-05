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

Route::get('/', 'CarController@index')->name('get-all-cars');

Route::get('/add-car', 'CarController@add')->name('car-add-form');
Route::post('/add-car', 'CarController@store')->name('add-new-car');

Route::get('/car/{id}', 'CarController@show')->name('show-car');
Route::get('/car/edit/{id}', 'CarController@edit')->name('edit-car');
Route::put('/car/update/{id}', 'CarController@update')->name('update-car');
Route::delete('/car/delete/{id}', 'CarController@delete')->name('delete-car');
