<?php

class MenuTableSeeder extends Seeder
{
	public function run() 
	{
		$newMenu = new Menu;
		$newMenu->name = 'Food Menu';
		$newMenu->save();
	}
}