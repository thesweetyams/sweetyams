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
	 		foreach ($item->orderItemAddOns as $orderAddOn) {
	 			$orderAddOn->add_on_id = $orderAddOn->add_on_id;
	 			$total += $orderAddOn->addOn->price;
	 		}
	 	}
	 	dd($total);
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