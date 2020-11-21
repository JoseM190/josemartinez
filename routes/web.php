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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rute de registro de estudiante
Route::get('/index', 'UserController@index')->name('index'); //index de registro de estudiante
Route::get('/createU', 'UserController@createU')->name('createU'); //crear registro de estudiante
Route::post('/save', 'UserController@save')->name('save'); //guardar registro de estudiante
Route::delete('/delete/{id}', 'UserController@delete')->name('delete'); // borrar estudiante
Route::get('/edit/{id}', 'UserController@edit')->name('edit'); // editar estudiante
Route::patch('/edition/{id}', 'UserController@edition')->name('edition'); // edicion de estudiante
