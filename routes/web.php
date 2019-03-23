<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('home', 'HomeController@index');
Route::auth();

Route::get('/empresa', 'EmpresaController@mostrar_empresa')->name('Empresa');


Route::get('/posicion', 'PosicionController@index')->name('posicion');
Route::post('/addPos', 'CoopController@addPosicion');
Route::post('/editPos', 'CoopController@editPosicion');
Route::post('/deletePos', 'CoopController@deletePosicion');


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
