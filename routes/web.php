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

Route::get("/", "WelcomeController@index");
Route::get("users", "UsersController@getInfos"); 
Route::post("users", "UsersController@postInfos"); 
Route::get("contact", "ContactController@getForm"); 
Route::post("contact", "ContactController@postForm");
Route::resource('photo', 'PhotoController');
Route::resource("user", "UtilisateurController");
Route::resource('post', 'PostController', ['except' => ['show', 'edit', 'update']]);
Route::get('post/tag/{tag}', 'PostController@indexTag');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
