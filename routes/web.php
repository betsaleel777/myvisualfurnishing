<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'FrontController@index')->name('acceuil');
Route::prefix('frontal')->group(function () {
    Route::get('/', 'FrontController@index')->name('welcome');
    Route::get('/shop-single', 'FrontController@single')->name('shop-single');
});

Route::prefix('office')->group(function () {
    Route::get('/', 'BackController@index');
    Route::get('/dashboard', 'BackController@index')->name('dashboard');
//Route::get('/deconnect', '\App\Http\Controllers\Auth\LoginController@deconnect')->name('deconnect');
    Route::get('/deconnect', 'BackController@deconnect')->name('deconnect');

    Route::prefix('marques')->group(function () {
        Route::get('/', 'MarquesController@index')->name('marque_index');
    });
});

