<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search-result', function () {
    return view('search-result');
});

Route::get('/search-result/room', function () {
    return view('room');
});

Route::get('/search-result/apartment', function () {
    return view('apartment');
});

Route::get('/booking', function () {
    return view('booking');
});


//Customer








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
