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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['namespace' => 'Home'], function (){

    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/category/{id}', 'HomeController@category')->name('home.category');
    Route::get('/product/{id}', 'HomeController@product')->name('home.product');


    Route::group(['prefix' => 'cabinet', 'middleware' => 'auth'], function () {
        Route::get('/', 'HomeController@cabinet')->name('cabinet.index');


        Route::group(['prefix' => 'product',], function () {
            Route::get('/', 'ProductController@index')->name('products.index');
            Route::post('/', 'ProductController@store')->name('products.store');
            Route::put('/{id}', 'ProductController@edit')->name('products.edit');
            Route::post('/{product}', 'ProductController@update')->name('products.update');
            Route::delete('/{id}', 'ProductController@delete')->name('products.delete');
        });

        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'CategoryController@index')->name('category.index');
            Route::post('/', 'CategoryController@store')->name('category.store');
            Route::put('/{id}', 'CategoryController@edit')->name('category.edit');
            Route::post('/{category}', 'CategoryController@update')->name('category.update');
            Route::delete('/{id}', 'CategoryController@delete')->name('category.delete');
        });
    });


});

