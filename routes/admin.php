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
Route::get('login', 'App\Http\Controllers\Admin\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Admin\Auth\LoginController@login');
Route::post('logout', 'App\Http\Controllers\Admin\Auth\LoginController@logout')->name('logout');


// Registration Routes...
Route::get('register', 'App\Http\Controllers\Admin\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'App\Http\Controllers\Admin\Auth\RegisterController@register');

Route::get('password/reset', 'App\Http\Controllers\Admin\Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'App\Http\Controllers\Admin\Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'App\Http\Controllers\Admin\Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'App\Http\Controllers\Admin\Auth\ResetPasswordController@reset');

                              //admin refer to the config folder->auth file(guard)  and login as admin
Route::group(['middleware'=>['auth:admin']] , function () {

  Route::get('/home',  function ()  {
    return view('admin.auth.home');
  });                                         //profile same as ProfileController's function name
  Route::get('adminprofile','App\Http\Controllers\Admin\Auth\ProfileController@profile')->name('adminprofile');
   //Route::get('/adminprofile',  function ()  {
    //return view('admin.auth.adminprofile');
  //});

});
