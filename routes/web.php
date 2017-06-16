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
    return view('index');
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
Route::post('/undo_request/{email}', 'User\FriendRequestController@destroy')->name('undo_request');
Route::post('/follow/{email}', 'FollowController@store')->name('follow');
Route::get('/follow', 'FollowController@index')->name('follow_page');
Route::post('/unfollow/{email}', 'FollowController@destroy')->name('unfollow');
Route::get('/delete_comment/{id}', 'User\CommentController@destroy')->name('delete_comment');
Route::get('/delete_post/{post}', 'User\PostController@destroy')->name('delete_post');
Route::get('/register', 'Auth\UserController@register')->name('register');
Route::post('/register', 'Auth\UserController@create')->name('register');
Route::get('/friends', 'User\FriendsController@index')->name('friends');
Route::post('/accept_friend/{email}', 'User\FriendsController@create')->name('accept_friend');
Route::post('/decline_friend/{email}', 'User\FriendsController@update')->name('decline_friend');
Route::post('/unfriend/{email}', 'User\FriendsController@destroy')->name('unfriend');
Route::get('/notifications', 'User\SocialNotificationController@index')->name('notifications');
Route::get('/friend_requests', 'User\FriendRequestController@index')->name('friend_requests');

Route::get('/upload', 'User\PhotoAlbumController@index')->name('upload');
Route::post('/upload', 'User\PhotoAlbumController@create')->name('upload');
Route::post('/upload', 'User\PhotoAlbumController@create')->name('upload');
Route::get('/images/{folder}/{reference}', 'User\ImageController@show')->name('image');
Route::post('/delete_image/{id}', 'User\ImageController@destroy')->name('delete_image');
Route::post('/delete_album/{id}', 'User\PhotoAlbumController@destroy')->name('delete_album');

Route::get('/register', 'Auth\UserController@register')->name('register');

Route::post('/registered', 'Auth\UserController@create')->name('registered');

Route::post('/register', 'Auth\UserController@postLogin')->name('login');

Route::group(['prefix' => 'merchant'], function (){
	Route::get('/', 'Merchant\ProductController@index')->name('merchant');
	Route::get('/addProduct', 'Merchant\ProductController@create')->name('addProduct');

Route::group(['prefix' => 'admin'], function() {
	Route::match(['get', 'post'], '/', 'Admin\AdminController@signin');
	Route::group(['middleware' => 'admin'], function() {
	    //
	});
});
});