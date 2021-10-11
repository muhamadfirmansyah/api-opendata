<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::with('level')->orderBy('id', 'ASC')->get();

        return response()->json($areas, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->only('name', 'level_id', 'code', 'latitude', 'longitude'), [
            "name" => "required|max:255|string",
            "level_id" => "required|exists:levels,id",
            "code" => "required|max:255",
            "latitude" => "required",
            "longitude" => "required"
        ]);

        if ($validator->fails()) {
            return response()->json([
                "data" => $validator->getMessageBag(),
                "error" => true
            ], 400);
        }

        Area::create($validator->validated());

        return response()->json([
            "message" => "success",
            "error" => false
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        return response()->json($area, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        $validatedData = $request->validate([
            "name" => "required|max:255|string",
            "level_id" => "required|exists:levels,id",
            "code" => "required|max:255",
            "latitude" => "required",
            "longitude" => "required"
        ]);

        $area->update($validatedData);

        return response()->json([
            "message" => "success",
            "error" => false
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        $area->delete();

        return response()->json([
            "message" => "success",
            "error" => false
        ], 200);
    }
}
