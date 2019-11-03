<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuitarsController extends Controller
{
    public function index() {
        return view('guitars.index', [
            'guitars' => $this->getData()
        ]);
    }
    
    public function show($guitar) {
        $guitars = $this->getData();
    
        if (!array_key_exists($guitar, $guitars)) {
            abort(404);
        }
    
       return view('guitars.show', [
           'guitar' => $guitars[$guitar]
       ]);
    }

    private function getData() {
        return [
            'strat' => [
                'title' => 'Fender American Standard Strat',
                'make' => 'Fender',
                'year' => '1992',
                'description' => 'This is the description for the American Strat'
            ],
            'les-paul' => [
                'title' => 'Gibson Les Paul Studio',
                'make' => 'Gibson',
                'year' => '2014',
                'description' => 'This is the description for the Les Paul'
            ]
        ];
    }
}
