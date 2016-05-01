<?php

class OrderItem extends Eloquent
{
	protected $table = 'order_items';

	public function menuItems() 
	{
		return $this->hasOne('MenuItem');
	}

	public function orderItemAddOns() 
	{
		return $this->hasMany('OrderItemAddOn');
	}

	public function addOns()
	{
		return $this->hasMany('AddOn');
	}

	public function orders() 
	{
		return $this->belongsTo('Order');
	}
}