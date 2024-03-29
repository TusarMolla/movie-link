<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\MovieLinkController;
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


Route::get("/sliders",[MovieLinkController::class,"sliders"]);
Route::get("/categories",[CategoryController::class,"index"]);
Route::get("/all-movies",[MovieLinkController::class,"index"]);
Route::get("/movie-details",[MovieLinkController::class,"details"]);

Route::get("/tranding-movies",[MovieLinkController::class,"tranding"]);
Route::get("/tv-series",[MovieLinkController::class,"tvSeries"]);
