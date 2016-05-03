<?php

class OrdersController extends \BaseController {

	public function index() 
	{
		
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$menuCategory = Menu::all();
		$menuItems = MenuItem::all();
		$addOns = AddOn::all();
		return View::make('orders.create')->with(['menuItems' => $menuItems, 'menuCategory' => $menuCategory, 'addOns' => $addOns]);
		// $menuItems = MenuItem::with('addOns')->get();
		// return View::make('orders.create')->with(['menuItems' => $menuItems, 'menuCategoryById' => $menuCategoryById]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		// change below to use Auth::id() once auth is working
		$order = new Order();
		$order->user_id = 1;
		$order->special_instructions = 'Some special instructions';
		$order->save();

		
		$variable = Input::get(1);
		dd($variable);
		// items name attribute is an array (assuming checkbox inputs in the UI)
		foreach($variable as $item) {
			$orderItem = new OrderItem();
			$orderItem->order_id = $order->id;
			$orderItem->item_id = $item->id;
			$orderItem->save();
		}
		// $order->subtotal = OrderItem::subtotal($order->id);
		// store a new order
		if($order->save()) {
			return Redirect::action('OrdersController@create', $order->id = 1)->with(['order' => $order]);
		} else {
			echo 'false';
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
