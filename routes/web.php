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

Route::get('/', 'PagesController@index');

// Route::get('/home1', 'PagesController@home1');

Route::get('/about', 'HomeController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('review', 'ReviewController');

Route::resource('post', 'PostController');



