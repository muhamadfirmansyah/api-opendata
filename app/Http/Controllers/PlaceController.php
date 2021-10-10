<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::with('category', 'city', 'district')->get();

        return response()->json($places, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|max:255|string", 
            "category_id" => "required|exists:categories,id", 
            "city_id" => "required|exists:areas,id", 
            "district_id" => "required|exists:areas,id", 
            "latitude" => "required|max:255", 
            "longitude" => "required|max:255"
        ]);

        Place::create($validatedData);

        return response()->json([
            "message" => "success",
            "error" => false
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        return response()->json($place, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $validatedData = $request->validate([
            "name" => "required|max:255|string", 
            "category_id" => "required|exists:categories,id", 
            "city_id" => "required|exists:areas,id", 
            "district_id" => "required|exists:areas,id", 
            "latitude" => "required|max:255", 
            "longitude" => "required|max:255"
        ]);

        $place->update($validatedData);

        return response()->json([
            "message" => "success",
            "error" => false
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        $place->delete();

        return response()->json([
            "message" => "success",
            "error" => false
        ], 200);
    }
}
