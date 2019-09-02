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
Route::get('/', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

// middleware with auth and avatar
Route::middleware(['auth', 'avatar'])->group(function () {
    Route::name('users.')->group(function () {
        Route::get('users/{id}', 'UserController@show')->name('show');
        Route::get('users/edit/{id}', 'UserController@edit')->name('edit');;
    });
});

// middleware with auth
Route::middleware(['auth'])->group(function () {
    Route::name('posts.')->group(function () {
        Route::get('posts', 'PostController@index')->name('index');
        Route::get('post/create', 'PostController@create')->name('create');
        Route::post('post/store', 'PostController@store')->name('store');
        Route::get('posts/{id}', 'PostController@show')->name('show');
        Route::get('posts/edit/{id}', 'PostController@edit')->name('edit');;
    });
});

// middleware with auth
Route::middleware(['auth'])->group(function () {
    Route::name('comments.')->group(function () {
        Route::get('comments', 'CommentController@index')->name('index');
        Route::get('comments/create', 'CommentController@create')->name('create');
        Route::get('comments/{id}', 'CommentController@show')->name('show');
        Route::get('comments/edit/{id}', 'CommentController@edit')->name('edit');;
    });
});
