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



Route::get('/', 'HomeController@showIndex');
#Route::get('/index', 'HomeController@showIndex');
Route::get('/prayerbook', 'HomeController@showPrayerBook');
Route::get('/portfolio', 'HomeController@showPortfolio');
Route::get('/prayers', 'HomeController@showPrayers');
Route::get('/about-us', 'HomeController@showAboutus');


?>