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

Route::get('/', 'HomeController@index'); //все товары

Auth::routes();
//главная
Route::get('/show/{id}', 'HomeController@show'); //pokazat 1 tovar
Route::get('/category/{id}', 'HomeController@category'); //pokazat 1 categ
Route::get('/basket/', 'HomeController@basket'); //korzina


Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {

    Route::get('/', 'AdminController@index'); //tovaru
    Route::get('/change/', 'AdminController@change'); //tovaru


});

//маршруты доступны только авторизированным
Route::group(['middleware' => 'admin', 'prefix' => 'good'], function () {

    Route::get('/', 'GoodController@index'); //tovaru
    Route::get('/show/{id}', 'GoodController@show'); //pokazat 1 tovar
    Route::get('/create', 'GoodController@create'); //sozdat
    Route::post('/store', 'GoodController@store'); //sohranit
    Route::get('/edit/{id}', 'GoodController@edit'); //izmenut
    Route::post('/update/{id}', 'GoodController@update'); //sohranit v baze
    Route::get('/destroy/{id}', 'GoodController@destroy'); //sohranit v baze
});


Route::group(['middleware' => 'admin', 'prefix' => 'categories'], function () {

    Route::get('/', 'CategoryController@index'); //категории
    Route::get('/show/{id}', 'CategoryController@show'); //pokazat 1 tovar
    Route::get('/create', 'CategoryController@create'); //sozdat
    Route::post('/store', 'CategoryController@store'); //sohranit
    Route::get('/edit/{id}', 'CategoryController@edit'); //izmenut
    Route::post('/update/{id}', 'CategoryController@update'); //sohranit v baze
    Route::get('/destroy/{id}', 'CategoryController@destroy'); //sohranit v baze
});



Route::get('/access_denied', function (){
        return ('доступ только для администратора =Р'); //сделать вью
});


