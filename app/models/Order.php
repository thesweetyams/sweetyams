<?php

class Order extends Eloquent
{
	protected $table = 'orders';
	public $timestamps = false;

	public function subtotal()
	{

		$total = 0;
		// each Menu Item price +=
		foreach($this->orderItems as $item) {	
	 		$total += $item->menuItem->price;
	 		// $orderItemAddOns = method that lives on the OrderItem Model

	 		foreach ($item->orderItemAddOns as $orderItemAddOn) {
	 		// add_on_id = the column name on the order_item_add_ons table
	 		// $orderAddOn->addOns = the method without parenthesis which access the property
	 		$total += $orderItemAddOn->addOn->price;

	 		}
	 	}
		return $total;	
	}

	public function menuItems() 
	{
		return $this->hasManyThrough('MenuItem', 'OrderItem');
	}

	public function orderItems()
	{
		return $this->hasMany('OrderItem');
	}
}