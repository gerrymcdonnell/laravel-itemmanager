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




//point to index action ofr todos contrller
/*Route::get('/', 'TodosController@index');*/



Auth::routes();

Route::get('/', 'ItemsController@index');

Route::resource('api/items','ItemsController');


