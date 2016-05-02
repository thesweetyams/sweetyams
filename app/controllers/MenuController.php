<?php

class MenuController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	 public function setUpOrdering() 
	 {
<<<<<<< HEAD
	 	// $order = new Order;
	 	$menu = Menu::all();
	 	// $order = Order::with('MenuItem')->get();
	 	// dd(Order::with('orderItems')->getQuery()->toSQL(),$order->first()->orderItems->first()->menuItems /*$order->orderItems*/);
		return View::make('menu.ordering')->with(['menu' => $menu]);
=======
		 return View::make('menu.ordering');
>>>>>>> cbb40fa25bd98c31bc0dcc9a49a55928e84ca6f0
	 }

	public function index()
	{
		$menuItems = MenuItem::all();
		return View::make('menu.index')->with('menuItems', $menuItems);
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


}
