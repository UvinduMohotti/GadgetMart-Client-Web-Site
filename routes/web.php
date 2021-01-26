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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/all-product', function () {
    return view('all-product');
});

Route::get('/cart-view', function () {
    return view('cart-checkout');
});


Route::post('send-session', 'CommonController@setSessionValues');
Route::get('logout', 'CommonController@logout');
Route::get('product-single/{id}', 'CommonController@loadsingleProduct');

Route::get('brand-view/{name}/{id}', 'CommonController@brandview');
Route::get('category-view/{name}/{id}', 'CommonController@categoryview');


