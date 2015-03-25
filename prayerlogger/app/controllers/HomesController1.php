<?php

class HomesController extends \BaseController {

	/**
	 * Display a listing of homes
	 *
	 * @return Response
	 */
	public function index()
	{
		$id = Auth::user('id');
		$current_user_id = $id->id;

		$total_days = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
		->where('prayer_name', 'Fajr')
		->count();

		// $creation_timestamp = User::where('id', '=', $current_user_id)->pluck('created_at');
		// $user_creation_date_string = date_format($creation_timestamp,"Y-m-d");
		// $user_creation_date_in_days= strtotime($user_creation_date_string);
		// //$user_creation_date = date('Y-m-d',$user_creation_date_in_days);
		// $current_date = date('Y-m-d');
		// $current_date_in_days = strtotime($current_date);
		// $difference_in_days = $current_date_in_days - $user_creation_date_in_days;
		// $total_days = $difference_in_days / ( 24 * 60 * 60 );
		
		//---------------------------------For Fajar prayer--------------------------------------------

		//total number of unlogged Fajr prayer 
		$unlogged_fajr = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'unlogged')
			->where('prayer_name', 'Fajr')
			->count();
//echo $unlogged_fajr;


		//total number of unoffered Fajr prayer 
	
		$unoffered_fajr = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', '=', 'logged')
			->where('offered', '=', 'Unoffer')
			->where('prayer_name', '=', 'Fajr')
			->count();
//dd($unoffered_fajr);


		//total number of Fajr regular prayers
		$logged_regular_fajr = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Regular')
			->where('prayer_name', 'Fajr')
			->count();

			//dd($logged_regular_fajr);

		//total number of Fajr qaza prayers
			$logged_qaza_fajr = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Qaza')
			->where('prayer_name', 'Fajr')
			->count();

         //dd($logged_qaza_fajr);
		
		//total number of Fajr qasar prayers
			$logged_qasar_fajr = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Qasar')
			->where('prayer_name', 'Fajr')
			->count();

         //dd($logged_qasar_fajr);
		//---------------------------------End Fajar prayer section---------------------------------------

		//---------------------------------For zuhar prayer--------------------------------------------

		//total number of unlogged zuharzuhar prayer 
		$unlogged_zuhar = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'unlogged')
			->where('prayer_name', 'Zuhar')
			->count();
//echo $unlogged_zuhar;


		//total number of unoffered zuhar prayer 
	
		$unoffered_zuhar = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', '=', 'logged')
			->where('offered', '=', 'Unoffer')
			->where('prayer_name', '=', 'Zuhar')
			->count();
//dd($unoffered_zuhar);


		//total number of zuhar regular prayers
		$logged_regular_zuhar = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Regular')
			->where('prayer_name', 'Zuhar')
			->count();

			//dd($logged_regular_zuhar);

		//total number of zuhar qaza prayers
			$logged_qaza_zuhar = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Qaza')
			->where('prayer_name', 'Zuhar')
			->count();

         //dd($logged_qaza_zuhar);
		
		//total number of zuhar qasar prayers
			$logged_qasar_zuhar = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Qasar')
			->where('prayer_name', 'Zuhar')
			->count();

         //dd($logged_qasar_zuhar);
		//---------------------------------End zuhar prayer section---------------------------------------

		//---------------------------------For asar prayer--------------------------------------------

		//total number of unlogged zuharzuhar prayer 
		$unlogged_asar = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'unlogged')
			->where('prayer_name', 'Asr')
			->count();
//echo $unlogged_asar;


		//total number of unoffered zuhar prayer 
	
		$unoffered_asar = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', '=', 'logged')
			->where('offered', '=', 'Unoffer')
			->where('prayer_name', '=', 'Asr')
			->count();
//dd($unoffered_asar);


		//total number of zuhar regular prayers
		$logged_regular_asar = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Regular')
			->where('prayer_name', 'Asr')
			->count();

			//dd($logged_regular_asar);

		//total number of zuhar qaza prayers
			$logged_qaza_asar = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Qaza')
			->where('prayer_name', 'Asr')
			->count();

         //dd($logged_qaza_asar);
		
		//total number of zuhar qasar prayers
			$logged_qasar_asar = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Qasar')
			->where('prayer_name', 'Asr')
			->count();

         //dd($logged_qasar_asar);
		//---------------------------------End asar prayer section---------------------------------------

		//---------------------------------For maghrib prayer--------------------------------------------

		//total number of unlogged zuharzuhar prayer 
		$unlogged_maghrib = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'unlogged')
			->where('prayer_name', 'Mughrab')
			->count();
//echo $unlogged_maghrib;


		//total number of unoffered zuhar prayer 
	
		$unoffered_maghrib = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', '=', 'logged')
			->where('offered', '=', 'Unoffer')
			->where('prayer_name', '=', 'Mughrab')
			->count();
//dd($unoffered_maghrib);


		//total number of zuhar regular prayers
		$logged_regular_maghrib = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Regular')
			->where('prayer_name', 'Mughrab')
			->count();

			//dd($logged_regular_maghrib);

		//total number of zuhar qaza prayers
			$logged_qaza_maghrib = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Qaza')
			->where('prayer_name', 'Mughrab')
			->count();

         //dd($logged_qaza_maghrib);
		
		//total number of zuhar qasar prayers
			$logged_qasar_maghrib = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Qasar')
			->where('prayer_name', 'Mughrab')
			->count();

         //dd($logged_qasar_maghrib);
		//---------------------------------End maghrib prayer section---------------------------------------

		//---------------------------------For ishaa prayer--------------------------------------------

		//total number of unlogged zuharzuhar prayer 
		$unlogged_ishaa = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'unlogged')
			->where('prayer_name', 'Ishaa')
			->count();
//echo $unlogged_ishaa;


		//total number of unoffered zuhar prayer 
	
		$unoffered_ishaa = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', '=', 'logged')
			->where('offered', '=', 'Unoffer')
			->where('prayer_name', '=', 'Ishaa')
			->count();
//dd($unoffered_ishaa);


		//total number of zuhar regular prayers
		$logged_regular_ishaa = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Regular')
			->where('prayer_name', 'Ishaa')
			->count();

			//dd($logged_regular_ishaa);

		//total number of zuhar qaza prayers
			$logged_qaza_ishaa = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Qaza')
			->where('prayer_name', 'Ishaa')
			->count();

         //dd($logged_qaza_ishaa);
		
		//total number of zuhar qasar prayers
			$logged_qasar_ishaa = DB::table('prayerlogs')->where('user_id', '=', $current_user_id)
			->where('logged', 'logged')
			->where('prayer_type', 'Qasar')
			->where('prayer_name', 'Ishaa')
			->count();

         //dd($logged_qasar_ishaa);
		//---------------------------------End ishaa prayer section---------------------------------------
		$data = array(
			$unlogged_fajr,
			$unoffered_fajr,
			$logged_regular_fajr,
			$logged_qaza_fajr,
			$logged_qasar_fajr,



			$unlogged_zuhar,
			$unoffered_zuhar,
			$logged_regular_zuhar,
			$logged_qaza_zuhar,
			$logged_qasar_zuhar,


			$unlogged_asar,
			$unoffered_asar,
			$logged_regular_asar,
			$logged_qaza_asar,
			$logged_qasar_asar,


			$unlogged_maghrib,
			$unoffered_ishaa,
			$logged_regular_ishaa,
			$logged_qaza_ishaa,
			$logged_qasar_ishaa,

			$unlogged_ishaa,
			$unoffered_ishaa,
			$logged_regular_ishaa,
			$logged_qaza_ishaa,
			$logged_qasar_ishaa
			);
		
		return View::make('homes.index', compact('data'));
		//$homes = Home::all();
		//return View::make('homes.index', compact('homes'));
	}

	/**
	 * Show the form for creating a new home
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('homes.create');
	}

	/**
	 * Store a newly created home in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Home::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Home::create($data);

		return Redirect::route('homes.index');
	}

	/**
	 * Display the specified home.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$home = Home::findOrFail($id);

		return View::make('homes.show', compact('home'));
	}

	/**
	 * Show the form for editing the specified home.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$home = Home::find($id);

		return View::make('homes.edit', compact('home'));
	}

	/**
	 * Update the specified home in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$home = Home::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Home::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$home->update($data);

		return Redirect::route('homes.index');
	}

	/**
	 * Remove the specified home from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Home::destroy($id);

		return Redirect::route('homes.index');
	}

}
