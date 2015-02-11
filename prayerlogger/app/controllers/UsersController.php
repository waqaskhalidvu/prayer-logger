<?php

class UsersController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('users.index');

		//$users = User::all();

		//return View::make('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
    	
		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			
			return Redirect::back()->withErrors($validator)->withInput();
		}
		
		

		$data['code'] = str_random(60);

		$data['password'] = Hash::make($data['password']);

		$link = array('link' =>URL::route('account-activate'), 'code' => $data['code'], 'name' => $data['fname'] );

		
		Mail::queue('emails.auth.active', $link ,function($message) use ($data)
		{
  		$message->to($data['email'], $data['fname'])
          ->subject('Verify your email address');
		});


		User::create($data);
		return Redirect::route('users.index')
		->with('global', 'your account has been created! we have sent you an email please verify your email address');
	


		
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);

		return View::make('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		return View::make('users.edit', compact('user'));
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);

		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$user->update($data);

		return Redirect::route('users.index');
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return Redirect::route('users.index');
	}

	//controller for email sending

	public function getActivate($code){
		
		
		$match = substr($code,6,60);
	
		$user = User::where('code', '=', $match)->update(array('active' => 1, 'code' => '' ));
		

		return View::make('users.index');

	}
	public function postSignIn(){


		$validator = Validator::make($data = Input::all(), array(
			'email' => 'required|email', 'password' => 'required' ));

		if ($validator->fails())
		{
			
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$email = $data['email'];
		$password =  $data['password'];
		
		
		if (Auth::attempt(array('email' => $email, 'password' => $password, 'active' => 1)))
		{
    		return Redirect::route('homes.index');
    		// The user is active, not suspended, and exists.
		} 

		else
		{
			return Redirect::back()->withErrors($validator)->withInput();	
		}
			

		return Redirect::back()->withErrors($validator)->withInput();



	}


}
