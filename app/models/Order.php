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
	 			$total += $orderAddon->addon->price;
	 		}
	 	}
		return $total;	
	}

	// public function subtotal($id)
	// {
	// 	$total = 0;
	// 	$items = $this->where('item_id', $id)->get();
	// 	foreach($items as $item) {
	// 		$total += $item->menuItems()->price;
	// 	}
	// 	dd($total);
	// 	// do the same thing for add_ons based off the addons
	// 	return $total;
	// }

	public function menuItems() 
	{
		return $this->hasManyThrough('MenuItem', 'OrderItem');
	}

	public function orderItems()
	{
		return $this->hasMany('OrderItem');
	}
}