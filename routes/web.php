<?php

/*
|--------------------------------------------------------------------------
| Web Routes /esta caroeta va  a mirar a resources/views/nombrevista
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('gastos','GastoController');
Route::resource('sucursales','SucursalController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 

//Route::get('/index', 'GastoController@index') ; 

Route::get('/', function () {
    return view('welcome');
});

/* con parametro y condicion 
Route::get('/gastos/{id}/show', 'GastoController@show') 
 ->where('id','[0-9]+');*/

/* con parametro y condicion 
Route::get('/gastos/{id}/edit', 'GastoController@edit') 
  ->where('id','[0-9]+'); */

/* sin parametro
Route::get('/gastos/nuevo','GastoController@create') ; 
  */

/* con doble parametro 
Route::get('/gastos/{name}/{nickname?}', function ($name,$nickname=NULL) {
    if ($nickname)    
        return "Hola {$name} {$nickname}";
    else
        return "Nope";
});*/