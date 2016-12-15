<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
Auth::routes();
Route::get('/','HomeController@index');
Route::get('/home','HomeController@index');
Route::get('/about','HomeController@about');
Route::get('/dashboard','HomeController@dashboard');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'Auth\RegisterController@register');
Route::get('/profile/edit', 'UsersController@edit');
Route::post('/profile/edit', 'UsersController@update');

Route::get('/products/view','ProductsController@index');
Route::get('/products/add','ProductsController@create');
Route::post('/products/add','ProductsController@store');
Route::get('/products/edit/{id}','ProductsController@edit');
Route::post('/products/edit/{id}','ProductsController@update');
Route::get('/product/{id}/delete','ProductsController@destroy');

Route::get('/risk_types/view','RiskTypesController@index');
Route::get('/risk_types/add','RiskTypesController@create');
Route::post('/risk_types/add','RiskTypesController@store');
Route::get('/risk_types/edit/{id}','RiskTypesController@edit');
Route::post('/risk_types/edit/{id}','RiskTypesController@update');
Route::get('/risk_type/{id}/delete','RiskTypesController@destroy');

Route::get('/business_components/view','BusinessComponentsController@index');
Route::get('/business_components/add','BusinessComponentsController@create');
Route::post('/business_components/add','BusinessComponentsController@store');
Route::get('/business_components/edit/{id}','BusinessComponentsController@edit');
Route::post('/business_components/edit/{id}','BusinessComponentsController@update');
Route::get('/business_component/{id}/delete','BusinessComponentsController@destroy');