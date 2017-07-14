<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 104.131.168.249
*/

// Route::get('users/follow/new/merchant', 'Auth\UserController@viewMerchant')->middleware('auth');


Route::get('/search/user/{search}', 'Search\UserSearchController@search')->name('search_user'); 

Route::get('/', 'Auth\UserController@index')->name('index'); 

Route::get('/logout', 'User\FriendsController@user_logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'User\PostController@index')->name('post');

Route::post('/post', 'User\PostController@store')->name('create_post');

Route::post('/comment/{post}', 'User\CommentController@store')->name('create_comment');

Route::get('/hype/{post}', 'User\HypeController@create')->name('hype');

Route::post('/product_hype/{product}', 'Merchant\ProductController@product_hype')->name('product_hype');

Route::get('/admire/{post}', 'User\AdmireController@create')->name('admire');
Route::get('/unadmire/{post}', 'User\AdmireController@destroy')->name('unadmire');

Route::get('/product_admire/{reference}', 'User\ProductAdmireController@create')->name('product_admire');
Route::get('/product_unadmire/{reference}', 'User\ProductAdmireController@destroy')->name('product_unadmire');



Route::get('/timeline/{reference}', 'User\TimelineController@index')->name('timeline');

Route::get('/users/follow/friends', 'FollowController@getUser')->name('follow_friends');
Route::get('/users/follow/merchants', 'FollowController@getMerchant')->name('follow_merchants');
Route::post('/users/follow/friends', 'FollowController@friendsFollowComplete')->name('follow_friends');
Route::post('/users/follow/merchants', 'FollowController@merchantsFollowComplete')->name('follow_merchants');
Route::get('/users/social_notification/delete/{notification}', 'User\SocialNotificationController@destroy')->name('delete_social_notification');




Route::get('/users/follow/more', 'Auth\UserController@viewUsers')->name('view_users')->middleware('auth');

Route::get('users/profile_picture/{id}', 'Auth\UserController@profile_picture')->name('profile_picture');

Route::post('users/profile_picture/{id}', 'Auth\UserController@profile_picture')->name('profile_picture');

Route::post('/send_request/{email}', 'User\FriendRequestController@create')->name('send_request');

Route::post('/undo_request/{email}', 'User\FriendRequestController@destroy')->name('undo_request');

Route::post('/send_trade/{reference}', 'Merchant\TradeRequestController@create')->name('send_trade_request');

Route::post('/undo_trade/{reference}', 'Merchant\TradeRequestController@cancelRequest')->name('undo_trade_request');


Route::post('/follow/{reference}', 'FollowController@store')->name('follow');

Route::get('/follow', 'FollowController@index')->name('follow_page');

Route::post('/unfollow/{reference}', 'FollowController@destroy')->name('unfollow');

Route::get('/delete_comment/{id}', 'User\CommentController@destroy')->name('delete_comment');
Route::get('/delete_post/{post}', 'User\PostController@destroy')->name('delete_post');

Route::get('/register', 'Auth\UserController@register')->name('register');

Route::post('/register', 'Auth\UserController@create')->name('register');

Route::get('/friends', 'User\FriendsController@index')->name('friends');

Route::get('/trade_partners', 'Merchant\TradeRequestController@tradePartner')->name('trade_partners');

Route::post('/accept_friend/{email}', 'User\FriendsController@create')->name('accept_friend');

Route::post('/decline_friend/{email}', 'User\FriendsController@update')->name('decline_friend');


Route::post('/accept_trade/{reference}', 'Merchant\TradeRequestController@acceptRequest')->name('accept_trade_request');

Route::post('/decline_trade/{reference}', 'Merchant\TradeRequestController@declineRequest')->name('decline_trade_request');

Route::post('/unfriend/{email}', 'User\FriendsController@destroy')->name('unfriend');

Route::post('/untrade/{reference}', 'Merchant\TradeRequestController@destroy')->name('cancel_trade');

Route::get('/notifications', 'User\SocialNotificationController@index')->name('notifications');

Route::get('/friend_requests', 'Merchant\TradeRequestController@index')->name('friend_requests');
Route::get('/upload', 'User\PhotoAlbumController@index')->name('upload');
Route::post('/upload', 'User\PhotoAlbumController@create')->name('upload');
Route::post('/upload', 'User\PhotoAlbumController@create')->name('upload');
Route::get('/images/{folder}/{reference}', 'User\ImageController@show')->name('image');
Route::post('/delete_image/{id}', 'User\ImageController@destroy')->name('delete_image');
Route::get('/delete_image/{id}', 'User\ImageController@destroy')->name('delete_image');
Route::post('/delete_album/{id}', 'User\PhotoAlbumController@destroy')->name('delete_album');
Route::get('/register', 'Auth\UserController@register')->name('register');

Route::post('/registered', 'Auth\UserController@create')->name('registered');

Route::post('/register', 'Auth\UserController@postLogin')->name('login');

Route::group(['prefix' => 'merchant', 'middleware'=> 'merchant'], function (){
	Route::get('/', 'Merchant\ProductController@index')->name('merchant');
	Route::get('/addProduct', 'Merchant\ProductController@create')->name('addProduct');

	Route::post('/addProduct', 'Merchant\ProductController@store')->name('addProduct');
	Route::get('/allProduct', 'Merchant\ProductController@viewAllProduct')->name('allProduct');
	// Route::get('/logout', 'Auth\UserController@logout')->name('mechant_logout');
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
Route::get('/araha_market', 'Auth\UserController@arahaMarket')->name('araha_market');

// Route::get('/merchant_tradeline/{user}', 'User\TimelineController@index')->name('tradeline');

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

// Route::get('/user_tradeline', 'Auth\UserController@userTradeline')->name('user_tradeline')->middleware('auth');

Route::get('/product/details/{product_ref}/{reference}', 'Merchant\ProductController@productDetails')->name('product_details');
Route::get('/users/following/{reference}', 'FollowController@following')->name('following');
Route::get('/users/followers/{reference}', 'FollowController@followers')->name('followers');
Route::get('/users/profile/edit', 'User\ProfileController@index')->name('edit_profile')->middleware('auth');
Route::get('/users/profile/{reference}', 'User\ProfileController@show')->name('view_profile')->middleware('auth');
Route::post('/users/profile/edit/account', 'User\ProfileController@userSave')->name('update_profile')->middleware('auth');
Route::post('/users/profile/edit/user', 'User\ProfileController@userAccountSave')->name('update_user')->middleware('auth');
Route::post('/users/profile/edit/merchant', 'User\ProfileController@merchantAccountSave')->name('update_merchant')->middleware('auth');
Route::post('/users/profile/edit/password', 'User\ProfileController@changePassword')->name('change_pasword')->middleware('auth');
Route::get('hottest_product/{reference}', 'Merchant\ProductController@hottestProduct')->name('hottest_products');
Route::get('trade_request', 'Merchant\TradeRequestController@showMerchants')->name('trade_request')->middleware('merchant');
// Route::post('trade_request/{reference}', 'Merchant\TradeRequestController')->name('trade_request')->middleware('merchant');
Route::get('/state/market/{reference}', 'User\StateMarketController@show')->name('state_market')->middleware('auth');

Route::get('tradeline/{reference}', 'User\TradelineController@index')->name('tradeline')->middleware('auth');


