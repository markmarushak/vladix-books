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
    Route::group(['prefix' => 'cabinet', 'middleware' => 'auth'], function () {
        Route::get('/', 'HomeController@cabinet')->name('cabinet.index');

        Route::group(['prefix' => 'product',], function () {
            Route::get('/list', 'ProductController@index')->name('products.index');
            Route::get('/store', 'ProductController@store')->name('products.store');
            Route::post('/', 'ProductController@store')->name('products.store.new');
            Route::get('/update/{id}', 'ProductController@update')->name('products.update');
            Route::get('/delete/{id}', 'ProductController@delete')->name('products.delete');
        });

        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'CategoryController@index')->name('category.index');
            Route::get('/store', 'CategoryController@store')->name('category.store');
            Route::post('/', 'CategoryController@store')->name('category.store.new');
            Route::get('/update/{id}', 'CategoryController@update')->name('category.update');
            Route::get('/delete/{id}', 'CategoryController@delete')->name('category.delete');
        });
    });

});
