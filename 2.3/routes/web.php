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
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/guitars/{guitar}', function($guitar) {
    $guitars = [
        'strat' => 'Standard Mexican Strat',
        'les-paul' => 'Gibson Les Paul Studio'
    ];

    if (!array_key_exists($guitar, $guitars)) {
        abort(404);
    }

   return view('guitar', [
       'description' => $guitars[$guitar]
   ]);
});
