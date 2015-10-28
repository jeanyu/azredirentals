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

/* Members */
<<<<<<< HEAD


Route::get('member','Admin\MemberController@index');
Route::get('member/add-member','Admin\MemberController@create');
Route::get('member/{id}','Admin\MemberController@show');
Route::post('member','Admin\MemberController@store');
=======
Route::get('member',['as'=>'admin.page.member','uses'=>'Admin\MemberController@index']);
Route::get('add-member',['as'=>'admin.page.createMember','uses'=>'Admin\MemberController@create']);
Route::post('member',['as'=>'admin.member.store','uses'=>'Admin\MemberController@store']);
>>>>>>> origin/master

/* Listing */
Route::get('listing',['as'=>'admin.page.listing','uses'=>'Admin\ListingController@index']);
Route::get('add-listing',['as'=>'admin.page.createListing','uses'=>'Admin\ListingController@create']);
