<?php

class Order extends Eloquent
{
	protected $table = 'orders';

	public function menuItems() 
	{
		return $this->hasManyThrough('MenuItem', 'OrderItem');
	}
}