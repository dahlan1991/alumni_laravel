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
/*----------Route Home-------------*/
Route::get('/', 'PagesController@homepage');
Route::get('about', 'PagesController@about');



/*-----------Route Search-----------*/
Route::post('cari', 'CariController@search' );


/*----------aadmministrator---------*/
/*Route::get('administrator', function() {
	return view('administrator.index');
}); */

Route::get('setting', function() {
	return view('administrator.setting');
});

/*----------Route Alumni-------------*/
Route::get('administrator', 'AlumniController@administrator');