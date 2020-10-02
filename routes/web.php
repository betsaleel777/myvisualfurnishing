<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'FrontController@index')->name('acceuil');
Route::prefix('frontal')->group(
    function () {
        Route::get('/', 'FrontController@index')->name('welcome');
        Route::get('/shop-single', 'FrontController@single')->name('shop-single');
    }
);

Route::prefix('office')->group(
    function () {
        Route::get('/', 'BackController@index');
        Route::get('/dashboard', 'BackController@index')->name('dashboard');
        Route::get('/deconnect', 'BackController@deconnect')->name('deconnect');

        Route::prefix('marques')->group(
            function () {
                Route::get('/', 'MarquesController@index')->name('marques');
                Route::get('/add', 'MarquesController@add')->name('marque_add');
                Route::post('/store', 'MarquesController@store')->name('marque_store');
                Route::get('/edit/{id}', 'MarquesController@edit')->name('marque_edit');
                Route::post('/update', 'MarquesController@update')->name('marque_update');
                Route::get('/delete/{id}', 'MarquesController@delete')->name('marque_delete');
            }
        );

        Route::prefix('categories')->group(
            function () {
                Route::get('/', 'CategoriesController@index')->name('categories');
                Route::get('/add', 'CategoriesController@add')->name('categorie_add');
                Route::post('/store', 'CategoriesController@store')->name('categorie_store');
                Route::get('/edit/{id}', 'CategoriesController@edit')->name('categorie_edit');
                Route::post('/update', 'CategoriesController@update')->name('categorie_update');
                Route::get('/delete/{id}', 'CategoriesController@delete')->name('categorie_delete');
                Route::get('/show/{id}', 'CategoriesController@show')->name('categorie_show');
            }
        );

        Route::prefix('scategories')->group(
            function () {
                Route::get('/', 'ScategoriesController@index')->name('scategories');
                Route::get('/add/{categorie}', 'ScategoriesController@add')->name('scategorie_add');
                Route::post('/store', 'ScategoriesController@store')->name('scategorie_store');
                Route::get('/edit/{categorie}/{id}', 'ScategoriesController@edit')->name('scategorie_edit');
                Route::post('/update', 'ScategoriesController@update')->name('scategorie_update');
                Route::get('/delete/{id}', 'ScategoriesController@delete')->name('scategorie_delete');
            }
        );

        Route::prefix('enseignes')->group(
            function () {
                Route::get('/', 'EnseignesController@index')->name('enseignes');
                Route::get('/add', 'EnseignesController@add')->name('enseigne_add');
                Route::post('/store', 'EnseignesController@store')->name('enseigne_store');
                Route::get('/edit/{id}', 'EnseignesController@edit')->name('enseigne_edit');
                Route::post('/update', 'EnseignesController@update')->name('enseigne_update');
                Route::get('/delete/{id}', 'EnseignesController@delete')->name('enseigne_delete');
                Route::get('/show/{id}', 'EnseignesController@show')->name('enseigne_show');
            }
        );

        Route::prefix('magasins')->group(
            function () {
                //Route::get('/', 'MagasinsController@index')->name('magasins');
                Route::get('/add/{id}', 'MagasinsController@add')->name('magasin_add');
                Route::post('/store', 'MagasinsController@store')->name('magasin_store');
                Route::get('/edit/{id}', 'MagasinsController@edit')->name('magasin_edit');
                Route::post('/update', 'MagasinsController@update')->name('magasin_update');
                Route::get('/delete/{id}', 'MagasinsController@delete')->name('magasin_delete');
                //Route::get('/show/{id}', 'MagasinsController@show')->name('magasin_show');
            }
        );

    }
);
