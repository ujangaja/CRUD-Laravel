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

// Route::get('/', function () {
//     return view('welcome');
// }); //ini untuk welcome atau default

Route::get('/', 'BookController@index');

Route::get('/create', 'BookController@create');
Route::post('/', 'BookController@store');//009

Route::get('/edit/{id}', 'BookController@edit');
Route::post('/edit/{id}', 'BookController@update');//019	

Route::get('/delete/{id}', 'BookController@destroy');//020 delete

