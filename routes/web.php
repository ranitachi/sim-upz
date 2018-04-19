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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('muzzaki', 'MuzzakiController')->middleware('auth');
Route::get('/muzzaki-data', 'MuzzakiController@data')->name('muzzaki.data')->middleware('auth');
Route::get('/muzzaki-form/{id}', 'MuzzakiController@form')->name('muzzaki.form')->middleware('auth');
Route::get('/muzzaki-status/{id}/{st}', 'MuzzakiController@status')->name('muzzaki.status')->middleware('auth');
