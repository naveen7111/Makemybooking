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

Route::get('/search-result', 'PropertyController@index');

Route::post('/search-result', 'SearchController@search')->name('search');

Route::get('/search-result/room/{pId}', 'PropertyController@roomView')->name('room');

Route::get('/search-result/apartment/{pId}', 'PropertyController@apartmentView')->name('apartment');



Route::get('/booking', function () {
    return view('booking');
});


//Customer

Route::post('/register-details', 'Auth\RegisterController@details')->name('register-details');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
