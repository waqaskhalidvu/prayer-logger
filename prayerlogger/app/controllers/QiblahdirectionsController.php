<?php

class QiblahdirectionsController extends \BaseController {

	/**
	 * Display a listing of qiblahdirections
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('qiblahdirections.index');
		//$qiblahdirections = Qiblahdirection::all();

		//return View::make('qiblahdirections.index', compact('qiblahdirections'));
	}

	/**
	 * Show the form for creating a new qiblahdirection
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('qiblahdirections.create');
	}

	/**
	 * Store a newly created qiblahdirection in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Qiblahdirection::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Qiblahdirection::create($data);

		return Redirect::route('qiblahdirections.index');
	}

	/**
	 * Display the specified qiblahdirection.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$qiblahdirection = Qiblahdirection::findOrFail($id);

		return View::make('qiblahdirections.show', compact('qiblahdirection'));
	}

	/**
	 * Show the form for editing the specified qiblahdirection.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$qiblahdirection = Qiblahdirection::find($id);

		return View::make('qiblahdirections.edit', compact('qiblahdirection'));
	}

	/**
	 * Update the specified qiblahdirection in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$qiblahdirection = Qiblahdirection::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Qiblahdirection::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$qiblahdirection->update($data);

		return Redirect::route('qiblahdirections.index');
	}

	/**
	 * Remove the specified qiblahdirection from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Qiblahdirection::destroy($id);

		return Redirect::route('qiblahdirections.index');
	}

}
