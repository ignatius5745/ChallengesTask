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
Route::get('/form1', 'HomeController@createform1')->name('form1');
Route::get('/form2', 'HomeController@createform2')->name('form2');
Route::get('/form3', 'HomeController@createform3')->name('form3');
Route::get('/create', 'HomeController@selectform')->name('create');
Route::get('/editform1', 'HomeController@editform1')->name('editform1');
Route::get('/editform2', 'HomeController@editform2')->name('editform2');
Route::get('/editform3', 'HomeController@editform3')->name('editform3');
Route::get('form1','form1insert@insertform');
Route::post('form1','form1insert@insert');
Route::get('form2','form2insert@insertform');
Route::post('form2','form2insert@insert');
Route::get('form3','form3insert@insertform');
Route::post('form3','form3insert@insert');
Route::get('home','formViewController@index');
