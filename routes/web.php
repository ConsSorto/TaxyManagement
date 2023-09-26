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
Route::get('/usuarios', 'userController@index')->name('users.index');
Route::get('/usuarios/{id}', 'userController@show')->name('users.show');
Route::get( 'usuarios/{id}/edit', 'userController@edit')->name( 	'users.edit');
Route::put('usuarios/{id}', 'userController@update')->name('users.update');
Route::delete('usuarios/{id}', 'userController@destroy')->name('users.destroy');

