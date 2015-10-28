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
Route::get('landlord',['as'=>'admin.page.landlord','uses'=>'Admin\MemberController@index']);
Route::get('add-landlord',['as'=>'admin.page.createLandlord','uses'=>'Admin\MemberController@create']);
Route::post('landlord',['as'=>'admin.landlord.store','uses'=>'Admin\MemberController@store']);

/* Listing */
Route::get('listing',['as'=>'admin.page.listing','uses'=>'Admin\ListingController@index']);
Route::get('add-listing',['as'=>'admin.page.createListing','uses'=>'Admin\ListingController@create']);
