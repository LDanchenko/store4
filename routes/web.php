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
Route::get('/home', 'HomeController@index')->name('home');


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

Route::get('/access_denied', function (){
        return ('доступ к товарам только для администратора =Р'); //сделать вью
});


