<?php

class OrderItemAddOn extends Eloquent
{
	protected $table = "order_item_add_ons";
	public $timestamps = false;

	public function addOn()
	{
		//order_items.menu_item_id (FOREIGN)  -> menu_item.id (PRIMARY == OWNER)     belongsTo
		//order_item.id (PRIMARY == OWNER) -> menu_item.order_item_id (FOREIGN) hasOne
		return $this->belongsTo('AddOn');
	}
}