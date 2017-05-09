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

Route::get('redeem', function () {
    return view('redeem');
});

// Route::get('vouchers', function () {
//     return view('vouchers');
// });
Route::get('vouchers', 'VouchersController@index');
Route::get('vouchers/create', 'VouchersController@create');
Route::post('vouchers/create','VouchersController@craeteVoucher');
Route::get('promotions', 'PromotionsController@index');
Route::get('promotions/create', 'PromotionsController@create');




// $ composer require guzzlehttp/guzzle:~6.0


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/profile','UserController@profile');
Route::post('/profile','UserController@update_avatar');
