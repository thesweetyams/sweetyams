<?php

class MenuItem extends Eloquent
{
	protected $table = 'menu_items';

	public function menu() 
	{
		return $this->belongsTo('Menu');
	}

	public function addOns() 
	{
		return $this->hasMany('AddOn');
	}

	public function orderItems() 
	{
		return $this->hasMany('OrderItem');
	}


}