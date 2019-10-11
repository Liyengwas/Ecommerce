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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/products', function () {
    return view('products');
});
//save products function
Route::post('/products.save', 'ProductsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
