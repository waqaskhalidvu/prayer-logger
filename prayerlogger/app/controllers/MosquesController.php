<?php

class MosquesController extends \BaseController {

	/**
	 * Display a listing of mosques
	 *
	 * @return Response
	 */
	public function index()
	{	
		
		return View::make('mosques.index');

	}

	/**
	 * Show the form for creating a new mosque
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('mosques.create');
	}

	/**
	 * Store a newly created mosque in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Mosque::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$prayerlogs = Auth::user()->prayerlogs()->orderBy('id', 'desc')->first();


		Mosque::create($data);

		return Redirect::route('mosques.index');
	}

	/**
	 * Display the specified mosque.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$mosque = Mosque::findOrFail($id);

		return View::make('mosques.show', compact('mosque'));
	}

	/**
	 * Show the form for editing the specified mosque.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mosque = Mosque::find($id);

		return View::make('mosques.edit', compact('mosque'));
	}

	/**
	 * Update the specified mosque in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$mosque = Mosque::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Mosque::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$mosque->update($data);

		return Redirect::route('mosques.index');
	}

	/**
	 * Remove the specified mosque from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Mosque::destroy($id);

		return Redirect::route('mosques.index');
	}

}
