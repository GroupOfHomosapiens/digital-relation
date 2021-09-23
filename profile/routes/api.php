<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


//Route::get('/sanctum/csrf-cookie', 'CsrfCookieController@show');
Route::post('/auth/register', 'AuthController@register');

Route::post('/auth/login', 'AuthController@login');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', function(Request $request) {
        return auth()->user();
    });


    Route::get('/users', 'AuthController@users');
    Route::post('/auth/logout', 'AuthController@logout');
});