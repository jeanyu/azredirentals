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

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin',['as'=>'admin.page.index','uses'=>'Admin\PageController@index']);

/* Users */
Route::get('user',['as'=>'admin.page.user','uses'=>'Admin\UserController@index']);
Route::get('user/add-user',['as'=>'admin.page.createUser','uses'=>'Admin\UserController@create']);

/* Landlords */
Route::get('landlord',['as'=>'admin.landlord.index','uses'=>'Admin\LandlordController@index']);
Route::get('add-landlord',['as'=>'admin.landlord.create','uses'=>'Admin\LandlordController@create']);
Route::post('landlord',['as'=>'admin.landlord.store','uses'=>'Admin\LandlordController@store']);
Route::put('landlord/{id}',['as'=>'admin.landlord.update','uses'=>'Admin\LandlordController@update']);
Route::get('landlord/edit/{id}',['as'=>'admin.landlord.edit','uses'=>'Admin\LandlordController@edit']);

/* Renters */
Route::get('renter',['as'=>'admin.renter.index','uses'=>'Admin\RenterController@index']);
Route::get('add-renter',['as'=>'admin.renter.create','uses'=>'Admin\RenterController@create']);
Route::post('renter',['as'=>'admin.renter.store','uses'=>'Admin\RenterController@store']);
Route::put('renter/{id}',['as'=>'admin.renter.update','uses'=>'Admin\RenterController@update']);
Route::get('renter/edit/{id}',['as'=>'admin.renter.edit','uses'=>'Admin\RenterController@edit']);


/* Listing */
Route::get('listing',['as'=>'admin.page.listing','uses'=>'Admin\ListingController@index']);
Route::get('add-listing',['as'=>'admin.page.createListing','uses'=>'Admin\ListingController@create']);
