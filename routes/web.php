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

Route::get('/help', 'ContactController@help'); 

Route::post('/articles', 'CommentController@store'); //pour soumettre le commentaire
Auth::routes();

Route::get('/home', 'LoginController@index')->name('home');
Route::post('/articles/update', 'ArticlesController@update'); // mettre à jour les changement effectués sur les articles