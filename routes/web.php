<?php

use App\Http\Controllers\FlightsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\RestourentCommentsController;
use App\Http\Controllers\RestourentController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index' , function(){
    return view ('pages.index');
});
Route::get('/flights', [App\Http\Controllers\FlightsController::class , 'index'])->name('flights');
Route::get('/search-flights', [FlightsController::class , 'searchFlight'])->name('search-flights');
Route::get('/hotels' , [HotelsController::class , 'index'])->name('hotels');
Route::get('/search-hotels', [HotelsController::class , 'searchHotel'])->name('search-hotels');
Route::get('/restourent' , [RestourentController::class , 'index']);
Route::get('/search-restourents' , [RestourentController::class , 'searchRestourents'])->name('search-restourents');
Route::get('/restourents/detail/{id}' , [RestourentController::class , 'details']);
Route::get('/restourent-comments', [RestourentCommentsController::class , 'store']);
Route::get('/reserve' , [RestourentController::class , 'reserve']);
