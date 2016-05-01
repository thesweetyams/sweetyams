<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		User::truncate();
		Order::truncate();
		Menu::truncate();
		MenuItem::truncate();
		AddOn::truncate();
		ItemAddOn::truncate();
		OrderItem::truncate();
		$this->call('UsersTableSeeder');
		$this->call('MenuTableSeeder');
		$this->call('MenuItemsTableSeeder');
		$this->call('AddOnsTableSeeder');
		$this->call('OrdersTableSeeder');
		$this->call('ItemAddOnsTableSeeder');
		$this->call('OrderItemsTableSeeder');
		$this->call('OrderItemAddOnsTableSeeder');
	}

}
