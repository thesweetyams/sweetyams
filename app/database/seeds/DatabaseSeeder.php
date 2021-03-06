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
		Menu::truncate();
		MenuItem::truncate();
		AddOn::truncate();
		$this->call('UsersTableSeeder');
		$this->call('MenuTableSeeder');
		$this->call('MenuItemsTableSeeder');
		$this->call('AddOnsTableSeeder');
	}

}
