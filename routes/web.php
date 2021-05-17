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

Auth::routes();

Route::get('/', function () {
       return view('index');});

Route::get('/produtos', 'ControladorProduto@indexView');
Route::get('/produtos/novo', 'ControladorProduto@create');
Route::get('/categorias', 'ControladorCategoria@index');//->middleware('auth'); // Exemplo middleware
Route::get('/categorias/novo', 'ControladorCategoria@create');
Route::get('/categorias/editar/{id}', 'ControladorCategoria@edit');
Route::get('/categorias/apagar/{id}', 'ControladorCategoria@destroy');
Route::get('/categorias/{id}', 'ControladorCategoria@update');
Route::post('/categorias', 'ControladorCategoria@store');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('homeadmin');
