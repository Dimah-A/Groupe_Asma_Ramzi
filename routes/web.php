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


// c'est le chemin pour arriver dans la page home via la navbar et les buttons home(qui ne sont pas encors fait)
Route::get('/','WelcomeController@index')->name('home');


// USER
// c'est le chemin pour arriver dans user via la navbar mais c'est aussi le create pour afficher les données entré dans le formulaire dans la page user
Route::get('/user', 'UserController@create')->name('user');

//il va sauver les données de user 
Route::post('/save','UserController@store')->name('save');

//pour le button edit
Route::get('/editUser/{id}','UserController@edit')->name('edit');
Route::post('/updateUser/{id}','UserController@update' )->name('update');




//pour le button delete
Route::get('/delete/{id}', 'UserController@destroy')->name('delete');

// AVATAR
Route::get('/avatar', 'AvatarController@index')->name('avatar');
// Route::post('/save','AvatarController@store')->name('save');

//CATEGORIE
//edit
Route::get('/editcategorie/{id}','CategorieController@edit')->name('editcategorie');
route::post('/upadtecategorie/{id}','CategorieController@update')->name('updatecategorie');
Route::post('/savecategorie','CategorieController@store')->name('savecategorie');
route::get('/deletecategorie/{id}','CategorieController@destroy')->name('deletecategorie');
Route::get('/categorie','CategorieController@index')->name('categorie');

//IMAGES

//edit
Route::get('/editimg/{id}','ImageController@edit')->name('editimg');
route::post('/upadteimg/{id}','ImageController@update')->name('updateimg');
Route::post('/saveimg','ImageController@store')->name('saveimg');
route::get('/deleteimg/{id}','ImageController@destroy')->name('deleteimg');
Route::get('/image','ImageController@index')->name('image');