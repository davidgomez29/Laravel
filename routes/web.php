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
    return view('welcome');
});

Route::get('/estudiantes', 'EstudiantesController@index');
Route::get('/estudiantes/create', 'EstudiantesController@create');
Route::get('/estudiantes/edit', 'EstudiantesController@edit');
Route::get('/estudiantes/delete', 'EstudiantesController@destroy');
Route::get('/estudiantes/show', 'EstudiantesController@show');

