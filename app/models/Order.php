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
			// $total of Menu Item prices	
	 		$total += $item->menuItem->price;
	 		foreach ($item->orderItemAddOns as $orderItemAddOn) {
	 			// $total of Order Item Add On prices
	 			$total += $orderItemAddOn->addOn->price;
	 		}
	 	}
		return number_format((float)($total / 100), 2, '.', '');	
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