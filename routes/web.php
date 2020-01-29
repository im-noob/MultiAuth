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
Route::get('/admin1', 'Admin1Controller@index')->name('admin1')->middleware('admin1');
Route::get('/admin2', 'Admin2Controller@index')->name('admin2')->middleware('admin2');
Route::get('/admin3', 'Admin3Controller@index')->name('admin3')->middleware('admin3');
Route::get('/admin4', 'Admin4Controller@index')->name('admin4')->middleware('admin4');
Route::get('/admin5', 'Admin5Controller@index')->name('admin5')->middleware('admin5');
Route::get('/admin6', 'Admin6Controller@index')->name('admin6')->middleware('admin6');
