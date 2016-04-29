<?php

class OrderItem extends Eloquent
{
	protected $table = 'order_items';

	public function menuItems() 
	{
		return $this->hasOne('MenuItem');
	}
}