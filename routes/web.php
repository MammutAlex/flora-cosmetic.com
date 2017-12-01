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

Route::get('/', 'WebController@index')->name('index');
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/products/{products}', 'ProductController@show')->name('product');
Route::post('/products/{products}', 'BasketController@buy')->name('product');
Route::get('/tests', 'TestController@index')->name('test');
Route::get('/payments-and-deliveries', 'WebController@delivery')->name('delivery');
Route::get('/contacts', 'WebController@contacts')->name('contacts');
Route::get('/categories/{categories}/{subcategories?}', 'WebController@categories')->name('categories');
Route::get('/cart', 'BasketController@cart')->name('cart');

Auth::routes();
