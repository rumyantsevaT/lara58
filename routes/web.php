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


use Illuminate\Support\Facades\Route;

Route::get ('/', 'HomeController@index');
Route::get ('about', 'PagesController@about');
Route::get ('contact', 'PagesController@contact');

Route::get('articles', 'ArticlesController@index');
Route::get('create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');

//Route::get('task', 'TaskController@index');
