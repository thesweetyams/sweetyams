<?php

class OrderItem extends Eloquent
{
	protected $table = 'order_items';
	public $timestamps = false;

	public function menuItem()
	{
		//order_items.menu_item_id (FOREIGN)  -> menu_item.id (PRIMARY == OWNER)     belongsTo
		//order_item.id (PRIMARY == OWNER) -> menu_item.order_item_id (FOREIGN) hasOne
		return $this->belongsTo('MenuItem');
	}

	public function orderItemAddOns()
	{
		return $this->hasMany('OrderItemAddOn');
	}

	public function orders()
	{
		return $this->belongsTo('Order');
	}
}
