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

Route::get('/', 'LandingPageController@index');

Auth::routes();

Route::get('/profile', 				'HomeController@index')->name('profile');
Route::post('/update_profile_info',  'HomeController@store')->name('update_profile_info');
Route::post('/update_profile_photo',  'HomeController@update_profile_photo')->name('update_profile_photo');

Route::get('/add_listing', 			'ListingController@create')->name('add_listing');
Route::post('/add_listing', 		'ListingController@store')->name('add_listing');
Route::get('/listing_detail/{id}', 	'ListingController@listing_detail')->name('listing_detail');
Route::post('/coupon_request', 		'CouponsController@coupon_request')->name('coupon_request');

Route::get('/listings', 			'HomeController@listings')->name('listings');

Route::get('/buyings', 				'HomeController@buyings')->name('buyings');
Route::get('/sellings', 			'HomeController@sellings')->name('sellings');
Route::get('/coupons_history', 		'HomeController@coupons_history')->name('coupons_history');

// admin routes

// Route::get('/admin', 'Admin\AdminController@create');
Route::get('/dashboard', 'Admin\AdminController@index')->name('dashboard');
Route::get('/all_categories', 'Admin\CategoryController@index')->name('all_categories');
Route::get('/add_category', 'Admin\CategoryController@create')->name('add_category');
Route::post('/add_category', 'Admin\CategoryController@store')->name('add_category');

Route::get('/all_listings', 'Admin\ListingController@index')->name('admin_all_listings');
Route::post('/update_deals','Admin\AjaxController@post')->name('update_deals');

Route::get('/admin/add_listing', 'Admin\ListingController@create')->name('admin_add_listing');
Route::post('/admin/add_listing', 'Admin\ListingController@store')->name('admin_add_listing');

Route::get('/best_deals', 'Admin\DealController@best_deals')->name('best_deals');
Route::get('/popular_deals', 'Admin\DealController@popular_deals')->name('popular_deals');
Route::get('/featured_deals', 'Admin\DealController@featured_deals')->name('featured_deals');

Route::get('/pending_users', 'Admin\UserController@pending_users')->name('pending_users');
Route::get('/approved_users', 'Admin\UserController@approved_users')->name('approved_users');

Route::get('/all_coupons', 'Admin\CouponsController@index')->name('all_coupons');
Route::get('/generate_coupons', 'Admin\CouponsController@create')->name('generate_coupons');
Route::post('/add_coupons', 'Admin\CouponsController@store')->name('add_coupons');
Route::get('/purchased_coupons', 'Admin\CouponsController@purchased_coupons')->name('purchased_coupons');

Route::get('/plans', 'Admin\MembershipController@plans')->name('plans');
Route::get('/all_users', 'Admin\MembershipController@all_users')->name('all_users');
Route::get('/expired_users', 'Admin\MembershipController@expired_users')->name('expired_users');
Route::get('/expiring_soon', 'Admin\MembershipController@expiring_soon')->name('expiring_soon');
