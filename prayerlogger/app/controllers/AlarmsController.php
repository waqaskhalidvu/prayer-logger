<?php

class AlarmsController extends \BaseController {

	/**
	 * Display a listing of alarms
	 *
	 * @return Response
	 */
	public function index()
	{
		$alarms = Alarm::all();

		return View::make('alarms.index', compact('alarms'));
	}

	/**
	 * Show the form for creating a new alarm
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('alarms.create');
	}

	/**
	 * Store a newly created alarm in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Alarm::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Alarm::create($data);

		return Redirect::route('alarms.index');
	}

	/**
	 * Display the specified alarm.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$alarm = Alarm::findOrFail($id);

		return View::make('alarms.show', compact('alarm'));
	}

	/**
	 * Show the form for editing the specified alarm.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$alarm = Alarm::find($id);

		return View::make('alarms.edit', compact('alarm'));
	}

	/**
	 * Update the specified alarm in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$alarm = Alarm::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Alarm::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$alarm->update($data);

		return Redirect::route('alarms.index');
	}

	/**
	 * Remove the specified alarm from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Alarm::destroy($id);

		return Redirect::route('alarms.index');
	}

}
