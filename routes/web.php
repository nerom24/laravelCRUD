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
use App\Mail\mailwelcome;

Route::get('/', function () {
    return view('home');
});

Route::get('clientes.index', 'inicioController@index');
Route::get('clientes.create', 'inicioController@create');
Route::post('clientes.store', 'inicioController@store');
Route::get('clientes.destroy/{id}', 'inicioController@destroy');
Route::get('clientes.edit/{id}', 'inicioController@edit');
Route::put('clientes.update/{id}', 'inicioController@update');
Route::get('clientes.show/{id}', 'inicioController@show');



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/email',  function() {
	Mail::to('nerom24@gmail.com', 'Juan Carlos')
		->send(new mailwelcome('Pedrito')); 
});


