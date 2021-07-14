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



Route::get('/','HomeController@index')->name('home');

Route::get('blog', 'HomeController@blog')->name('blog');

Route::get('blog/{slug}','HomeController@detail')->name('blog-detail');

Route::get('category/{slug}','HomeController@category')->name('category');

Route::get('about-us', 'HomeController@aboutUs')->name('about-us');

Route::get('contact', 'HomeController@contact')->name('contact');

