<?php

class MenuTableSeeder extends Seeder {

	public function run()
	{
		DB::table('menu')->delete();
		// Organic Sides

		$menuItem = new Menu();
		$menuItem->name = 'Organic Vegan Chili';
		$menuItem->description = 'Black Beans, Garbanzo Beans, Black eyed peas, Onions, Zucchini, Roasted Garlic, Bell Pepper, Chard w/ organic brown rice.';
		$menuItem->available = 1;
		$menuItem->price = 650;

		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Organic Melody Maker';
		$menuItem->description = 'Green Beans, Broccoli, Corn, Zucchini, Squash';
		$menuItem->available = 1;
		$menuItem->price = 550;
		$menuItem->image = '/img/menuImages/organic_melody_maker.jpg';

		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Organic Vegan Southern Greens';
		$menuItem->description = 'Mustard, Collard, -seasoned perfect';
		$menuItem->available = 1;
		$menuItem->price = 425;

		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Sautéed Organic Greens';
		$menuItem->description = 'Green Cabbage & Kale w/ Sesame Seeds';
		$menuItem->available = 1;
		$menuItem->price = 425;

		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Sautéed Organic Broccoli & Garlic';
		$menuItem->available = 1;
		$menuItem->price = 425;
	
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Organic Red Beans & Rice';
		$menuItem->available = 1;
		$menuItem->price = 425;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Organic Steamed Yams';
		$menuItem->available = 1;
		$menuItem->price = 400;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Sautéed Organic Green Beans & Garlic';
		$menuItem->available = 1;
		$menuItem->price = 300;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Organic Brown Rice & Gravy';
		$menuItem->available = 1;
		$menuItem->price = 300;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Sautéed Organic Sweet Corn';
		$menuItem->available = 1;
		$menuItem->price = 300;
		$menuItem->save();

		// Fresh & Healthy Salads

		$menuItem = new Menu();
		$menuItem->name = 'Organic Baby Green Salad (House)';
		$menuItem->available = 1;
		$menuItem->price = 300;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Organic Eden Salad';
		$menuItem->description = 'Baby Greens, Apples, cranberries, Raw Pumpkin Seeds with a balsamic dressing';
		$menuItem->available = 1;
		$menuItem->price = 600;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Simple Organic Chopped Salad';
		$menuItem->description = 'Baby Greens, Romaine, Carrots, Zucchini, Shredded Yams, and Raisins with our balsamic dressing';
		$menuItem->available = 1;
		$menuItem->price = 600;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = "Sunflower's Organic Kale Salad";
		$menuItem->description = 'Spinach, Kale, Raw SunFlower Seeds, Carrots, Avocado, Cherry Tomatoes, Black Beans, sliced Mushrooms';
		$menuItem->available = 1;
		$menuItem->price = 700;
		$menuItem->save();

		// Raw Organic Veggie Love Sandwich

		$menuItem = new Menu();
		$menuItem->name = 'Raw Organic Veggie Love Sandwich';
		$menuItem->description = 'Ezekiel Bread, mushrooms, cucumbers, bell peppers, onions, spicy arugula, avocado, cheese, mayo, mustard, cracked pepper';
		$menuItem->available = 1;
		$menuItem->price = 895;
		$menuItem->save();

		// Sandwiches: All served on a GF Bun & comes with Organic House Salad

		$menuItem = new Menu();
		$menuItem->name = 'Zen Veggie';
		$menuItem->description = "Sautéed organic mushrooms, zucchini, bell peppers & po'boy mix";
		$menuItem->available = 1;
		$menuItem->price = 875;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = "Chicken Po'boy style sandwich";
		$menuItem->description = "Sautéed Organic Cabbage & Onions +sauce";
		$menuItem->available = 1;
		$menuItem->price = 875;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = "Shrimp Po'boy style sandwich";
		$menuItem->description = "Sautéed Organic Cabbage & Onions +sauce";
		$menuItem->available = 1;
		$menuItem->price = 875;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = "Chicken Philly style Sandwich";
		$menuItem->description = "Sautéed Organic Bell Peppers & Onions";
		$menuItem->available = 1;
		$menuItem->price = 875;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = "Shrimp Philly style Sandwich";
		$menuItem->description = "Sautéed Organic Bell Peppers & Onions";
		$menuItem->available = 1;
		$menuItem->price = 875;
		$menuItem->save();

		// Hot & Delicious Entrees
		// Chicken

		$menuItem = new Menu();
		$menuItem->name = 'Lemon Garlic Chicken Breast';
		$menuItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$menuItem->available = 1;
		$menuItem->price = 800;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Blackened Chicken Breast';
		$menuItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$menuItem->available = 1;
		$menuItem->price = 800;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Tender Chicken Breast & Gravy';
		$menuItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$menuItem->available = 1;
		$menuItem->price = 800;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Blackened Buffalo BBQ Chicken Breast';
		$menuItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$menuItem->available = 1;
		$menuItem->price = 800;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Bella & Onions Chicken Breast';
		$menuItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$menuItem->available = 1;
		$menuItem->price = 800;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Sesame Ginger Chicken Breast';
		$menuItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$menuItem->available = 1;
		$menuItem->price = 800;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Chili Love Chicken Breast (Sweet and Spicy)';
		$menuItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$menuItem->available = 1;
		$menuItem->price = 800;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Pure Joy Chicken Breast (all veggies available sautéed)';
		$menuItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$menuItem->available = 1;
		$menuItem->price = 800;
		$menuItem->save();

		// Shrimp Entrees

		$menuItem = new Menu();
		$menuItem->name = 'Zesty Lemon Garlic Shrimp';
		$menuItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$menuItem->available = 1;
		$menuItem->price = 895;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Blackened Shrimp';
		$menuItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$menuItem->available = 1;
		$menuItem->price = 895;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Sesame Ginger Shrimp';
		$menuItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$menuItem->available = 1;
		$menuItem->price = 895;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Chili Love Shrimp (Tangy Spicy Chili Garlic Sauce';
		$menuItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$menuItem->available = 1;
		$menuItem->price = 895;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Sweet Potato Shrimp';
		$menuItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$menuItem->available = 1;
		$menuItem->price = 895;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Roasted Garlic Shrimp';
		$menuItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$menuItem->available = 1;
		$menuItem->price = 895;
		$menuItem->save();

		// Salmon Fillet 7oz

		$menuItem = new Menu();
		$menuItem->name = 'Salmon Fillet';
		$menuItem->description = 'Sustainably Farm raised Sautéed Salmon fillet over brown rice and a house salad.  Choose: SY Red Sauce, Lemon Garlic, Sesame Ginger, Chili Love Sauce or blackened.';
		$menuItem->available = 1;
		$menuItem->price = 1150;
		$menuItem->save();

		// Our Famous Favorites

		$menuItem = new Menu();
		$menuItem->name = 'Ark-La-Tex Gumbo Feast';
		$menuItem->description = 'Delicious all natural chicken, turkey sausage, farm raised shrimp, bell pepper, onions, celery, and spices in a gluten free roux, comes with organic brown rice.';
		$menuItem->available = 1;
		$menuItem->price = 650;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Texas Turkey Chili';
		$menuItem->description = 'All Natural Turkey, zucchini, squash, onions, corn, roasted bell, black beans and spices. Seasoned with love and comes with organic brown rice.';
		$menuItem->available = 1;
		$menuItem->price = 650;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = "D-Geezy's Mac N Cheesy";
		$menuItem->description = "Delicious Gluten Free, 3 cheese Mac.";
		$menuItem->available = 1;
		$menuItem->price = 550;
		$menuItem->save();

		// Add On's

		$menuItem = new Menu();
		$menuItem->name = 'Chicken Breast';
		$menuItem->available = 1;
		$menuItem->price = 495;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Shrimp (5-7)';
		$menuItem->available = 1;
		$menuItem->price = 600;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Organic Brown Rice';
		$menuItem->available = 1;
		$menuItem->price = 200;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Scoop of Organic Red Beans';
		$menuItem->available = 1;
		$menuItem->price = 200;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = "World's Best Mini Sweet Potato Pie";
		$menuItem->price = 200;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = "The one and onlye 'Sweet Potato Cupcake'";
		$menuItem->price = 200;
		$menuItem->save();

		//  Drinks

		$menuItem = new Menu();
		$menuItem->name = 'Organic Teas: Sweet Tea, Mint & Honey, Green Tea';
		$menuItem->price = 225;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = '1/2 Tea 1/2 Lemonade';
		$menuItem->price = 225;
		$menuItem->save();

		$menuItem = new Menu();
		$menuItem->name = 'Bottled Water';
		$menuItem->price = 150;
		$menuItem->save();
	}

}
