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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index');
Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/{post_name}', 'ArticlesController@show');
//Route::get('/contact','ContactController@index');

Route::get('/contact','ContactController@create'); //pour demander le formulaire
Route::post('/contact', 'ContactController@store'); //pour soumettre le formulaire 

Route::get('/help', 'ContactController@help'); //pour soumettre le formulaire 
//Route::get('/help/', 'ContactController@create');// pour passe de email -> contacte
//{!! $errors->first('nom', '<div class="invalid-feedback">:message</div>') !!}