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


/* CUSTOMER */
//////////////

Route::get('/', function(){
    return view('customer/pages/home');
});

Route::get('/models', function(){
    return view('customer/pages/models');
});

Route::get('/details/{id}', function(){
    return view('customer/pages/details');
});

Route::get('/payment/{id}', function(){
    return view('customer/pages/payment');
});

Route::get('/preload', function(){
    return view('global/preload');
});
/* end */




/* ADMIN */
////////////

/* Route for Admin */

Route::get('/admin', 'AdminController@index');

Route::get('/dashboard', 'AdminController@dashboard');

Route::post('/admin/chacklogin', 'AdminController@login');

Route::get('/admin/logout', 'AdminController@logout');
/* end */



/* Route for Country */

Route::get('/addCountry', 'CountryController@viewAdd');
Route::post('/addCountry', 'CountryController@create');

Route::get('/editCountry/{id}', 'CountryController@viewEdit');
Route::post('/editCountry', 'CountryController@edit');

Route::get('/deleteCountry/{id}', 'CountryController@delete');
/* end  */



/* Route for Brand */

Route::get('/addBrand', 'BrandController@viewAdd');
Route::post('/addBrand', 'BrandController@create');

Route::get('/editBrand/{id}', 'BrandController@viewEdit');
Route::post('/editBrand', 'BrandController@edit');

Route::get('/deleteBrand/{id}', 'BrandController@delete');
/* end */



/* Route for Laws */

Route::get('/addLawsGlass', 'LawsGlassController@viewAdd');
Route::post('/addLawsGlass', 'LawsGlassController@create');

Route::get('/editLawsGlass/{id}', 'LawsGlassController@viewEdit');
Route::post('/editLawsGlass', 'LawsGlassController@edit');

Route::get('/deleteLawsGlass/{id}', 'LawsGlassController@delete');
/* end */



/* Route for Engine */

Route::get('/addEngine', 'EngineController@viewAdd');
Route::post('/addEngine', 'EngineController@create');

Route::get('/editEngine/{id}', 'EngineController@viewEdit');
Route::post('/editEngine', 'EngineController@edit');

Route::get('/deleteEngine/{id}', 'EngineController@delete');
/* end */



/* Route for Package */

Route::get('/addPackage', 'PackageController@viewAdd');
Route::post('/addPackage', 'PackageController@create');

Route::get('/editPackage/{id}', 'PackageController@viewEdit');
Route::post('/editPackage', 'PackageController@edit');

Route::get('/deletePackage/{id}', 'PackageController@delete');
/* end */


/* Route for Tire */

Route::get('/addTire', 'TireController@viewAdd');
Route::post('/addTire', 'TireController@create');

Route::get('/editTire/{id}', 'TireController@viewEdit');
Route::post('/editTire', 'TireController@edit');

Route::get('/deleteTire/{id}', 'TireController@delete');
/* end */

/* Route for Models */

Route::get('/addModel', 'ModelController@viewAdd');
Route::post('/addModel', 'ModelController@create');

Route::get('/editModel/{id}', 'ModelController@viewEdit');
Route::post('/editModel', 'ModelController@edit');

Route::get('/deleteModel/{id}', 'ModelController@delete');
/* end */




/* OTHER */
///////////

/* Error pages */

Route::get('/404', ['as'=>'404', 'uses' => 'ErrorController@notFound']);
/* end */