<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/mahasiswa' , 'MahasiswaController@index');

Route::get('/mahasiswas' , 'MahasiswasController@index');

Route::get('/mahasiswas/create' , 'MahasiswasController@create');

Route::get('/mahasiswas/{mahasiswas}' , 'MahasiswasController@show');

Route::post('/mahasiswas' , 'MahasiswasController@store');

Route::delete('/mahasiswas/{mahasiswas}', 'MahasiswasController@destroy');

Route::get('/mahasiswas/{mahasiswas}/edit', 'MahasiswasController@edit');

Route::patch('/mahasiswas/{mahasiswas}','MahasiswasController@update');
