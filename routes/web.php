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

Route::get('/image','ImageController@index')->name('image');
Route::get('/','WelcomeController@index')->name('home');
Route::post('/categorie','CategorieController@index')->name('categorie');