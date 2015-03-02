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
//Route::get('/songs', 'SongsController@index');
Route::get('home',array(
'as'=>'get-home-page',
'uses'=>'SongsController@home'
	));
Route::post('home',array(
'as'=>'home-page',
'uses'=>'SongsController@home'
	));
Route::get('songs',array(
'as'=>'index-page',
'uses'=>'SongsController@index'
	));
Route::get('details/{id}', 'SongsController@details_info');


Route::get('delete/{id}',array(
'as'=>'delete-page',
'uses'=>'SongsController@delete'
	));


Route::get('add',array(
'as'=>'get-add-page',
'uses'=>'SongsController@getadd'


	));

Route::post('add',array(
'as'=>'post-add-page',
'uses'=>'SongsController@add'
	));
Route::get('edit/{id}',array(

'as'=>'get-edit-page',
'uses'=>'SongsController@edit'
	));

Route::post('edit/{id}',array(

'as'=>'post-edit-page',
'uses'=>'SongsController@update'
	));

Route::get('search',array(
'as'=>'search-data',
'uses'=>'SongsController@search'
	));
//Route::post('search',array(
//'as'=>'post-search-data',
//'uses'=>'SongsController@postSearch'
//	));
Route::get('/login',array(
'as'=>'login',
'uses'=>'AdminController@getlogin'
	))->before('guest');
Route::post('/login',array(
	'as'=>'post-login',
'uses'=>'AdminController@postlogin'
	))->before('crsf');

    
    Route::get('account-sign-out', array(
        'as' => 'account-sign-out',
        'uses' => 'AdminController@getSignOut'
    ));

