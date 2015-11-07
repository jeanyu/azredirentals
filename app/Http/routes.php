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
Route::get('user',['as'=>'admin.user.index','uses'=>'Admin\UserController@index']);
Route::get('add-user',['as'=>'admin.user.create','uses'=>'Admin\UserController@create']);
Route::post('user',['as'=>'admin.user.store','uses'=>'Admin\UserController@store']);
Route::put('user/{id}',['as'=>'admin.user.update','uses'=>'Admin\UserController@update']);
Route::get('user/edit/{id}',['as'=>'admin.user.edit','uses'=>'Admin\UserController@edit']);
Route::get('user/delete/{id}',['as'=>'admin.user.delete','uses'=>'Admin\UserController@destroy']);

/* Landlords */
Route::get('landlord',['as'=>'admin.landlord.index','uses'=>'Admin\LandlordController@index']);
Route::get('add-landlord',['as'=>'admin.landlord.create','uses'=>'Admin\LandlordController@create']);
Route::post('landlord',['as'=>'admin.landlord.store','uses'=>'Admin\LandlordController@store']);
Route::put('landlord/{id}',['as'=>'admin.landlord.update','uses'=>'Admin\LandlordController@update']);
Route::get('landlord/edit/{id}',['as'=>'admin.landlord.edit','uses'=>'Admin\LandlordController@edit']);
Route::get('landlord/delete/{id}',['as'=>'admin.landlord.delete','uses'=>'Admin\LandlordController@destroy']);

/* Renters */
Route::get('renter',['as'=>'admin.renter.index','uses'=>'Admin\RenterController@index']);
Route::get('add-renter',['as'=>'admin.renter.create','uses'=>'Admin\RenterController@create']);
Route::post('renter',['as'=>'admin.renter.store','uses'=>'Admin\RenterController@store']);
Route::put('renter/{id}',['as'=>'admin.renter.update','uses'=>'Admin\RenterController@update']);
Route::get('renter/edit/{id}',['as'=>'admin.renter.edit','uses'=>'Admin\RenterController@edit']);
Route::get('renter/delete/{id}',['as'=>'admin.renter.delete','uses'=>'Admin\RenterController@destroy']);


/* Listing */
Route::get('listing',['as'=>'admin.listing.index','uses'=>'Admin\ListingController@index']);
Route::get('add-listing',['as'=>'admin.listing.create','uses'=>'Admin\ListingController@create']);
Route::post('listing',['as'=>'admin.listing.store','uses'=>'Admin\ListingController@store']);
Route::put('listing/{id}',['as'=>'admin.listing.update','uses'=>'Admin\ListingController@update']);
Route::get('listing/edit/{id}',['as'=>'admin.listing.edit','uses'=>'Admin\ListingController@edit']);
Route::get('listing/delete/{id}',['as'=>'admin.listing.delete','uses'=>'Admin\ListingController@destroy']);
