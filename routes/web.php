<?php

use App\Http\Controllers\LandingController;
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

// Route::get('/', function ()
// {
//     return view('welcome');
// });

Route::resource('/', LandingController::class);

Route::get('clubs', [LandingController::class, 'clubs'])->name('landing.clubs');
Route::get('players', [LandingController::class, 'players'])->name('landing.players');
Route::get('managers', [LandingController::class, 'managers'])->name('landing.managers');
Route::get('stadiums', [LandingController::class, 'stadiums'])->name('landing.stadiums');