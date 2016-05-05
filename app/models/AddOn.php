<?php

class AddOn extends Eloquent
{
	protected $table = 'add_ons';

	public $timestamps = false;

	public function menuItems() 
	{
		return $this->belongsToMany('MenuItem');
	}
	public function orderItemAddOn()
	{
		return $this->hasMany('OrderItemAddOn');
	}
}