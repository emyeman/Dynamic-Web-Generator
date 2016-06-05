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


	Route::get('/user/edit/{user}','UserController@edit');
	Route::patch('/user/update/{user}','UserController@update');
	Route::resource('/user','UserController');



	Route::get('/promotion/{t}', 'PromotionController@index')->name('promotion.index');
	Route::get('/promotion/create/{t}', 'PromotionController@create')->name('promotion.create');
	Route::resource('/promotion','PromotionController',['except' => ['create', 'index']]);
  
	Route::resource('/aboutus','AboutUsController',['except' => ['index']]);   


	Route::get('/service/delete/{service}','ServiceController@delete');
	Route::get('/service/edit/{service}','ServiceController@edit');
	Route::patch('/service/update/{service}','ServiceController@update');
	Route::resource('/service','ServiceController');    


	Route::get('/site/edit/{site}','SiteController@edit');
	Route::patch('/site/update/{site}','SiteController@update');
    Route::resource('/site','SiteController'); 

	Route::any('branding/edit','BrandingController@edit'); 
	Route::any('branding/update','BrandingController@update'); 
    
    Route::resource('branding','BrandingController');    
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
	Route::resource('/googlemap','GoogleMapController');

	if (Request::ajax()){
		Route::get('/product/create/{id}','ProductController@ajaxcreate');
		Route::get('/googlemap/storelocation/{XYlocation}','GoogleMapController@ajaxstore');
	}


	// Route::get('/category/destroy/{id}','CategoryController@destroy');
	// Route::get('/subcategory/destroy/{id}','SubCategoryController@destroy');
	// Route::get('/product/destroy/{id}','ProductController@destroy');

	// if (Request::ajax()){
	// 	Route::get('/product/{id}','ProductController@ajaxcreate');
	// }


	
	
});

