<?php

use Illuminate\Support\Facades\Route;
use App\Wear;

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


Route::get('/wear', 'Admin\WearController@index')->name("wear.index");
Route::get('/wear/create', 'Admin\WearController@create')->name("wear.create");
Route::get('/wear/{id}/edit', 'Admin\WearController@edit')->name("wear.edit");
Route::post('/wear/store', 'Admin\WearController@store')->name("wear.store");
Route::post('/wear/{id}/update', 'Admin\WearController@update')->name("wear.update");
Route::delete('wear/{id}', 'Admin\WearController@destroy')->name("wear.destroy");

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::redirect('/index', '/');
Route::redirect('/home', '/');

