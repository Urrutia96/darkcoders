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

Route::get('/','Users\UsersController@index');
Route::get('login', 'Users\UsersController@showLoginForm')->name('login');
Route::post('login','Users\UsersController@login')->name('loggin');
Route::get('logout','Users\UsersController@logout')->name('logout')->middleware('auth');

Route::get('registro','Users\UsersController@showRegistroForm')->name('registro');
Route::post('registrovalidate','Users\UsersController@validateRegistro'); //Verificar validacion de formulario de registro desde Vue-Axiosjs
Route::post('registro','Users\UsersController@store')->name('registro.store');
Route::post('cashier','Users\PaymentsController@threeMonths')->name('cashier')->middleware('auth');
//Prueba de vista de HOME
Route::get('index', 'Users\UsersController@index')->name('home');
Route::get('pagar', 'Users\UsersController@pagar');


//Rutas para admin/dashboard
Route::group(['prefix'=>'admin'], function(){
    Route::get('/', 'Admin\HomeController@index');
    Route::get('/users', 'Admin\UsersController@index');
    Route::get('/cursos', 'Admin\CursosController@index');
});