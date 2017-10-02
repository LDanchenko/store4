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

//все маршруты пишем здесь

Route::get('/', function () {
    return view('welcome');
    //из папки auth.login
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/myview', 'HomeController@myview');
Route::get('/good', 'GoodController@index');
Route::get('/good/show/{id}', 'GoodController@show');



