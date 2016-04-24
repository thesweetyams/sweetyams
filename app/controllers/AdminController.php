<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$menu = new Menu();

		return $this->validation($menu);
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

	public function validation($menu)
	{
		$validator = Validator::make(Input::all(), Menu::$rules);

		// attempt validation
		if ($validator->fails()) {
			Session::flash('errorMessage', 'Unable to save menu item.');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			Session::flash('successMessage', 'The post was successfully update.');
			$menu->name = Input::get('name');
			$menu->description = Input::get('description');
			$menu->available = 1;
			$menu->image = Input::file('image');
			$menu->price = Input::get('price');
			$menu->save();
			Log::info(['name'=>$menu->name, 'description'=>$menu->description, 'price'=>$menu->price]);
			return Redirect::action('MainController@index');
		}
	}



}
