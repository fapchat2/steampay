<?php

use App\Http\Controllers\PaginationController;
use App\Http\Controllers\TrashController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PaginationController::class, 'index']);
Route::get('/pagination/fetch_data', [PaginationController::class, 'fetch_data']);
Route::get('/trash_can', [TrashController::class, 'index']);

Route::get('/adventures', function () {
    return view('genres.adventures');
});

Route::get('/action', function () {
    return view('genres.action');
});