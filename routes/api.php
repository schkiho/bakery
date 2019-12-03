<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('orders', 'OrdersController@index');

Route::post('order', 'OrdersController@store');

Route::delete('order/{id}', 'OrdersController@destroy');
