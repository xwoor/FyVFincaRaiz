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

Route::get('/','PageController@index');
Route::get('/inmobiliaria','PageController@inmobiliaria');
Route::get('/construccion','PageController@construccion');
Route::get('/arquitectura','PageController@arquitectura');
Route::get('/contacto','PageController@contacto');


Route::post('mail','PageController@mail');
Auth::routes();
Route::resource('/admin', 'AdminController');
Route::get('/agregar', 'HomeController@agregar');
Route::get('/informacion', 'HomeController@informacion');

