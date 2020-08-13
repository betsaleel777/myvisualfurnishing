<?php

use Illuminate\Support\Facades\Route;

Route::get('/','FrontController@index')->name('acceuil') ;
Route::prefix('frontal')->group( function(){
   Route::get('/','FrontController@index')->name('welcome') ;
}) ;
