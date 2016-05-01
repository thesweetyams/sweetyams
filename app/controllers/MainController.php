<?php

class MainController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	 public function sweetyamsLocation()
 	{
 		return View::make('map.location');
 	}

 	public function sweetyamsDirection()
 	{
 		return View::make('map.direction');
 	}

	public function setUpEmail()
	{
		return View::make('emails.email');
	}

	public function setUpAboutUs()
	{
		return View::make('main.aboutus');
	}

	public function setUpBlog()
	{
		return View::make('main.blog');
	}

	public function setUpEvents()
	{
		return View::make('main.events');
	}

	public function setUpJuiceSubscription()
	{
		return View::make('main.juiceSubcription');
	}

	public function setUpCatering()
	{
		return View::make('main.catering');
	}


	public function setUpProjects()
	{
		return View::make('main.projects');
	}


	public function doContact()
	{
		$from    = Input::get('from');
		$email   = Input::get('email');
		$subject = Input::get('subject');
		$body    = Input::get('body');

		$validator = Validator::make(Input::all(), BaseModel::$rules);

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
		$menuItems = MenuItem::all();
		return View::make('main.index')->with('menuItems' , $menuItems);
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
