<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TournamentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;


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
Route::get('/naiso',function(){
    return view('welcome');
});

Route::resource('/players',PlayerController::class)->middleware('auth');
Route::resource('/tournaments',TournamentController::class)->middleware('auth');
Route::resource('/teams',TeamController::class)->middleware('auth');
Route::resource('/coachs',CoachController::class)->middleware('auth');

Route::get('/login', AuthenticationController::class . '@loginIndex')->name('login');
Route::get('/register', AuthenticationController::class . '@registerIndex');
Route::post('/login', AuthenticationController::class . '@login');
Route::post('/register', AuthenticationController::class . '@register');
Route::get('/logout', AuthenticationController::class . '@logout');
