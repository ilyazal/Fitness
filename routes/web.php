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

Route::get('/','BaseController@getindex');

Auth::routes();
Route::get('/cat/{id}','CatController@getOne');
Route::get('/product/{id}','CatController@getProduct');
Route::post('subscribe','SubcribeController@postIndex');

Route::get('/home', 'HomeController@index');

