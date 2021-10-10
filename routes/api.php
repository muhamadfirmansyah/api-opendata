<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProcessController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/", function () {
    return response()->json([
        "You need to be validated!"
    ], 401);
})->name("login");

// Search
Route::get('/search', [ProcessController::class, "search"]);

// Authentication
Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);
Route::post("/me", [AuthController::class, "me"])->middleware("auth:sanctum");
Route::post('/logout', [AuthController::class, "logout"])->middleware("auth:sanctum");

// Aunthenticated
Route::middleware('auth:sanctum')->group(function() {
    Route::resource("/levels", "LevelController", [
        "except" => ["create", "edit"]
    ]);

    Route::resource("/areas", "AreaController", [
        "except" => ["create", "edit"]
    ]);

    Route::resource("/categories", "CategoryController", [
        "except" => ["create", "edit"]
    ]);

    Route::resource("/places", "PlaceController", [
        "except" => ["create", "edit"]
    ]);
});