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

Route::get('/','HomeController@login')->name('home');
Route::get('login', 'Users\UsersController@showLoginForm')->name('login');
Route::post('login','Users\UsersController@loggin')->name('loggin');
Route::get('registro','Users\UsersController@showRegistroForm')->name('registro');
Route::post('registrovalidate','Users\UsersController@validateRegistro');
Route::post('registro','Users\UsersController@store')->name('registro.store');


//Rutas para admin/dashboard
Route::group(['prefix'=>'admin'], function(){
    Route::get('/', 'Admin\HomeController@index');
    Route::get('/users', 'Admin\UsersController@index');
    Route::get('/cursos', 'Admin\CursosController@index');
});