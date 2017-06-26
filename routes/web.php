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

Auth::Routes();

Route::group(['as' => 'front.', 'namespace' => 'Front'], function(){
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
    Route::get('/destinations', [
      'as' => 'destination.api',
      'uses' => 'DestinationController@index',
     ]);
});

Route::group(['as' => 'admin.', 'namespace' => 'Admin', 'prefix' => 'admin'], function(){

    Route::get('/login', [
        'as' => 'login',
        'uses' => 'SessionController@loginform',
    ]);
    Route::post('/login', [
        'as' => 'login.post',
        'uses' => 'SessionController@authenticate',
    ]);
    Route::post('/logout', [
        'as' => 'logout',
        'uses' => 'SessionController@logout',
    ]);

    Route::group(['middleware' => 'auth:backend'], function() {

        Route::get('/',[
            'as' => 'dashboard',
            'uses' => 'DashboardController@index',
        ]);

        //categories
        Route::get('categories', [
            'as' => 'categories.index',
            'uses' => 'CategoryController@index',
        ]);
        Route::get('categories/create', [
            'as' => 'categories.create',
            'uses' => 'CategoryController@create',
        ]);
        Route::post('categories', [
            'as' => 'categories.store',
            'uses' => 'CategoryController@store',
        ]);
        Route::get('categories/{id}/edit', [
            'as' => 'categories.edit',
            'uses' => 'CategoryController@edit',
        ]);
        Route::put('categories/{id}/edit', [
            'as' => 'categories.update',
            'uses' => 'CategoryController@update',
        ]);
        Route::delete('categories/{id}/destroy', [
            'as' => 'categories.destroy',
            'uses' => 'CategoryController@destroy',
        ]);

        //destinations
        Route::get('destinations', [
            'as' => 'destinations.index',
            'uses' => 'DestinationController@index',
        ]);
        Route::get('destinations/create', [
            'as' => 'destinations.create',
            'uses' => 'DestinationController@create',
        ]);
        Route::post('destinations', [
            'as' => 'destinations.store',
            'uses' => 'DestinationController@store',
        ]);
        Route::get('destinations/{id}/edit', [
            'as' => 'destinations.edit',
            'uses' => 'DestinationController@edit',
        ]);
        Route::put('destinations/{id}/edit', [
            'as' => 'destinations.update',
            'uses' => 'DestinationController@update',
        ]);
        Route::delete('destinations/{id}/destroy', [
            'as' => 'destinations.destroy',
            'uses' => 'DestinationController@destroy',
        ]);

        //users
        Route::get('users', [
            'as' => 'users.index',
            'uses' => 'UserController@index',
        ]);
        Route::get('users/{id}/edit', [
            'as' => 'users.edit',
            'uses' => 'UserController@edit',
        ]);
        Route::put('users/{id}/edit', [
            'as' => 'users.update',
            'uses' => 'UserController@update',
        ]);
        Route::delete('users/{id}/destroy', [
            'as' => 'users.destroy',
            'uses' => 'UserController@destroy',
        ]);

    });
});
