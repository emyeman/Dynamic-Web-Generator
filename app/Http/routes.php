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



Route::post('/message','MessageController@store')->name('message.store');;
// The user is logged in...
Route::group(['middleware' => 'auth'], function () {


	Route::get('/dashboard', function () {
    	return view('dashboard');
	});

	// Route::get('/dashboard','DashboardController@index');

	
	Route::get('/user/edit/{user}','UserController@edit');
	Route::patch('/user/update/{user}','UserController@update');
	Route::resource('/user','UserController');

	Route::get('/news_promotion/{t}', 'NewsPromotionController@index')->name('news_promotion.index');
	Route::get('/news_promotion/create/{t}', 'NewsPromotionController@create')->name('news_promotion.create');
	Route::resource('/news_promotion','NewsPromotionController',['except' => ['create', 'index']]);
	Route::resource('/aboutus','AboutUsController',['except' => ['index']]); 
	Route::post('/menu/updateall','MenuController@updateAll');
	Route::resource('/menu','MenuController');
	Route::resource('/page','PagesController');
	Route::resource('/crusal','CrusalController');  

	Route::get('/service/delete/{service}','ServiceController@delete');
	Route::get('/service/edit/{service}','ServiceController@edit');
	Route::patch('/service/update/{service}','ServiceController@update');
	Route::resource('/service','ServiceController'); 
    Route::get('/activetemp/{id}','SiteController@activetemp');

	Route::get('/site/edit/{site}','SiteController@edit');
	Route::patch('/site/update/{site}','SiteController@update');
    Route::resource('/site','SiteController'); 
	Route::get('/branding/edit/{header}','BrandingController@edit'); 
	Route::patch('/branding/{header}','BrandingController@update');     
    Route::resource('/branding','BrandingController');    
	Route::resource('/stylecontainer','StyleContainerController');
	Route::resource('/category','CategoryController');
	Route::resource('/subcategory','SubCategoryController');
	Route::resource('/product','ProductController');
	Route::resource('/contactus','ContactUsController');
	Route::resource('/footer','FooterController');
	Route::resource('/numberview','NumberViewController');
	Route::patch('/domain/update/{domain}','DomainController@update');
	Route::get('/domain/edit/{domain}','DomainController@edit');
	Route::resource('/domain','DomainController');
	Route::resource('/googlemap','GoogleMapController');

	Route::resource('/template','TemplateController');
	Route::get('/message/unseen','MessageController@unseen');
	Route::resource('/message','MessageController', ['except' => ['store']]);

	Route::get('/reseller/{user}/edit','ResellerController@edit');
	Route::patch('/reseller/{user}','ResellerController@update');

	Route::get('/gotosite','TemplateController@gotosite');

	Route::resource('/reseller', 'ResellerController', ['only' => [
    'index', 'show' , 'create' , 'store', 'update',
	]]);

	Route::resource('/reseller', 'ResellerController', ['except' => [
    	'create' , 'destroy',
	]]);

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

//***************************for generator new project*******************************



// Route::get('/webgenerator/{subdomain}/{temp_id}/show_en', function () {
//     	return view('temp1/show_en');
// });

// ***************** for make route of webgenerator


// Route::get('/webgenerator/{subdomain}/{temp_id}/show_en','TemplateController@Show');


Route::get('/{subdomain}/en','TemplateController@Show');
Route::get('/{subdomain}/ar','TemplateController@Show');




// Route::get('/{subdomain}/{locale}','TemplateController@Show');
