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


Auth::routes();


Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/category/{id}', 'HomeController@category')->name('home.category');
Route::get('/product/{id}', 'HomeController@product')->name('home.product');



Route::group(['prefix' => 'cabinet', 'middleware' => ['auth', 'role:user']], function () {

    Route::group(['namespace' => 'Cabinet'], function (){
        Route::get('/', 'CabinetController@index')->name('cabinet.index');
        Route::get('/profile', 'CabinetController@profile')->name('cabinet.profile');
        Route::get('/cards', 'CabinetController@cards')->name('cabinet.cards');
        Route::get('/orders', 'CabinetController@orders')->name('cabinet.orders');
        Route::get('/feedback', 'CabinetController@feedback')->name('cabinet.feedback');
        Route::get('/history', 'CabinetController@history')->name('cabinet.history');

        Route::get('/cart', 'CabinetController@cart')->name('cart');
    });
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:super-admin']], function () {
    Route::get('/', 'HomeController@admin')->name('admin.index');


    Route::group(['prefix' => 'product', 'namespace' => 'Product'], function () {
        Route::get('/', 'ProductController@index')->name('products.index');
        Route::post('/', 'ProductController@store')->name('products.store');
        Route::put('/{id}', 'ProductController@edit')->name('products.edit');
        Route::post('/{product}', 'ProductController@update')->name('products.update');
        Route::delete('/{id}', 'ProductController@delete')->name('products.delete');
    });

    Route::group(['prefix' => 'category', 'namespace' => 'Category'], function () {
        Route::get('/', 'CategoryController@index')->name('category.index');
        Route::post('/', 'CategoryController@store')->name('category.store');
        Route::put('/{id}', 'CategoryController@edit')->name('category.edit');
        Route::post('/{category}', 'CategoryController@update')->name('category.update');
        Route::delete('/{id}', 'CategoryController@delete')->name('category.delete');
    });
});



