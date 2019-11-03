<?php

namespace App\Http\Controllers;

use App\Guitar;
use Illuminate\Http\Request;

class GuitarsController extends Controller
{
    public function index() {
        

        return view('guitars.index', [
            'guitars' => Guitar::all()
        ]);
    }
    
    public function show($guitar) {
       
    
        
    
       return view('guitars.show', [
           'guitar' => Guitar::findOrFail($guitar)
       ]);
    }

    public function create() {
        return view('guitars.create');
    }

    public function store() {
        request()->validate([
            'title' => 'required',
            'make' => 'required',
            'year' => ['required','integer'],
            'description' => 'required',
        ]);

        $guitar = new Guitar();
        $guitar->title = request('title');
        $guitar->make = request('make');
        $guitar->year = request('year');
        $guitar->description = request('description');

        $guitar->save();

        return redirect()->route('guitars.index');

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
