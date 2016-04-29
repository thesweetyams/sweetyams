<?php

class MenuTableSeeder extends Seeder
{
	public function run() 
	{
		$newMenu = Menu;
		$menu->name = 'Food Menu';
		$menu->save();
	}
}