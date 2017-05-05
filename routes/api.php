<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('promotions/{id}/discount', 'Api\PromotionsController@discount');
Route::resource('promotions', 'Api\PromotionsController');

Route::resource('vouchers', 'Api\VouchersController');

Route::get('users/{id}/owned_vouchers', 'Api\UsersController@owned_vouchers');
Route::get('users/{id}/redeemed_discounts', 'Api\UsersController@redeemed_discounts');
Route::get('users/{id}/redeemed_vouchers', 'Api\UsersController@redeemed_vouchers');
Route::resource('users', 'Api\UsersController');

Route::resource('redeemed_discounts', 'Api\RedeemedDiscountController');

Route::resource('redeemed_vouchers', 'Api\RedeemedVoucherController');

Route::resource('owned_vouchers', 'Api\OwnedVoucherController');
