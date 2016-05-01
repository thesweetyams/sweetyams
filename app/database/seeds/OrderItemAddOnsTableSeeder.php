<?php

class OrderItemsAddOnsTableSeeder extends Seeder
{
	public function run()
	{
		$orderItemAddOn = new OrderItemAddOn;
		$orderItemAddOn->order_item_id = 1; // Pointer to the individual order item
		$orderItemAddOn->add_on_id = 2; // Pointer to Grilled Onions on the add_ons table
		$orderItemAddOn->save();

		$orderItemAddOn = new OrderItemAddOn;
		$orderItemAddOn->order_item_id = 1;
		$orderItemAddOn->add_on_id = 4;  // Pointer to the Turkey Chili on the add_ons table
	}
}