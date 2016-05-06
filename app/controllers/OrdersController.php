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
		$jsonOrder = MenuItem::all()->toJson();
		return View::make('orders.create')->with(['menuItems' => $menuItems, 'menuCategory' => $menuCategory, 'addOns' => $addOns]);		
	}


	public function store()
	{	
		if (Session::has('order_id') && Order::find(Session::get('order_id')) != null) {
			$order = Order::find(Session::get('order_id'));

		} else {
			$order = new Order();
			$order->user_id = 1; 
			$order->save();
			Session::put('order_id', $order->id);
		}

		$orderItem = new OrderItem;
		$orderItem->menu_item_id = Input::get('item_id');
		$orderItem->order_id = Session::get('order_id');
		$orderItem->save();
		
		if (Input::has('add_on_id')) {
			foreach(Input::get('add_on_id') as $addOn) {	
				$orderItemAddOn = new OrderItemAddOn;
				$orderItemAddOn->order_item_id = $orderItem->id;
				$orderItemAddOn->add_on_id = $addOn;
				$orderItemAddOn->save();
			}
		}

		if($order->save()) {
			return Redirect::action('OrdersController@create', $order->id = 1)->with(['order' => $order]);
		} else {
			echo 'false';
		}
	}

	public function show($id)
	{
		// shows the current order of the currently authed user

		// UI for show view offers a confirm or edit option
		// edit should goto ordersController@edit
		// confirm should goto confirmOrder() below
	}

	public function confirmOrder()
	{
		$orderId = Session::get('order_id');
		$order = Order::with('orderItems.orderItemAddons')->find($orderId);
		// $total = $order->subtotal();
		// $orderItems = OrderItem::where('order_id', $orderId)->get();
		// return View::make('orders.confirm')->with(['orderId' => $orderId, 'total' => $total,
		// 										   'orderItems' => $orderItems, 'orderItemAddOns' => $orderItemAddOns]);
		return View::make('orders.confirm')->with(['order' => $order]);
	}

	public function payOrder() 
	{

		return View::make('orders.pay');
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

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		$orderItem = OrderItem::find($id);	
		foreach ($orderItem->orderItemAddOns as $orderItemAddOn) {
			$orderItemAddOn->delete();
		}
		$orderItem->delete();
		Session::flash('successMessage', 'The post was successfully deleted');
		return Redirect::action('OrdersController@confirmOrder');
	}


}
