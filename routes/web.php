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
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index');



Route::get('/login/vk', 'Auth\LoginController@vk');

Route::group( ['middleware' => ['auth']], function() {

    //Video Routes



    Route::prefix('admin')->group(function () {

        // Admin User Manage Routes
        Route::get('/index', 'AdminController@index');
        Route::get('/users', 'AdminController@users');
        Route::get('/users/{user}', 'AdminController@show');

        // Admin Post Manage Routes
        Route::get('/posts', 'AdminController@posts');
        Route::get('/posts/{post}', 'AdminController@showPost');

        // Admin Comments Manage Routes
        Route::get('/comments', 'AdminController@comments');
        Route::get('/comments/{comment}', 'AdminController@showComment');
    });
});

Route::get('/page', 'VideoController@index');
Route::get('/page/{page}', 'VideoController@show');
Route::get('/forex', function (){
	return view('video.forex');
});

// Post Routes
Route::get('/posts','PostController@index')->name('posts.index');
Route::get('/posts/show/{post}','PostController@show')->name('post.show');
Route::get('/posts/create','PostController@create')->name('post.create');
Route::post('/posts/post','PostController@store')->name('post.store');


// Category Routes
Route::get('/category', 'CategoryController@index')->name('category.index');
Route::get('/category/{category}', 'CategoryController@show')->name('category.show');
Route::get('/add/category', 'CategoryController@create')->name('category.create');
Route::post('add/category/', 'CategoryController@store')->name('category.store');

// Profile Routes
Route::get('/profile/', 'ProfileController@index')->name('profile.index');
Route::get('/profile/show/{id}', 'ProfileController@show')->name('profile.show');

// Comments Routes
Route::post('/comments/add/post/{post}','CommentsController@store');
Route::post('/comments/add/video/{video}','CommentsController@video_store');

// About Routes
Route::get('/contact', 'AboutController@index');
Route::post('/contact/send', 'AboutController@store');