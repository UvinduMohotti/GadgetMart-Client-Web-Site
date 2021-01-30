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

/**
 * Login Route(s)
 */
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login')->name('admin.login');
Route::get('admin/logout', 'Auth\LoginController@logout')->name('admin.logout');

/**
 * Register Route(s)
 */
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('/home', 'HomeController@index')->name('home');

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
Route::get('order-history', 'CommonController@orderhistory');

Route::get('admin/retailer-report', 'CommonController@retailerreport')->name('retailer');




