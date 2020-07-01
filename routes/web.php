<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/create','CrudController@create')->name('create');
Route::post('/create','CrudController@store')->name('store');


Route::get('/ShowTask','CrudController@showTask')->name('showTask');
Route::get('/modify','CrudController@modify')->name('modify');
Route::get('/destroy','CrudController@destroy')->name('destroy');



Route::get('/edit/{id}','CrudController@edit')->name('edit');
Route::post('/update/{id}','CrudController@update')->name('update');
Route::delete('/delete/{id}','CrudController@delete')->name('delete');



