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

Route::get('/','Users\UsersController@index')->name('home');
Route::get('login', 'Users\UsersController@showLoginForm')->name('login');
Route::post('login','Users\UsersController@login')->name('loggin');
Route::get('logout','Users\UsersController@logout')->name('logout')->middleware('auth');

Route::get('registro','Users\UsersController@showRegistroForm')->name('registro');
Route::post('registrovalidate','Users\UsersController@validateRegistro'); //Verificar validacion de formulario de registro desde Vue-Axiosjs
Route::post('registro','Users\UsersController@store')->name('registro.store');
Route::post('cashier','Users\PaymentsController@store')->name('cashier')->middleware('auth');
//Prueba de vista de HOME
Route::get('index', 'Users\UsersController@index');
Route::get('suscripcion', 'Users\UsersController@suscripcion')->name('suscripcion')->middleware('auth');
//seccion de cursos
Route::get('cursos', 'Users\UsersController@cursos');
//detalles de curso
Route::get('detalle-Curso', 'Users\UsersController@dCursos');
//prueba vista de Suscripcion
Route::get('pagar', 'Users\UsersController@pagar')->name('pagar');
Route::get('thanks', 'Users\UsersController@thanks')->name('thanks')->middleware('auth');

//Rutas para admin/dashboard
Route::group(['prefix'=>'admin','middleware'=>['auth','profesor']], function(){
    Route::get('/', 'Admin\HomeController@index');
    Route::get('/users', 'Admin\UsersController@index');
    Route::get('/cursos', 'Admin\CursosController@index');
});