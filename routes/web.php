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

/* Customer */

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

Route::get('/404', ['as'=>'404', 'uses' => 'ErrorController@notFound']);


/* Admin */

Route::get('/admin', 'AdminController@index');

Route::get('/dashboard', 'AdminController@dashboard');

Route::post('/admin/chacklogin', 'AdminController@login');

Route::get('/admin/logout', 'AdminController@logout');




Route::get('/addCountry', 'CountryController@viewAdd');
Route::post('/addCountry', 'CountryController@create');

Route::get('/editCountry/{id}', 'CountryController@viewEdit');
Route::post('/editCountry', 'CountryController@edit');

Route::get('/deleteCountry/{id}', 'CountryController@delete');


Route::get('/admin/show', 'CountryController@show');

Route::get('/admin/create', function(){
    $country = new \App\Country();
    $country->name = 'UK';
    $country->capital_city = 'London';
    $country->save();
});


Route::get('/addModel', function(){
    return view('admin/pages/add/addModel');
});

Route::get('/editPackage', function(){
    return view('admin/pages/edit/editPackage');
});