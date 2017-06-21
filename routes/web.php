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

Route::get('/', 'Auth\UserController@index')->name('index');

Route::get('/logout', 'User\FriendsController@user_logout')->name('logout');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'User\PostController@index')->name('post');

Route::post('/post', 'User\PostController@store')->name('create_post');

Route::post('/comment/{post}', 'User\CommentController@store')->name('create_comment');

Route::get('/hype/{post}', 'User\HypeController@create')->name('hype');

Route::get('/product_hype/{product}', 'Merchant\ProductController@product_hype')->name('product_hype');

Route::get('/admire/{post}', 'User\AdmireController@create')->name('admire');
Route::get('/unadmire/{post}', 'User\AdmireController@destroy')->name('unadmire');

Route::get('/timeline', 'User\TimelineController@index')->name('timeline');

Route::get('users', 'Auth\UserController@viewUsers')->name('view_users');

Route::get('users/profile_picture/{id}', 'Auth\UserController@profile_picture')->name('profile_picture');

Route::post('users/profile_picture/{id}', 'Auth\UserController@profile_picture')->name('profile_picture');

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

Route::group(['prefix' => 'merchant', 'middleware'=> 'merchant'], function (){
	Route::get('/', 'Merchant\ProductController@index')->name('merchant');
	Route::get('/addProduct', 'Merchant\ProductController@create')->name('addProduct');

	Route::post('/addProduct', 'Merchant\ProductController@store')->name('addProduct');
	Route::get('/allProduct', 'Merchant\ProductController@viewAllProduct')->name('allProduct');
	Route::get('/logout', 'Auth\UserController@logout')->name('mechant_logout');
	Route::get('/delete/{id}', 'Merchant\ProductController@destroy')->name('delete');
	Route::get('/edit_product/{id}', 'Merchant\ProductController@edit')->name('edit_product');
	Route::post('/update_product/{id}', 'Merchant\ProductController@edit')->name('update_product');

	Route::post('/product_of_week/{id}', 'Merchant\ProductController@product_of_the_week')->name('product_of_the_week');

	Route::get('/view_product_of_week', 'Merchant\ProductController@viewProductOfTheWeek')->name('view_product_of_the_week');

	Route::get('/edit_promo/{id}', 'Merchant\ProductController@promo')->name('promo');

	Route::post('/update_promo/{id}', 'Merchant\ProductController@promo')->name('update_promo');

	Route::get('/delete_promo/{id}', 'Merchant\ProductController@remove_promo')->name('remove_promo');
	Route::get('/whats_new', 'Merchant\ProductController@whats_new')->name('whats_new');
	Route::get('/addhottest/{product}', 'Merchant\HottestProductController@create')->name('add_hottest');
	Route::get('/delhottest/{product}', 'Merchant\HottestProductController@destroy')->name('del_hottest');

});
Route::get('/merchant/product/{id}', 'Merchant\ProductController@show')->name('product');

Route::get('/brigeCode/{id}', 'Auth\UserController@brigeCode')->name('brige_code');

Route::match(['get', 'post'], '/admin', 'Admin\AdminController@signin');

Route::group(['middleware' => 'admin'], function() {
	Route::group(['prefix' => 'admin'], function() {
	    Route::get('/home', 'Admin\AdminController@home');
	});
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
	Route::match(['get', 'post'], '/', 'Admin\AdminController@signin');
});

Route::get('/{email}', 'User\AccountController@index')->name('user_profile');