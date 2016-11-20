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

Route::get('/profile/{user?}', 'UsersController@profile');
Route::get('/users', 'UsersController@index');

Route::get('/history', 'HistoryController@index');
Route::get('/products', 'ProductsController@index');
