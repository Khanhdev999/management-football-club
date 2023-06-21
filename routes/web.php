<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TournamentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});


Route::resource('/players',PlayerController::class);
Route::resource('/tournaments',TournamentController::class);
Route::resource('/teams',TeamController::class);
Route::resource('/coachs',CoachController::class);

