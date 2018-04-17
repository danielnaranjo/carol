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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('productos', 'ProductController');
Route::resource('invoices', 'InvoicesController');
Route::resource('referidos', 'ReferralController');

// OAuth Routes
// Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
// Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

// PayPal
// Route::get('paypal/checkout/{travel_id}', 'PaymentController@expressCheckout')->name('paypal.express-checkout');
// Route::get('paypal/success/{travel_id}', 'PaymentController@expressCheckoutSuccess');
// Route::post('paypal/notify', 'PaymentController@notify');
