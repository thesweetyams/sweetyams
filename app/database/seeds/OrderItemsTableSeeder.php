<?php

class OrderItemsTableSeeder extends Seeder
{
	public function run()
	{
		$orderItem = new OrderItem;
		$orderItem->order_id = 1;
		$orderItem->item_id = 15;
	}
}