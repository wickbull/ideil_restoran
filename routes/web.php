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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/home/cat', 'FoodController@index');

Route::get('/admin', 'AdminController@index');

Route::get('/basket', 'Basket@index');

Route::get('/config/add_food', 'Additionallies@index');
Route::get('/config/edit_food', 'FoodController@show');
Route::get('/config/edit_additionallies', 'Additionallies@show');

Route::post('/config/add_food', 'FoodController@store')->name('foodStore');
Route::post('/config/add_additional', 'Additionallies@store')->name('addAdditional');

Route::get('/', 'AuditUserLanguage@index');
Route::get('/{id}', 'AuditUserLanguage@choose')->name('chooseLang');
