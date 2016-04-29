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
		User::truncate();
		// Order::truncate();
		Menu::truncate();
		AddOn::truncate();
		$this->call('UsersTableSeeder');
		$this->call('MenuTableSeeder');
		$this->call('AddOnsTableSeeder');
	}

}
