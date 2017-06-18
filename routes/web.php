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

    });
});
