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
    return view('welcome');
});

//Route pour inscription sur critère
Route::get('/signin', function() {
	return view('signin');
});

//route pour les CGU du site 
route::get('/gcu', function() {
	return view('gcu');
});

//route pour le formulaire essaie focus final
route::get('/essaie-form', function() {
	return view('essaie-form')
})