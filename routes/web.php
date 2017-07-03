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

Route::get('/', 'Auth\UserController@index')->name('index'); 

Route::get('/users/follow/more', 'Auth\UserController@index')->name('index');


Route::get('users/logout', 'User\FriendsController@user_logout')->name('user_logout');

Route::get('/logout', 'User\FriendsController@user_logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'User\PostController@index')->name('post');

Route::post('/post', 'User\PostController@store')->name('create_post');

Route::post('/comment/{post}', 'User\CommentController@store')->name('create_comment');

Route::get('/hype/{post}', 'User\HypeController@create')->name('hype');

Route::get('/admire/{post}', 'User\AdmireController@create')->name('admire');
Route::get('/unadmire/{post}', 'User\AdmireController@destroy')->name('unadmire');

Route::get('/timeline', 'User\TimelineController@index')->name('timeline');

Route::get('users', 'Auth\UserController@viewUsers')->name('view_users');

Route::post('/product_hype/{product}', 'Merchant\ProductController@product_hype')->name('product_hype');

Route::get('/admire/{post}', 'User\AdmireController@create')->name('admire');
Route::get('/unadmire/{post}', 'User\AdmireController@destroy')->name('unadmire');

Route::get('/admire/{product}', 'User\AdmireController@create')->name('product_admire');
Route::get('/unadmire/{product}', 'User\AdmireController@destroy')->name('product_unadmire');



Route::get('/timeline/{reference}', 'User\TimelineController@index')->name('timeline');

Route::get('/users/follow/friends', 'FollowController@getUser')->name('follow_friends');
Route::get('/users/follow/merchants', 'FollowController@getMerchant')->name('follow_merchants');
Route::post('/users/follow/friends', 'FollowController@friendsFollowComplete')->name('follow_friends');
Route::post('/users/follow/merchants', 'FollowController@merchantsFollowComplete')->name('follow_merchants');
Route::get('/users/social_notification/delete/{notification}', 'User\SocialNotificationController@destroy')->name('delete_social_notification');

Route::get('/users/follow/more', 'Auth\UserController@viewUsers')->name('view_users');


Route::get('users/profile_picture/{id}', 'Auth\UserController@profile_picture')->name('profile_picture');

Route::post('users/profile_picture/{id}', 'Auth\UserController@profile_picture')->name('profile_picture');

Route::post('/send_request/{email}', 'User\FriendRequestController@create')->name('send_request');

Route::post('/undo_request/{email}', 'User\FriendRequestController@destroy')->name('undo_request');


Route::post('/follow/{email}', 'FollowController@store')->name('follow');

Route::get('/follow', 'FollowController@index')->name('follow_page');

Route::post('/unfollow/{email}', 'FollowController@destroy')->name('unfollow');

Route::post('/follow/{reference}', 'FollowController@store')->name('follow');

Route::get('/follow', 'FollowController@index')->name('follow_page');

Route::post('/unfollow/{reference}', 'FollowController@destroy')->name('unfollow');


Route::get('/delete_comment/{id}', 'User\CommentController@destroy')->name('delete_comment');
Route::get('users/post/delete/{reference}', 'User\PostController@destroy')->name('delete_post');

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

	// Route::get('/logout', 'Auth\UserController@logout')->name('mechant_logout');

	Route::get('/delete/{id}', 'Merchant\ProductController@destroy')->name('delete');
	Route::get('/edit_product/{id}', 'Merchant\ProductController@edit')->name('edit_product');
	Route::post('/update_product/{id}', 'Merchant\ProductController@edit')->name('update_product');

	Route::post('/product_of_week/{id}', 'Merchant\ProductController@product_of_the_week')->name('product_of_the_week');

	Route::get('/view_product_of_week', 'Merchant\ProductController@viewProductOfTheWeek')->name('view_product_of_the_week');

	Route::get('/edit_promo/{id}', 'Merchant\ProductController@promo')->name('promo');

	Route::post('/update_promo/{id}', 'Merchant\ProductController@promo')->name('update_promo');

	Route::get('/delete_promo/{id}', 'Merchant\ProductController@remove_promo')->name('remove_promo');

	Route::get('/whats_new/', 'Merchant\ProductController@whats_new')->name('whats_new');

	Route::get('/whats_new', 'Merchant\ProductController@whats_new')->name('whats_new');
	Route::get('/addhottest/{product}', 'Merchant\HottestProductController@create')->name('add_hottest');
	Route::get('/delhottest/{product}', 'Merchant\HottestProductController@destroy')->name('del_hottest');


});
Route::get('/merchant/product/{id}', 'Merchant\ProductController@show')->name('product');


Route::get('/brigeCode/{id}', 'Auth\UserController@brigeCode')->name('brige_code');

Route::get('/brigeCode/{id}', 'User\BridgeCodeController@create')->name('brige_code');


Route::match(['get', 'post'], '/admin', 'Admin\AdminController@signin');

Route::group(['middleware' => 'admin'], function() {
	Route::group(['prefix' => 'admin'], function() {
	    Route::get('/home', 'Admin\AdminController@home');
	});
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
	Route::match(['get', 'post'], '/', 'Admin\AdminController@signin');
});

Route::get('/user/{email}', 'User\AccountController@index')->name('user_profile');

Route::get('/user/{email}', 'User\AccountController@index')->name('user_profile');
Route::get('/araha_market', 'Auth\UserController@arahaMarket')->name('araha_market');

Route::get('/merchant_tradeline/{user}', 'User\TimelineController@index')->name('tradeline');

Route::get('/bridger', 'Auth\UserController@bridger')->name('bridger');

Route::get('/bridger_request', 'Auth\UserController@bridgerRequest')->name('bridger_request');

Route::get('/bridge_shops', 'Auth\UserController@bridgeShops')->name('bridge_shops');

Route::get('/edit_profile', 'User\AccountController@editProfile')->name('edit_profile');

Route::get('/exhibition', 'Auth\UserController@exhibition')->name('exhibition');

Route::get('/follow_brands', 'Auth\UserController@followBrands')->name('follow_brands');

Route::get('/hiring', 'Auth\UserController@hiring')->name('hiring');

Route::get('/lagos_market', 'Auth\UserController@lagosMarket')->name('lagos_market');

Route::get('/port-harcourt_market', 'Auth\UserController@port_harcourtMarket')->name('port-harcourt_market');

// Route::get('/mycart', 'Auth\UserController@myCart')->name('mycart');

Route::get('/merchant_store/', 'Merchant\ProductController@merchantStore')->name('merchant_store')->middleware('merchant');

Route::get('/merchant_store/{user}', 'Merchant\ProductController@StoreForUser')->name('user_store');

Route::get('/cart/addItem/{product}', 'User\CartController@addToCart')->name('addToCart')->middleware('auth');
;

Route::get('/cart/removeItem/{item}', 'User\CartController@removeItem')->name('removeItem')->middleware('auth');
;

Route::get('/cart/clearCart', 'User\CartController@clearCart')->name('clearCart')->middleware('auth');
;

Route::get('/cart/viewCart', 'User\CartController@viewCart')->name('viewCart')->middleware('auth');
;

Route::get('/user_tradeline', 'Auth\UserController@userTradeline')->name('user_tradeline')->middleware('auth');
Route::get('/users/following/{reference}', 'FollowController@following')->name('following');
Route::get('/users/followers/{reference}', 'FollowController@followers')->name('followers');
Route::get('/users/profile/edit', 'User\ProfileController@index')->name('edit_profile')->middleware('auth');
Route::post('/users/profile/edit/account', 'User\ProfileController@userSave')->name('update_profile')->middleware('auth');
Route::post('/users/profile/edit/user', 'User\ProfileController@userAccountSave')->name('update_user')->middleware('auth');
Route::post('/users/profile/edit/merchant', 'User\ProfileController@merchantAccountSave')->name('update_merchant')->middleware('auth');
Route::post('/users/profile/edit/password', 'User\ProfileController@changePassword')->name('change_pasword')->middleware('auth');
Route::get('product_details/{product}/{reference}', 'Merchant\ProductController@productDetails')->name('product_details');
