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

//Rutas para admin



Route::get('/', 'HomeController@index')->name('home');
Route::get('registro','HomeController@registro')->name('registro');

Route::group(['prefix'=>'admin','as'=>'admin'], function(){
    Route::get('/', 'Admin\HomeController@index');
    Route::get('/users', 'Admin\UsersController@index');
    Route::get('/cursos', 'Admin\CursosController@index');
});