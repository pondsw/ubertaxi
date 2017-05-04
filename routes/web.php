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

Route::get('promotion', function () {
    return view('promotion');
});

// Route::get('vouchers', function () {
//     return view('vouchers');
// });
Route::get('vouchers', 'VouchersController@index');



// $ composer require guzzlehttp/guzzle:~6.0

Route::get('singers', 'SingersController@index');
Route::get('singers/create', 'SingersController@create');
Route::get('singers/{id}', 'SingersController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
