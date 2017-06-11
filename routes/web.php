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

Route::group(['as' => 'front.', 'namespace' => 'Front'], function(){

    // Authentication Routes...
    Route::get('login', [
      'as' => 'login',
      'uses' => 'Auth\LoginController@showLoginForm'
    ]);
    Route::post('login', [
      'as' => 'login.post',
      'uses' => 'Auth\LoginController@login'
    ]);
    Route::get('logout', [
      'as' => 'logout',
      'uses' => 'Auth\LoginController@logout'
    ]);

    // Password Reset Routes...
    Route::post('password/email', [
      'as' => 'password.email',
      'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
    ]);
    Route::get('password/reset', [
      'as' => 'password.request',
      'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
    ]);
    Route::post('password/reset', [
      'as' => '',
      'uses' => 'Auth\ResetPasswordController@reset'
    ]);
    Route::get('password/reset/{token}', [
      'as' => 'password.reset',
      'uses' => 'Auth\ResetPasswordController@showResetForm'
    ]);

    // Registration Routes...
    Route::get('register', [
      'as' => 'register',
      'uses' => 'Auth\RegisterController@showRegistrationForm'
    ]);
    Route::post('register', [
      'as' => 'register.post',
      'uses' => 'Auth\RegisterController@register'
    ]);

    Route::get('/', [
      'as' => 'home',
      'uses' => 'PageController@home',
    ]);
    Route::get('about', [
      'as' => 'about',
      'uses' => 'PageController@about',
    ]);
    Route::get('tours', [
      'as' => 'tours',
      'uses' => 'PageController@tours',
    ]);
    Route::get('contact', [
      'as' => 'contact',
      'uses' => 'PageController@contact'
    ]);
    Route::get('{category}/daftar-panjat', [
      'as' => 'destination.category-list',
      'uses' => 'DestinationController@listByCategory'
    ]);
    Route::get('/wisata/{title}', [
      'as' => 'destination.show',
      'uses' => 'DestinationController@show',
     ]);
});
