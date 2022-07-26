<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\auth\RegistrationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieLinkController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,"index"]);


Route::get('/login', [LoginController::class,"index"])->name("login");

Route::post('/login-check', [LoginController::class,"login"]);
Route::get('/registration',[RegistrationController::class,"index"]);
Route::post('/user-store',[RegistrationController::class,"store"]);

Route::get('/dashboard',[DashboardController::class,"index"])->middleware("auth");
Route::get('/create-movie-link',[MovieLinkController::class,"create"])->middleware("auth");
Route::post('/movie-link-store',[MovieLinkController::class,"store"])->middleware("auth");
Route::get('/categorys',[CategoryController::class,"index"])->middleware("auth");
Route::get('/create-category',[CategoryController::class,"newCategory"])->middleware("auth");
Route::post('/category-store',[CategoryController::class,"store"])->middleware("auth");

