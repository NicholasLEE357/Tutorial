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
// Authentication Routes...
Route::get('login', 'App\Http\Controllers\User\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\User\Auth\LoginController@login');
Route::post('logout', 'App\Http\Controllers\User\Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'App\Http\Controllers\User\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'App\Http\Controllers\User\Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'App\Http\Controllers\User\Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'App\Http\Controllers\User\Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'App\Http\Controllers\User\Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'App\Http\Controllers\User\Auth\ResetPasswordController@reset');


                              //login as user
Route::group(['middleware'=>['auth:user']], function () {
  Route::get('/',  function ()  { //group all the url together
    return view('welcome');
});
});
