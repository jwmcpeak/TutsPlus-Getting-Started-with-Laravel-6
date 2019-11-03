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
    
    public function show(Guitar $guitar) {
       return view('guitars.show', [
           'guitar' => $guitar
       ]);
    }

    public function create() {
        return view('guitars.create');
    }

    public function store() {
        $validated = request()->validate([
            'title' => 'required',
            'make' => 'required',
            'year' => ['required','integer'],
            'description' => 'required',
        ]);

        Guitar::create($validated);

        return redirect()->route('guitars.index');

    }

    public function edit(Guitar $guitar) {
        return view('guitars.edit', [
            'guitar' => $guitar
        ]);
    }

    public function update(Guitar $guitar) {
        $validated = request()->validate([
            'title' => 'required',
            'make' => 'required',
            'year' => ['required','integer'],
            'description' => 'required',
        ]);

        $guitar->update($validated);

        return redirect()->route('guitars.show', $guitar->id);
    }
}
