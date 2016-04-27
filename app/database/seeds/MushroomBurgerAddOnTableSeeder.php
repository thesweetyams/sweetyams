<?php

class MushroomBurgerAddOnTableSeeder extends Seeder
{
	public function run() 
	{
		$addOn = new MushroomBurgerAddOn;
		$addOn->item_description = 'SY Chutney';
		$addOn->add_to_burger = 1;
		$addOn->price = 0;
		$addOn->available = 1;
		$addOn->save();

		$addOn = new MushroomBurgerAddOn;
		$addOn->item_description = 'Grilled Onions';
		$addOn->add_to_burger = 0;
		$addOn->price = 75;
		$addOn->available = 1;
		$addOn->save();

		$addOn = new MushroomBurgerAddOn;
		$addOn->item_description = "F'acon & Cheese (Tofu Bacon)";
		$addOn->add_to_burger = 0;
		$addOn->price = 200;
		$addOn->available = 1;
		$addOn->save();
		
		$addOn = new MushroomBurgerAddOn;
		$addOn->item_description = 'Turkey Chili';
		$addOn->add_to_burger = 0;
		$addOn->price = 200;
		$addOn->available = 0;
		$addOn->save();
		
		$addOn = new MushroomBurgerAddOn;
		$addOn->item_description = "Philly Style (bell pepper, onion, cheese)";
		$addOn->add_to_burger = 0;
		$addOn->price = 125;
		$addOn->available = 1;
		$addOn->save();

		$addOn = new MushroomBurgerAddOn;
		$addOn->item_description = "Veg Head (cucumber, onion, carrots, baby greens)";
		$addOn->add_to_burger = 0;
		$addOn->price = 150;
		$addOn->available = 1;
		$addOn->save();
		
		$addOn = new MushroomBurgerAddOn;
		$addOn->item_description = "South Weezy (black beans, corn, onion, cilantro)";
		$addOn->add_to_burger = 0;
		$addOn->price = 150;
		$addOn->available = 1;
		$addOn->save();
		
	}
}