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
//Home routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/', 'HomeController@search')->name('search');
Route::get('/admin', 'HomeController@admin')->name('admin');

//Car Routes
Route::get('/admin/cars', 'CarController@index')->name('car-list');
Route::get('/admin/car/{car}', 'CarController@show')->name('show-car');
Route::get('/admin/add-car', 'CarController@create')->name('add-car');
Route::post('/admin/add-car', 'CarController@store')->name('store-car');

//Customer routes
Route::get('/admin/customers', 'CustomerController@index')->name('customers-list');
Route::get('/admin/customers/{customer}', 'CustomerController@show')->name('show-customer');
Route::get('/admin/add-customer', 'CustomerController@create')->name('add-customer');
Route::post('/admin/add-customer', 'CustomerController@store')->name('store-customer');
Route::delete('/admin/delete-customer/{customer}', 'CustomerController@destroy')->name('destroy-customer');

//Rent car routes
Route::get('/add-rent', 'ReservationController@create')->name('add-reservation');
Route::post('/add-rent', 'ReservationController@store')->name('store-rent');
Route::post('/add-rent/search', 'ReservationController@search')->name('reservation-search');