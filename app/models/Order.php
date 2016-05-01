<?php

class Order extends Eloquent
{
	protected $table = 'orders';
	public $timestamps = false;

	public function menuItems() 
	{
		return $this->hasManyThrough('MenuItem', 'OrderItem');
	}

	public function orderItems()
	{
		return $this->hasMany('OrderItem');
	}
}