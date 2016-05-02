<?php

class OrdersController extends \BaseController {

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
		$menuItems = MenuItem::with('AddOn')->get();

		return View::make('orders.create')->with('menu', $menu);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$order = new Order();
		// change below to use Auth::id() once auth is working
		$order->user_id = User::first()->id();
		$order->special_instructions = Input::get('special_instructions');
		$order->save();

		
		// items name attribute is an array (assuming checkbox inputs in the UI)
		foreach(Input::get('items') as $item) {
			$orderItem = new OrderItem();
			$orderItem->order_id = $order->id;
			$orderItem->item_id = $item->id;
			$orderItem->save();
		}
		$order->subtotal = OrderItem::subtotal($order->id);


		// store a new order
		if($order->save()) {
			// return Redirect::action('OrdersController@show', $order->id);
		} else {
			// redirect back with inputs
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// shows the current order of the currently authed user

		// UI for show view offers a confirm or edit option
		// edit should goto ordersController@edit
		// confirm should goto confirmOrder() below
	}
	public function confirmOrder()
	{
		// changes a "pending" or "confirm"
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
