<?php

class OrderItemsTableSeeder extends Seeder
{
	public function run()
	{
		$orderItem = new OrderItem;
		$orderItem->order_id = 1;
		$orderItem->item_id = 15; // Pointer to the id of Mushroom Burder on menu_items table
		$orderItem->save();

		$orderItem = new OrderItem;
		$orderItem->order_id = 1;
		$orderItem->item_id = 15; // Pointer to the id of Mushroom Burder on menu_items table
		$orderItem->save();

		$orderItem = new OrderItem;
		$orderItem->order_id = 1;
		$orderItem->item_id = 17; // Pointer to the id of Zen Veggie on menu_items table on menu_items table
		$orderItem->save();

		$orderItem = new OrderItem;
		$orderItem->order_id = 1;
		$orderItem->item_id = 15; // Pointer to the id of Shrimp Po'boy style sandwich on menu_items table
		$orderItem->save();


		$orderItem = new OrderItem;
		$orderItem->order_id = 1;
		$orderItem->item_id = 15; // Pointer to the id of Roasted Garlic Shrimp on menu_items table
		$orderItem->save();
	}
}