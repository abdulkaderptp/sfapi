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
//middleware('auth:api')->
Route::prefix('v1')->group(function(){
	Route::resource('products', 'ProductController');
	Route::resource('users', 'UserController');
	Route::resource('users.address', 'AddressController');
	Route::resource('transactions', 'TransactionController');
});
