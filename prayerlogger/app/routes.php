<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('homes', 'HomesController');
Route::resource('users', 'UsersController');
Route::resource('prayerlogs', 'PrayerlogsController');
Route::resource('mosques', 'MosquesController');
Route::resource('prayers', 'PrayersController');
Route::resource('qiblahdirections', 'QiblahdirectionsController');
Route::resource('settings', 'SettingsController');


Route::get('/account/activate/{code}', array(
		'as' => 'account-activate',
		'uses' => 'UsersController@getActivate'
	));

Route::post('/account/sign-in', array(
		'as' => 'account-sign-in',
		'uses' => 'UsersController@postSignIn'
	));


Route::get('/locationfind', function()
    {
        return View::make('prayerlogs.locationfind');
    });

Route::get('/selectmosque', function()
    {
        return View::make('prayerlogs.selectmosque');
    });

Route::get('/logout', array(
		'as' => 'logout',
		'uses' => 'UsersController@logout'
	));