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

Route::get('/', function () {
  return view('home');
  // return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/dashboard', 'HomeController@index');
Route::get('/admin', 'AdminController@index');

// user routes
Route::get('/profile/{user?}', 'UsersController@profile');
Route::get('/users', 'UsersController@index');
Route::post('/users', 'UsersController@update');

Route::get('/products/{id?}', 'ProductsController@index');

Route::post('/purchase', 'PurchasesController@store');
Route::get('/purchase/{product?}', 'PurchasesController@purchase');

Route::get('/history/{user?}', 'PurchasesController@history');
