<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $amenities = Amenity::all();
        return view('amenities.index', compact('amenities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('amenities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|unique:amenities,code',
            'abbreviation' => 'nullable',
            'description' => 'required',
        ]);

        Amenity::create($validated);

        return redirect()->route('amenities.index')->with('success', 'Ameniti berjaya ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Amenity $amenity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Amenity $amenity)
    {
        return view('amenities.edit', compact('amenity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Amenity $amenity)
    {
        $validated = $request->validate([
            'code' => 'required|unique:amenities,code,' . $amenity->id,
            'abbreviation' => 'nullable',
            'description' => 'required',
        ]);

        $amenity->update($validated);

        return redirect()->route('amenities.index')->with('success', 'Ameniti berjaya dikemaskini.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Amenity $amenity)
    {
        $amenity->delete();

        return redirect()->route('amenities.index')->with('success', 'Ameniti berjaya dihapuskan.');
    }
}
