<?php

class Order extends Eloquent
{
	protected $table = 'orders';

	public function menuItems() 
	{
		return $this->hasManyThrough('MenuItem', 'OrderItem');
	}

	public function orderItems()
	{
		return $this->hasMany('OrderItem');
	}
}