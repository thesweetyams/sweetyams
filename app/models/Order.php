<?php

class Order extends Eloquent
{
	protected $table = 'orders';
	public $timestamps = false;

	public function subtotal()
	{

		$total = 0;
		foreach($this->orderItems as $item) {
	 		$total += $item->menuItem->price;
	 		foreach ($item->orderItemAddOns as $orderAddon) {
	 			$orderAddon->addon_id = $orderAddon->add_on_id;
	 			dd($orderAddon->add_on_id, $orderAddon->addon->price);
	 			$total += $orderAddon->addon->price;
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