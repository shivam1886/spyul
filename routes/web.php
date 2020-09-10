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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/for-you', 'HomeController@forYou')->name('for.you');
Route::get('/trending', 'HomeController@trending')->name('trending');
Route::get('/about-us', 'HomeController@aboutUs')->name('about.us');

Route::get('/add/post', 'HomeController@addPost')->name('add.post');
Route::get('/edit/post', 'HomeController@editPost')->name('edit.post');
Route::put('/update/post', 'HomeController@updatePost')->name('update.post');
Route::put('/delete/post', 'HomeController@deletePost')->name('delete.post');