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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category', 'CategoryController@index');

route::get('/category/create', 'CategoryController@create');

route::post('/category/create', 'CategoryController@store')->name('categoryStore');

route::get('/category/update/{id}', 'CategoryController@update');

route::post('/category/update/{id}', 'CategoryController@edit')->name('categoryEdit');

route::get('/category/update/{id}', 'CategoryController@edit')->name('categoryEdit');
