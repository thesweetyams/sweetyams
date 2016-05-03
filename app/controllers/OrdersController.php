<?php

class OrdersController extends \BaseController {

	public function index() 
	{
		return View::make('orders.example');
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
	}


	public function store()
	{	

		if (Session::has('order_id')) {
			$order = Order::find(Session::get('order_id'));
		} else {
			$order = new Order();
			$order->user_id = 1; //Auth::id();
			//$order->special_instructions = 'Allergic to fish!';
			$order->save();
			Session::put('order_id', $order->id);
		}
		
		$orderItem = new OrderItem();
		$orderItem->menu_item_id = Input::get('item_id');
		$orderItem->order_id = $order->id;
		$orderItem->save();
		
		// items name attribute is an array (assuming checkbox inputs in the UI)
		// foreach($variable as $item) {
		// 	$orderItem->order_id = $order->id;
		// 	$orderItem->item_id = $item->id;
		// 	$orderItem->save();
		// }
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
		dd(Session::all());
		return View::make('orders.confirm')->with();
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
