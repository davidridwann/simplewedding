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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/my-wedding', 'WeddingController@index')->name('wedding');
    Route::get('/my-wedding/create', 'WeddingController@create')->name('wedding.create');
    Route::get('/my-wedding/edit/{id}', 'WeddingController@edit')->name('wedding.edit');
    Route::post('/my-wedding/store', 'WeddingController@store')->name('wedding.store');
    Route::post('/my-wedding/update/{id}', 'WeddingController@update')->name('wedding.update');
    Route::get('/my-wedding/destroy/{id}', 'WeddingController@destroy')->name('wedding.destroy');

    Route::get('/my-weddings/{id?}', 'WeddingController@show')->name('wedding.show');

});
