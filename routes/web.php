<?php

use Illuminate\Support\Facades\Route;



Route::get('/login',  ['as' => 'show_login_form',        'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login',  ['as' => 'login',                  'uses' => 'Auth\LoginController@login']);
Route::post('logout', ['as' => 'logout',                 'uses' => 'Auth\LoginController@logout']);

Route::group(['middleware'=>'auth'], function (){
    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('users', 'UsersController');
    Route::post('users/create','UsersController@store');

    Route::resource('categories', 'CategoryController');
    Route::post('categories/create','CategoryController@store');

    Route::resource('products', 'ProductController');
    Route::post('products/create','ProductController@store');

    Route::resource('customers', 'CustomerController');
    Route::post('customers/create','CustomerController@store');

    Route::resource('accounts', 'AccountController');
    Route::post('accounts/create','AccountController@store');
    Route::get('expenses','AccountController@expenses');
    Route::get('revenues','AccountController@revenues');

    Route::resource('orders', 'OrderController');
    Route::post('orders/create','OrderController@store');
    Route::get('orders/print/{id}','OrderController@print')->name('orders.print');
});

