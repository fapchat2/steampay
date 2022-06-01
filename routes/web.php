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

Route::get('/', [PaginationController::class, 'index']);
Route::get('/pagination/fetch_data', [PaginationController::class, 'fetch_data']);
Route::get('/trash_can', [TrashController::class, 'index']);


Route::get('/adventures', function () {
    return view('parts_of_the_website.genres.adventures');
});

Route::get('/action', function () {
    return view('parts_of_the_website.genres.action');
});
Route::get('/adventures', function () {
    return view('parts_of_the_website.genres.adventures');
});
Route::get('/all', function () {
    return view('parts_of_the_website.genres.all');
});
Route::get('/casual', function () {
    return view('parts_of_the_website.genres.casual');
});
Route::get('/race', function () {
    return view('parts_of_the_website.genres.race');
});
Route::get('/rpg', function () {
    return view('parts_of_the_website.genres.rpg');
});
Route::get('/simulators', function () {
    return view('parts_of_the_website.genres.simulators');
});
Route::get('/sport', function () {
    return view('parts_of_the_website.genres.sport');
});
Route::get('/strategies', function () {
    return view('parts_of_the_website.genres.strategies');
});
Route::get('/support', function () {
    return view('parts_of_the_website.support');
});
 

