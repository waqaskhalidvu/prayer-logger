<?php

class PrayerlogsController extends \BaseController {

	/**
	 * Display a listing of prayerlogs
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('prayerlogs.index');

		//$prayerlogs = Prayerlog::all();

		//return View::make('prayerlogs.index', compact('prayerlogs'));
	}

	/**
	 * Show the form for creating a new prayerlog
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('prayerlogs.create');
	}

	/**
	 * Store a newly created prayerlog in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Prayerlog::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Prayerlog::create($data);

		return Redirect::route('prayerlogs.index');
	}

	/**
	 * Display the specified prayerlog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prayerlog = Prayerlog::findOrFail($id);

		return View::make('prayerlogs.show', compact('prayerlog'));
	}

	/**
	 * Show the form for editing the specified prayerlog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prayerlog = Prayerlog::find($id);

		return View::make('prayerlogs.edit', compact('prayerlog'));
	}

	/**
	 * Update the specified prayerlog in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$prayerlog = Prayerlog::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Prayerlog::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$prayerlog->update($data);

		return Redirect::route('prayerlogs.index');
	}

	/**
	 * Remove the specified prayerlog from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Prayerlog::destroy($id);

		return Redirect::route('prayerlogs.index');
	}

}
