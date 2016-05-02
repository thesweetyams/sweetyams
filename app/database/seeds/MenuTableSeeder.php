<?php

class MenuTableSeeder extends Seeder
{
	public function run() 
	{
		$newMenu = new Menu;
		$newMenu->name = 'Organic Sides';
		$newMenu->save();

		$newMenu = new Menu;
		$newMenu->name = "Fresh and Healthy Salads";
		$newMenu->save();

		$newMenu = new Menu;
		$newMenu->name = "Organic Mushroom Burger";
		$newMenu->save();


		$newMenu = new Menu;
		$newMenu->name = "Sandwiches";
		$newMenu->save();


		$newMenu = new Menu;
		$newMenu->name = "Chicken Entrees";
		$newMenu->save();

		$newMenu = new Menu;
		$newMenu->name = "Shrimp Menu";
		$newMenu->save();

		$newMenu = new Menu;
		$newMenu->name = "Salmon";
		$newMenu->save();

		$newMenu = new Menu;
		$newMenu->name = "Our Famous Favorite";
		$newMenu->save();


		$newMenu = new Menu;
		$newMenu->name = "Add Ons";
		$newMenu->save();


		$newMenu = new Menu;
		$newMenu->name = "Juice Subscription Menu";
		$newMenu->save();


	}
}