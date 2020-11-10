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


Route::middleware('auth')->namespace('Admin')->group(function ()
{
    Route::name('wear.')->group(function ()
    {
        Route::get('/wears/create', 'AdminWearController@create')->name("create");
        Route::get('/wears/{id}/edit', 'AdminWearController@edit')->name("edit");
        Route::post('/wears/store', 'AdminWearController@store')->name("store");
        Route::post('/wears/{id}/update', 'AdminWearController@update')->name("update");
        Route::delete('/wears/{id}', 'AdminWearController@destroy')->name("destroy");
    });
    Route::get('/admin', 'AdminHomeController@index')->name('admin.home');
    Route::get('/admin/wears', 'AdminWearController@index')->name("admin.wears");
    Route::get('/admin/users', 'AdminUserController@index')->name('admin.user');
    Route::get('/admin/orders', 'AdminOrderController@index')->name('admin.orders');
});

Route::get('/wears', 'Wear\WearController@index')->name("wear.index");
Route::get('/wears/{id}', 'Wear\WearController@show')->name('wear.show');



Route::post('/cart/add/{id}', 'OrderController@addToCart')->name('cart.add');
Route::get('/cart', 'OrderController@cart')->name('cart.index');
Route::post('/cart/remove/{id}', 'OrderController@removeOneCart')->name('cart.removeOne');
Route::post('/cart/buy', 'OrderController@buy')->name('cart.buy');


Route::get('/', 'HomeController@index')->name('home');
Route::redirect('/index', '/');
Route::redirect('/home', '/');


Auth::routes();

Route::get('login/google', 'Auth\GoogleAuthController@googleRedirect')->name('google.login');
Route::get('login/google/callback', 'Auth\GoogleAuthController@googleCallback')->name('google.callback');

//Lang routes
Route::get('/lang/{locale}','LanguageController@changeLang')->name("/");

Route::get('/export', 'ExportController@export')->name('export');
