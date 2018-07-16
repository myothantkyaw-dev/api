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
use App\User;
use App\Photo;
use App\Product;
use App\Staff;
use App\Category;

Route::get('/', function () {
    return view('welcome');//welcome.blade.php
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('post','PostController');
Route::resource('comment','CommentController');


Route::get('category/update','CategoryController@edit')->name('category.edit');
Route::post('category/update','CategoryController@update')->name('category.update');
Route::get('category/create','CategoryController@create')->name('category.create');
Route::post('category/store','CategoryController@store')->name('category.store');


