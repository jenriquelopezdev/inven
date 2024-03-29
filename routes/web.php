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

Route::get('/', function () {
    return view('admin.inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inicio', function () {
    return view('admin.inicio');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('equipos','EquipoController');
Route::resource('equiposPersonas','EquipoPersonaController');
Route::resource('persona','PersonaController');

Route::resource('impresoras','ImpresoraUbicacionController');
Route::resource('ubicaciones','UbicacionController');
Route::resource('impresoraCartucho','ImpresoraCartuchoController');

Route::resource('impresora','ImpresoraController');
Route::resource('cartucho','CartuchoController');


Route::get('/reporteToner','ReporteTonerController@export')->name('reporteToner');
Route::get('/reporteEquipos','ReporteEquiposController@export')->name('reporteEquipos');
Route::get('reporteConsumoToner','ReporteTonerController@exportConsumo')->name('reporteConsumoToner');
