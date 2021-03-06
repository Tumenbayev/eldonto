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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', 'MenuItemController@index');
Route::post('/products/new', 'MenuItemController@newProduct');
Route::get('/products/show/{id}', 'MenuItemController@show');
Route::get('/restaurants/', 'RestaurantController@index');
Route::get('/restaurants/show/{id}', 'RestaurantController@show');
