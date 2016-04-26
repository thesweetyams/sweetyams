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
		Menu::truncate();
		MushroomBurgerAddOn::truncate();
		$this->call('UserTableSeeder');
		$this->call('MenuTableSeeder');
		$this->call('MushroomBurgerAddOnTableSeeder');
	}

}
