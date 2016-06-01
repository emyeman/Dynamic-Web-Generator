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


	Route::get('/service/delete/{service}','ServiceController@delete');
	Route::get('/service/edit/{service}','ServiceController@edit');
	Route::patch('/service/update/{service}','ServiceController@update');
    Route::resource('/site','SiteController'); 
    Route::resource('/service','ServiceController');    
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
	Route::resource('/promotion','PromotionController');
	Route::get('/category/destroy/{id}','CategoryController@destroy');
	Route::get('/subcategory/destroy/{id}','SubCategoryController@destroy');
	Route::get('/product/destroy/{id}','ProductController@destroy');

	if (Request::ajax()){
		Route::get('/product/{id}','ProductController@ajaxcreate');
	}
});
// **********************************************************************************



// // route for delete data


// Route::get('/branding/destroy/{id}','BrandingController@destroy');
// Route::get('/crusal/destroy/{id}','CrusalController@destroy');
// Route::get('/navbar/destroy/{id}','NavbarController@destroy');
// Route::get('/news/destroy/{id}','NewsController@destroy');
// Route::get('/page/destroy/{id}','PagesController@destroy');
// Route::get('/stylecontainer/destroy/{id}','StyleContainerController@destroy');
// Route::get('/promotion/destroy/{id}','PromotionController@destroy');
// Route::get('/contactus/destroy/{id}','ContactUsController@destroy');
// Route::get('/footer/destroy/{id}','FooterController@destroy');
// Route::get('/numberview/destroy/{id}','NumberViewController@destroy');
// Route::get('/domain/destroy/{id}','DomainController@destroy');

// **************************************************************************************
// Route::get ('/getrequest',function(){
// 	if (Request::ajax()){
// 		// return 'emyyyyyyyyyyyyyy';
// 		Route::get('/product','ProductController@ajaxindex');
// 	}
// });


// **************************************************************************************

