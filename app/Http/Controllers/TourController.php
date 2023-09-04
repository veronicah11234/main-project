<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('tours.index', compact('tours'));
    }

    public function show($id)
    {
        $tour = Tour::findOrFail($id);
        return view('tours.show', compact('tour'));
    }

    public function edit($id)
    {
        $tour = Tour::findOrFail($id);
        return view('tours.edit', compact('tour'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'availability' => 'required'
        ]);

        Tour::create($validatedData);

        return redirect()->route('tours.index')->with('success', 'Tour created successfully.');
    }

    public function update(Request $request, $id)
    {
        $tour = Tour::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'availability' => 'required'
        ]);

        $tour->update($validatedData);

        return redirect()->route('tours.index')->with('success', 'Tour updated successfully.');
    }

    public function destroy($id)
    {
        $tour = Tour::findOrFail($id);
        $tour->delete();

        return redirect()->route('tours.index')->with('success', 'Tour deleted successfully.');
    }
    
    // Add other methods as needed.
}
