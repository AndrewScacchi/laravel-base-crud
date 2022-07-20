<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


// Right now i'm deliberately NOT using a controller, will use it for CRUD
Route::get('/', function(){
    $comics = \App\Comic::all();
    return view('home', compact('comics'));
})->name('home');
// index
Route::get('/list', function(){
    return view('list');
})->name('list');
Route::get('/about', function(){
    return view('about');
})->name('about');

// Route::get('/list', 'HomeController@list')->name('list');
// Route::get('/about', 'HomeController@about')->name('about');
