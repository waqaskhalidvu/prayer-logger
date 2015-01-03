<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function showIndex()
	{
		return View::make('index');
	}

	public function showPrayerBook()
	{
		return View::make('prayerBook');
	}
	
	public function showPortfolio()
	{
		return View::make('contact-us');
	}

	

	public function showPrayers()
	{
		return View::make('prayers');
	}

	public function showContactus()
	{
		return View::make('contact-us');
	}
	
}
