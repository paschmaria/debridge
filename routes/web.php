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

Route::get('/search/user/{search}', 'Search\UserSearchController@search')->name('search_user'); 

Route::get('/', 'Auth\UserController@index')->name('index'); 
Route::get('/nigeria/market/{filter?}', 'Auth\UserController@index')->name('nigeria'); 

Route::get('/logout', 'Auth\UserController@logout')->name('logout');

Route::post('/post', 'User\PostController@store')->name('create_post');
Route::post('/post/comment/create/{post}', 'User\CommentController@store')->name('create_comment');
Route::get('/post/comment/delete/{id}', 'User\CommentController@destroy')->name('delete_comment')->middleware('auth');
Route::get('/post/delete/{post}', 'User\PostController@destroy')->name('delete_post');

Route::get('/post/hype/{post}', 'User\HypeController@create')->name('hype');
Route::get('/post/admire/{post}', 'User\AdmireController@create')->name('admire');
Route::get('/post/unadmire/{post}', 'User\AdmireController@destroy')->name('unadmire');

Route::post('/product/hype/{product}', 'Merchant\ProductHypeController@create')->name('product_hype');
Route::get('/product/admire/{product}', 'User\ProductAdmireController@create')->name('product_admire');
Route::get('/product/unadmire/{product}', 'User\ProductAdmireController@destroy')->name('product_unadmire');
Route::get('/product/details/{reference}', 'Merchant\ProductController@show')->name('product_details')->middleware('auth');

Route::get('/user/tradeline/{reference}/{filter?}', 'User\TimelineController@index')->name('timeline')->middleware('auth');

Route::get('/users/follow/friends', 'FollowController@getUser')->name('follow_friends');
Route::get('/users/follow/merchants', 'FollowController@getMerchant')->name('follow_merchants');
Route::post('/users/follow/friends', 'FollowController@friendsFollowComplete')->name('follow_friends');
Route::post('/users/follow/merchants', 'FollowController@merchantsFollowComplete')->name('follow_merchants');

Route::get('/users/social_notification/delete/{notification}', 'NotificationController@destroy')->name('delete_social_notification');

Route::get('/users/community/{user}/{filter?}', 'User\TradeCommunityController@index')->name('community')->middleware('auth');
Route::get('/users/follow/more/{filter?}', 'Auth\UserController@viewUsers')->name('view_users')->middleware('auth');

Route::post('users/profile_picture/{id}', 'Auth\UserController@profile_picture')->name('profile_picture')->middleware('auth');

Route::match(['get', 'post'], '/merchant/trade/request/send/{user}', 'Merchant\TradeRequestController@create')->name('send_trade_request')->middleware('merchant');

Route::get('/merchant/trade/partner/end/{user}', 'Merchant\TradePartnerController@destroy')->name('cancel_patrnership');

Route::match(['get', 'post'], '/merchant/trade/request/cancel/{user}', 'Merchant\TradeRequestController@destroy')->name('undo_trade_request')->middleware('merchant');

Route::match(['get', 'post'], '/merchant/trade/request/accept/{user}', 'Merchant\TradePartnerController@create')->name('accept_partnership')->middleware('merchant');

Route::match(['get', 'post'], '/merchant/trade/request/decline/{user}', 'Merchant\TradeRequestController@decline')->name('reject_partnership');
Route::get('/merchant/trade/request/all', 'Merchant\TradeRequestController@index')->name('view_trade_request')->middleware('merchant');
Route::get('/merchant/trade/find/partner', 'Merchant\TradePartnerController@findMore')->name('add_more_partners')->middleware('merchant');
Route::get('/merchant/trade/partner/{reference}', 'Merchant\TradePartnerController@show')->name('view_partners')->middleware('merchant');

Route::post('/follow/{user}', 'FollowController@store')->name('follow');

Route::post('/unfollow/{user}', 'FollowController@destroy')->name('unfollow');

Route::get('/register', 'Auth\UserController@register')->name('register');

Route::post('/register', 'Auth\UserController@create')->name('register');

Route::get('/friends/all/{user}', 'User\FriendsController@index')->name('view_friends');
Route::get('/friends/request', 'User\FriendRequestController@index')->name('view_friend_request');
Route::get('/friends/request/send/{user}', 'User\FriendRequestController@create')->name('send_friend_request');
Route::get('/friends/request/cancel/{user}', 'User\FriendRequestController@destroy')->name('cancel_friend_request');
Route::get('/friends/request/accept/{user}', 'User\FriendsController@create')->name('accept_friend');
Route::get('/friends/request/decline/{user}', 'User\FriendRequestController@decline')->name('decline_friend');
Route::get('/friends/unfriend/{user}', 'User\FriendsController@destroy')->name('unfriend');
Route::get('/friends/find', 'User\FriendsController@findMore')->name('more_friends');

// Route::get('/upload', 'User\PhotoAlbumController@index')->name('upload');
// Route::post('/upload', 'User\PhotoAlbumController@create')->name('upload');
// Route::post('/upload', 'User\PhotoAlbumController@create')->name('upload');

Route::get('/images/{folder}/{reference}', 'User\ImageController@show')->name('image');
// Route::post('/delete_image/{id}', 'User\ImageController@destroy')->name('delete_image');
Route::post('/users/profile/edit/picture', 'User\ImageController@store')->name('upload_profile_pic');
// Route::get('/delete_image/{id}', 'User\ImageController@destroy')->name('delete_image');
// Route::post('/delete_album/{id}', 'User\PhotoAlbumController@destroy')->name('delete_album');

Route::get('/register', 'Auth\UserController@register')->name('register');
Route::post('/registered', 'Auth\UserController@create')->name('registered');
Route::post('/register', 'Auth\UserController@postLogin')->name('login');

Route::group(['prefix' => 'merchant', 'middleware'=> 'merchant'], function (){
	Route::get('/', 'Merchant\ProductController@index')->name('merchant');
	Route::get('/addProduct', 'Merchant\ProductController@create')->name('addProduct');

	Route::post('/addProduct', 'Merchant\ProductController@store')->name('addProduct');
	// Route::get('/allProduct', 'Merchant\ProductController@viewAllProduct')->name('allProduct');
	// Route::get('/logout', 'Auth\UserController@logout')->name('mechant_logout');
	Route::get('/product/delete/{product}', 'Merchant\ProductController@destroy')->name('delete');
	Route::get('/product/edit/{id}', 'Merchant\ProductController@edit')->name('edit_product');
	Route::post('/product/update/{id}', 'Merchant\ProductController@edit')->name('update_product');

	Route::post('/product_of_week/{reference}', 'Merchant\ProductOfTheWeekController@create')->name('product_of_the_week');

	// Route::get('/view_product_of_week', 'Merchant\ProductController@viewProductOfTheWeek')->name('view_product_of_the_week');

	Route::post('/promo/add/{product}', 'Merchant\PromoController@create')->name('add_promo');
	Route::get('/promo/remove/{product}', 'Merchant\PromoController@destroy')->name('remove_promo');
	// Route::get('/whats_new', 'Merchant\ProductController@whats_new')->name('whats_new');
	Route::get('/hottest_deals/add/{product}', 'Merchant\HottestProductController@create')->name('add_hottest');
	Route::get('/hottest_deals/remove/{product}', 'Merchant\HottestProductController@destroy')->name('del_hottest');

});
// Route::get('/merchant/product/{id}', 'Merchant\ProductController@show')->name('product');

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

// Route::get('/user/{email}', 'User\AccountController@index')->name('user_profile');
Route::get('/araha_market', 'Auth\UserController@arahaMarket')->name('araha_market');

// Route::get('/merchant_tradeline/{user}', 'User\TimelineController@index')->name('tradeline');

Route::get('/bridger', 'Auth\UserController@bridger')->name('bridger');

Route::get('/bridger_request', 'Auth\UserController@bridgerRequest')->name('bridger_request');

Route::get('/bridge_shops', 'Auth\UserController@bridgeShops')->name('bridge_shops');

Route::get('/edit_profile', 'User\AccountController@editProfile')->name('edit_profile');

Route::get('/exhibition', 'Auth\UserController@exhibition')->name('exhibition');

// Route::get('/follow_brands', 'Auth\UserController@followBrands')->name('follow_brands');

Route::get('/hiring', 'Auth\UserController@hiring')->name('hiring');

Route::get('/lagos_market', 'Auth\UserController@lagosMarket')->name('lagos_market');

Route::get('/port-harcourt_market', 'Auth\UserController@port_harcourtMarket')->name('port-harcourt_market');

// Route::get('/mycart', 'Auth\UserController@myCart')->name('mycart');

// Route::get('/merchant_store/', 'Merchant\ProductController@merchantStore')->name('merchant_store')->middleware('merchant');

// Route::get('/merchant_store/{user}', 'Merchant\ProductController@StoreForUser')->name('user_store');
Route::get('/merchant/store/{user}', 'Merchant\InventoryController@index')->name('view_inventory')->middleware('auth');

Route::get('/cart/add/{product}', 'User\CartController@addToCart')->name('addToCart')->middleware('auth');
Route::get('/cart/remove/{product}', 'User\CartController@removeItem')->name('removeItem')->middleware('auth');
Route::get('/cart/clear', 'User\CartController@clearCart')->name('clearCart')->middleware('auth');
Route::get('/cart/view', 'User\CartController@viewCart')->name('viewCart')->middleware('auth');

Route::get('/users/following/{reference}/{filter?}', 'FollowController@following')->name('following');
Route::get('/users/followers/{reference}/{filter?}', 'FollowController@followers')->name('followers');

Route::get('/users/profile/edit', 'User\ProfileController@index')->name('edit_profile')->middleware('auth');
Route::get('/users/profile/{reference}', 'User\ProfileController@show')->name('view_profile')->middleware('auth');
Route::post('/users/profile/edit/account', 'User\ProfileController@userSave')->name('update_profile')->middleware('auth');
Route::post('/users/profile/edit/user', 'User\ProfileController@userAccountSave')->name('update_user')->middleware('auth');
Route::post('/users/profile/edit/merchant', 'User\ProfileController@merchantAccountSave')->name('update_merchant')->middleware('auth');
Route::post('/users/profile/edit/password', 'User\ProfileController@changePassword')->name('change_pasword')->middleware('auth');

Route::get('/merchant/store/product/hottest/{reference}', 'Merchant\HottestProductController@show')->name('hottest_products')->middleware('auth');
// Route::post('trade_request/{reference}', 'Merchant\TradeRequestController')->name('trade_request')->middleware('merchant');
Route::get('/state/market/{reference}/{filter?}', 'User\StateMarketController@show')->name('state_market');//->middleware('auth');

// Route::get('tradeline/{reference}', 'User\TradelineController@index')->name('tradeline')->middleware('auth');
