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

//    Route::get('/home', 'HomeController@index')->name('home');
//    Route::get('status/{id}','HomeController@status')->name('status');


    Route::get('/approval', 'HomeController@approval')->name('approval');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('status/{id}','HomeController@status')->name('status');
    Route::get('personalinfo', 'HomeController@personalinfo')->name('personalinfo');
    Route::get('createinfo', 'HomeController@createinfo')->name('createinfo');
    Route::get('createinfo','InfoInsertController@insertform');
    Route::post('createinfo','InfoInsertController@insert');
    Route::get('personalinfo','InfoViewController@index');
