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

Auth::routes();

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('/posts','PostController@index')->name('Главная');
Route::get('/posts/show/{vacancy}','PostController@show');
Route::get('/posts/create','PostController@create');
Route::post('/posts/post','PostController@store');


Route::get('/profile/', 'ProfileController@index');

Route::get('/category', 'CategoryController@index');
Route::get('/category/{category}', 'CategoryController@show');
Route::get('/add/category', 'CategoryController@create');
Route::post('add/category/', 'CategoryController@store');

Route::post('/comments/add/{post}','CommentsController@store');

Route::get('/profile/show/{id}', 'ProfileController@show');

Route::get('/contact', 'AboutController@index');
Route::post('/contact/send', 'AboutController@store');