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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'User\PostController@index')->name('post');
Route::post('/post', 'User\PostController@store')->name('create_post');
Route::post('/comment/{post}', 'User\CommentController@store')->name('create_comment');
Route::get('/hype/{post}', 'User\HypeController@create')->name('hype');
Route::get('/admire/{post}', 'User\AdmireController@create')->name('admire');
Route::get('/a', 'User\TimelineController@index')->name('a');
Route::get('users', 'Auth\UserController@viewUsers')->name('view_users');
Route::post('/send_request/{email}', 'User\FriendRequestController@create')->name('send_request');
Route::get('/delete_comment/{id}', 'User\CommentController@destroy')->name('delete_comment');
Route::get('/delete_post/{post}', 'User\PostController@destroy')->name('delete_post');