<?php

class ItemAddOnsTableSeeder extends Seeder
{
	public function run() 
	{
		$itemAddOn = new ItemAddOn;
		$itemAddOn->item_id = 15;
		$itemAddOn->add_on_id = 1;
		$itemAddOn->save();

		$itemAddOn = new ItemAddOn;
		$itemAddOn->item_id = 15;
		$itemAddOn->add_on_id = 2;
		$itemAddOn->save();

		$itemAddOn = new ItemAddOn;
		$itemAddOn->item_id = 15;
		$itemAddOn->add_on_id = 3;
		$itemAddOn->save();

		$itemAddOn = new ItemAddOn;
		$itemAddOn->item_id = 15;
		$itemAddOn->add_on_id = 4;
		$itemAddOn->save();

		$itemAddOn = new ItemAddOn;
		$itemAddOn->item_id = 15;
		$itemAddOn->add_on_id = 5;
		$itemAddOn->save();

		$itemAddOn = new ItemAddOn;
		$itemAddOn->item_id = 15;
		$itemAddOn->add_on_id = 6;
		$itemAddOn->save();

		$itemAddOn = new ItemAddOn;
		$itemAddOn->item_id = 15;
		$itemAddOn->add_on_id = 7;
		$itemAddOn->save();
	}
}