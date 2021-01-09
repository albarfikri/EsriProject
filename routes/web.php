<?php

use App\Http\Controllers\PetugasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DrainaseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

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

// Route::get('/', function () {
//     return "Hallo";
// });

Route::prefix('petugas')->group(function () {
    $controller = PetugasController::class;
    Route::get('/', [$controller, 'index']);
    Route::post('/addPetugas', [$controller, 'addPetugas']);
});

Route::prefix('drainase')->group(function () {
    $controller = DrainaseController::class;
    Route::get('/', [$controller, 'index']);
    Route::post('/addDrainase', [$controller, 'addDrainase']);
});

Route::get('/', [ViewController::class, "index"]);
Route::post('/auth', [AuthController::class, "login"]);
Route::get('/drainase', [ViewController::class, "drainase"]);
Route::get('/tersumbat', [ViewController::class, "tersumbat"]);
Route::get('/banjir', [ViewController::class, "banjir"]);
Route::get('/laporan', [ViewController::class, "laporan"]);
