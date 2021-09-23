<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('login')->name('admin.')->middleware('isLogin')->group(function(){

Route::get('/panel', 'back\AuthController@login')->name('login'); 
Route::get('/reset/password','back\ResetPasswordController@showFrom')->name('reset.password');
Route::post('/reset/password','back\ResetPasswordController@reset');
Route::get('/reset/password/{token}','back\ResetPasswordController@resetPasswordShowFrom')->name('reset.password.ShowFrom');
Route::post('/reset/password/{token}','back\ResetPasswordController@resetPassword');



Route::post('/panel', 'back\AuthController@loginPost')->name('login.post');

});
Route::prefix('admins')->name('admin.')->middleware('isAdmin')->group(function(){
Route::get('/dashboard', 'back\DashboardController@index')->name('index');
Route::get('/profile', 'back\DashboardController@profile')->name('profile');
Route::post('/profile', 'back\DashboardController@profileEdit')->name('profileEdit');

Route::get('/cykysh', 'back\AuthController@logout')->name('logout');

});
