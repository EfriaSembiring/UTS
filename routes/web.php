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
Route::get('/him', 'HomeController@home');
Route::get('/about', 'AboutController@about');
Route::get('/article/{id}', 'ArticleController@index');

//Route Tempalte
Route::get('/homeboot', 'HomeController@homeboot');

Route::get('/blog/{id}', 'ArticleController@articles');

Route::get('/ful', 'AboutController@full');
Route::get('/anime', 'AnimeController@anime');
Route::get('/profil', 'ProfilController@profil');
Route::get('/h', 'HomeController@index');
Route::get('/contact', 'ContactController@index');
Auth::routes();
Route::get('/manage', 'ArticleController@manage')->name('manage');
Route::get('/manage/add', 'ArticleController@add');
Route::post('/article/create','ArticleController@create');
Route::get('/article/edit/{id}','ArticleController@edit');
Route::post('/article/update/{id}','ArticleController@update');
Route::get('/article/delete/{id}','ArticleController@delete');
