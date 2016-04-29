<?php

class MainController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function location()
	{
		return View::make('map.location');
	}
	public function setUpEmail()
	{
		return View::make('emails.email');
	}

	public function doContact(){
		    public static $rules = [
			    'from'      => 'required|max:100',
			    'email'       => 'required|max:100',
			    'subject'      => 'required|max:100',
			    'body'       => 'required'
			    ];
		$from    = Input::get('from');
		$email   = Input::get('email');
		$subject = Input::get('subject');
		$body    = Input::get('body');

		$validator = Validator::make(Input::all(), Menu::$rules);

		// attempt validation
		if ($validator->fails()) {
			Session::flash('errorMessage', 'Unable to save post.');
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$data    = [
			'from'    => $from,
			'email'   => $email,
			'subject' => $subject,
			'body'    => $body
		];
		Mail::send('emails.contact', $data, function($message) use ($data)
		{
			$message->from($data['email'], $data['from']);
			$message->to('tleffew1994@gmail.com')->subject($data['subject']);
		});
		Session::flash('successMessage', 'The email was successfully sent.');
			return Redirect::action('MainController@index');
	}

	public function index()
	{
		$menu = Menu::with('user')
		->orderBy('created_at', 'desc')
		->paginate(4);

		return View::make('main.index', [
			'menu' => $menu
		]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function showTest()
	{
		return View::make('Main.test');
	}

}
