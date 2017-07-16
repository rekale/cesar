<?php

use App\Models\Transaction;

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

Route::get('/tickets', function(){
    $transaction = Transaction::with('destinations')->first();
    return view('front.tickets', compact('transaction'));
});

Auth::Routes();

Route::group(['as' => 'front.', 'namespace' => 'Front'], function(){

    //main function
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

    //basket
    Route::get('basket', [
        'as' => 'basket.index',
        'uses' => 'BasketController@index',
    ]);
    Route::get('basket/{id}', [
        'as' => 'basket.add',
        'uses' => 'BasketController@add',
    ]);
    Route::post('basket', [
        'as' => 'basket.store',
        'uses' => 'BasketController@store',
    ]);
    Route::delete('basket', [
        'as' => 'basket.destroy',
        'uses' => 'BasketController@destroy',
    ]);

    Route::group(['middleware' => 'auth:web'], function() {

        //checkout
        Route::get('checkout', [
            'as' => 'basket.checkout',
            'uses' => 'BasketController@checkout',
        ]);

        //transactions
        Route::get('transactions', [
            'as' => 'transactions.histories',
            'uses' => 'TransactionController@histories',
        ]);
        Route::get('transactions/{id}/confirmation', [
            'as' => 'transactions.confirmation',
            'uses' => 'TransactionController@confirmation',
        ]);
        Route::post('transactions/{id}/confirmation', [
            'as' => 'transactions.confirm',
            'uses' => 'TransactionController@confirm',
        ]);

        Route::get('transactions/{id}/print', [
            'as' => 'transactions.print',
            'uses' => 'TransactionController@print',
        ]);

    });

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

        //Transactions
        Route::get('transactions', [
            'as' => 'transactions.index',
            'uses' => 'TransactionController@index',
        ]);
        Route::get('transactions/{id}/edit', [
            'as' => 'transactions.edit',
            'uses' => 'TransactionController@edit',
        ]);
        Route::put('transactions/{id}/edit', [
            'as' => 'transactions.update',
            'uses' => 'TransactionController@update',
        ]);
        Route::delete('transactions/{id}/destroy', [
            'as' => 'transactions.destroy',
            'uses' => 'TransactionController@destroy',
        ]);

    });
});
