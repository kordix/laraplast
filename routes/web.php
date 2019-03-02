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

Route::get('/', 'MainController@main')->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'TextController@create')->name('create');
Route::get('/edit/{id}', 'TextController@edit')->name('edit');
Route::get('/admin', 'TextController@index')->name('index');

Route::post('/store', 'TextController@store')->name('store');
Route::patch('/update/{id}', 'TextController@update')->name('update');

Route::resource('category', 'CategoryController');
Route::get('indexcategory', 'CategoryController@index');
