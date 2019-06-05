<?php

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

Route::get('/users', function () {
    return view('welcome');
});

Route::namespace('API')->group(function () {
    Route::prefix('/products')->group(function(){

        Route::get('/', 'ProductController@index')->name('products');

        Route::get('/{id}', 'ProductController@show')->name('single_product');

        Route::post('/', 'ProductController@store')->name('store_product');

        Route::put('/{id}', 'ProductController@update')->name('update_product');

    });
    
});