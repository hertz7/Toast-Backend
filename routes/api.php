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

Route::get('/test', function (Request $request) {
    dd($request);
});

Route::post('event/new', 'App\Http\Api\Controllers\EventController@newEvent');
Route::get('event/:id', 'App\Http\Api\Controllers\EventController@getEvent');
Route::get('event/host/:id', 'App\Http\Api\Controllers\EventController@getEventByHost');
Route::get('event/guest/:id', 'App\Http\Api\Controllers\EventController@getEventByGuest');

// FAQ
Route::get('faq/guest', 'Api\FaqController@getGuestFaq');
Route::get('faq/host', 'Api\FaqController@getHostFaqs');