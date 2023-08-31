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


Route::get('/', function(){
    return redirect()->route('countries');
});


Route::prefix('countries')->group(function () {
    Route::get('create', 'CountryController@create')->name('countries.create');
    Route::get('', 'CountryController@index')->name('countries');
    Route::get('{country}', 'CountryController@show')->name('countries.show');
    Route::post('', 'CountryController@store')->name('countries.store');
    Route::get('{country}/edit', 'CountryController@edit')->name('countries.edit');
    Route::put('{country}', 'CountryController@update')->name('countries.update');
    Route::delete('{country}', 'CountryController@destroy')->name('countries.destroy');
});

Route::prefix('users')->group(function () {
    Route::get('create', 'UserController@create')->name('users.create');
    Route::get('', 'UserController@index')->name('users');
    Route::get('{user}', 'UserController@show')->name('users.show');
    Route::post('', 'UserController@store')->name('users.store');
    Route::get('{user}/edit', 'UserController@edit')->name('users.edit');
    Route::put('{user}', 'UserController@update')->name('users.update');
    Route::delete('{user}', 'UserController@destroy')->name('users.destroy');
});


Route::prefix('bicycles')->group(function () {
    Route::get('create', 'BicycleController@create')->name('bicycles.create');
    Route::get('', 'BicycleController@index')->name('bicycles');
    Route::get('{bicycle}', 'BicycleController@show')->name('bicycles.show');
    Route::post('', 'BicycleController@store')->name('bicycles.store');
    Route::get('{bicycle}/edit', 'BicycleController@edit')->name('bicycles.edit');
    Route::put('{bicycle}', 'BicycleController@update')->name('bicycles.update');
    Route::delete('{bicycle}', 'BicycleController@destroy')->name('bicycles.destroy');
});
