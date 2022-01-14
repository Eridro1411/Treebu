<?php

use App\Http\Controllers\GroundController;
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
Route::get("/list",[GroundController::class,"list"]);
Route::get("/detail/{id}",[GroundController::class,"detail"]);
Route::post("/create",[GroundController::class,"create"]);
Route::put("/edit/{id}",[GroundController::class,"edit"]);
