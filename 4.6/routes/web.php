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
    return view('welcome', [
        'name' => request('name') ?? 'Person'
    ]);
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/guitars', 
    'GuitarsController@index')->name('guitars.index');

Route::get('/guitars/create', 
    'GuitarsController@create')->name('guitars.create');

Route::get('/guitars/{guitar}', 
    'GuitarsController@show')->name('guitars.show');

Route::post('/guitars', 
    'GuitarsController@store')->name('guitars.store');

Route::get('/guitars/{guitar}/edit', 
    'GuitarsController@edit')->name('guitars.edit');

Route::put('/guitars/{guitar}', 
    'GuitarsController@update')->name('guitars.update');
