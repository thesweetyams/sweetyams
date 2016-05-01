<?php

class OrdersTableSeeder extends Seeder
{
	public function run() 
	{
		$order = new Order;
		$order->user_id = 1;
		$order->subtotal = 5000; // This is going to be the sum of menu_items.price where order_items.order_id equals a give value.
		$order->special_instructions = "Please have a easy hand on the salt.";
		$order->save();
	}
}