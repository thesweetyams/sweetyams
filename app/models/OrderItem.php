<?php

class OrderItem extends Eloquent
{
	protected $table = 'order_items';
	public $timestamps = false;

	public function menuItems()
	{
		return $this->hasOne('MenuItem');
	}
	public function subtotal($id)
	{
		$total = 0;
		// $items = OrderItem::->where('item_id', $id)->get();

		foreach($items as $item) {
			$total += $item->menuItems()->price;
		}

		// do the same thing for add_ons based off the addons
		return $total;
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
