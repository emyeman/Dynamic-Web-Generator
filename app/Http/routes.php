<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
// Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');


// The user is logged in...
Route::group(['middleware' => 'auth'], function () {

	Route::get('/dashboard', function () {
    return view('dashboard');
	});

	Route::get('/promotion/{t}', 'PromotionController@index')->name('promotion.index');
	Route::get('/promotion/create/{t}', 'PromotionController@create')->name('promotion.create');
	Route::resource('/promotion','PromotionController',['except' => ['create', 'index']]);

});

Route::resource('/branding','BrandingController');    
Route::resource('/navbar','NavbarController');
Route::resource('/page','PagesController');
Route::resource('/crusal','CrusalController');
Route::resource('/news','NewsController');
Route::resource('/stylecontainer','StyleContainerController');
Route::resource('/category','CategoryController');
Route::resource('/subcategory','SubCategoryController');
Route::resource('/product','ProductController');
Route::resource('/contactus','ContactUsController');
Route::resource('/footer','FooterController');
Route::resource('/numberview','NumberViewController');
Route::resource('/domain','DomainController');


// **********************************************************************************

// // route for delete data

// Route::get('/branding/destory/{id}','BrandingController@destory');
// Route::get('/category/destory/{id}','CategoryController@destory');
// Route::get('/crusal/destory/{id}','CrusalController@destory');
// Route::get('/navbar/destory/{id}','NavbarController@destory');
// Route::get('/news/destory/{id}','NewsController@destory');
// Route::get('/page/destory/{id}','PagesController@destory');
// Route::get('/stylecontainer/destory/{id}','StyleContainerController@destory');
// Route::get('/subcategory/destory/{id}','SubCategoryController@destory');
// Route::get('/product/destory/{id}','ProductController@destory');
// Route::get('/promotion/destory/{id}','PromotionController@destory');
// Route::get('/contactus/destory/{id}','ContactUsController@destory');
// Route::get('/footer/destory/{id}','FooterController@destory');
// Route::get('/numberview/destory/{id}','NumberViewController@destory');
// Route::get('/domain/destory/{id}','DomainController@destory');

// **************************************************************************************

