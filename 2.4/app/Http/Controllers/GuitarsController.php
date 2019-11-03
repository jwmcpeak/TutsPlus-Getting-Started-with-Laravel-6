<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuitarsController extends Controller
{
    public function show($guitar) {
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
    }
}
