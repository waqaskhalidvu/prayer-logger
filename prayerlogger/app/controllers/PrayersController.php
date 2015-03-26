<?php

class PrayersController extends \BaseController {

	/**
	 * Display a listing of prayers
	 *
	 * @return Response
	 */
	public function index()
	{
		//$calculation_method =  Auth::user()->calculation_method;
		//$juristic_method =  Auth::user()->juristic_method;
		return View::make('prayers.index');

		//$prayers = Prayer::all();

		//return View::make('prayers.index', compact('prayers'));
	}

	/**
	 * Show the form for creating a new prayer
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('prayers.create');
	}

	/**
	 * Store a newly created prayer in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Prayer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Prayer::create($data);

		return Redirect::route('prayers.index');
	}

	/**
	 * Display the specified prayer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		

		return View::make('prayers.show', compact('prayer'));
	}

	/**
	 * Show the form for editing the specified prayer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prayer = Prayer::find($id);

		return View::make('prayers.edit', compact('prayer'));
	}

	/**
	 * Update the specified prayer in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$prayer = Prayer::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Prayer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$prayer->update($data);

		return Redirect::route('prayers.index');
	}

	/**
	 * Remove the specified prayer from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Prayer::destroy($id);

		return Redirect::route('prayers.index');
	}

}
