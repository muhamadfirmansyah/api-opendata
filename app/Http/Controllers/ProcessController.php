<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProcessController extends Controller
{
    public function search(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "latitude" => "required",
            "longitude" => "required"
        ]);

        if ($validator->fails()) {
            return response()->json([
                "message" => "Parameter error",
                "error" => true
            ], 400);
        }

        $latitude = $request->latitude;
        $longitude = $request->longitude;

        $places = Place::select(
            "*",
            DB::raw(
                "6371 * acos(cos(radians($latitude)) 
                        * cos(radians(latitude)) 
                        * cos(radians(longitude) - radians($longitude)) 
                        + sin(radians($latitude)) 
                        * sin(radians(latitude))) AS distance"
            )
        )->get()->where('distance', '<=', 5);


        $response = [];
        foreach ($places as $key => $place) {
            $response[] = [
                "id" => $place->id,
                "name" => $place->name,
                "category_id" => 1,
                "city_name" => $place->city->name,
                "district_name" => $place->district->name,
                "latitude" => $place->latitude,
                "longitude" => $place->longitude,
                "distance" => $place->distance,
            ];
        }

        return response()->json($response, 200);
    }
}
