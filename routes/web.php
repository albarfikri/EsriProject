<?php

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

Route::get('/', [ViewController::class, "index"]);
Route::get('/petugas', [ViewController::class, "petugas"]);
Route::get('/drainase', [ViewController::class, "drainase"]);
Route::get('/tersumbat', [ViewController::class, "tersumbat"]);
Route::get('/banjir', [ViewController::class, "banjir"]);
Route::get('/laporan', [ViewController::class, "laporan"]);
