<?php

class AddOnsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('menu')->delete();
		// Organic Sides

		$addOnItem = new AddOn();
		$addOnItem->name = 'Organic Vegan Chili';
		$addOnItem->description = 'Black Beans, Garbanzo Beans, Black eyed peas, Onions, Zucchini, Roasted Garlic, Bell Pepper, Chard w/ organic brown rice.';
		$addOnItem->available = 1;
		$addOnItem->price = 650;

		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Organic Melody Maker';
		$addOnItem->description = 'Green Beans, Broccoli, Corn, Zucchini, Squash';
		$addOnItem->available = 1;
		$addOnItem->price = 550;
		$addOnItem->image = '/img/menuImages/organic_melody_maker.jpg';

		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Organic Vegan Southern Greens';
		$addOnItem->description = 'Mustard, Collard, -seasoned perfect';
		$addOnItem->available = 1;
		$addOnItem->price = 425;

		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Sautéed Organic Greens';
		$addOnItem->description = 'Green Cabbage & Kale w/ Sesame Seeds';
		$addOnItem->available = 1;
		$addOnItem->price = 425;

		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Sautéed Organic Broccoli & Garlic';
		$addOnItem->available = 1;
		$addOnItem->price = 425;
	
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Organic Red Beans & Rice';
		$addOnItem->available = 1;
		$addOnItem->price = 425;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Organic Steamed Yams';
		$addOnItem->available = 1;
		$addOnItem->price = 400;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Sautéed Organic Green Beans & Garlic';
		$addOnItem->available = 1;
		$addOnItem->price = 300;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Organic Brown Rice & Gravy';
		$addOnItem->available = 1;
		$addOnItem->price = 300;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Sautéed Organic Sweet Corn';
		$addOnItem->available = 1;
		$addOnItem->price = 300;
		$addOnItem->save();

		// Fresh & Healthy Salads

		$addOnItem = new AddOn();
		$addOnItem->name = 'Organic Baby Green Salad (House)';
		$addOnItem->available = 1;
		$addOnItem->price = 300;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Organic Eden Salad';
		$addOnItem->description = 'Baby Greens, Apples, cranberries, Raw Pumpkin Seeds with a balsamic dressing';
		$addOnItem->available = 1;
		$addOnItem->price = 600;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Simple Organic Chopped Salad';
		$addOnItem->description = 'Baby Greens, Romaine, Carrots, Zucchini, Shredded Yams, and Raisins with our balsamic dressing';
		$addOnItem->available = 1;
		$addOnItem->price = 600;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = "Sunflower's Organic Kale Salad";
		$addOnItem->description = 'Spinach, Kale, Raw SunFlower Seeds, Carrots, Avocado, Cherry Tomatoes, Black Beans, sliced Mushrooms';
		$addOnItem->available = 1;
		$addOnItem->price = 700;
		$addOnItem->save();

		// Raw Organic Veggie Love Sandwich

		$addOnItem = new AddOn();
		$addOnItem->name = 'Raw Organic Veggie Love Sandwich';
		$addOnItem->description = 'Ezekiel Bread, mushrooms, cucumbers, bell peppers, onions, spicy arugula, avocado, cheese, mayo, mustard, cracked pepper';
		$addOnItem->available = 1;
		$addOnItem->price = 895;
		$addOnItem->save();

		// Sandwiches: All served on a GF Bun & comes with Organic House Salad

		$addOnItem = new AddOn();
		$addOnItem->name = 'Zen Veggie';
		$addOnItem->description = "Sautéed organic mushrooms, zucchini, bell peppers & po'boy mix";
		$addOnItem->available = 1;
		$addOnItem->price = 875;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = "Chicken Po'boy style sandwich";
		$addOnItem->description = "Sautéed Organic Cabbage & Onions +sauce";
		$addOnItem->available = 1;
		$addOnItem->price = 875;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = "Shrimp Po'boy style sandwich";
		$addOnItem->description = "Sautéed Organic Cabbage & Onions +sauce";
		$addOnItem->available = 1;
		$addOnItem->price = 875;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = "Chicken Philly style Sandwich";
		$addOnItem->description = "Sautéed Organic Bell Peppers & Onions";
		$addOnItem->available = 1;
		$addOnItem->price = 875;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = "Shrimp Philly style Sandwich";
		$addOnItem->description = "Sautéed Organic Bell Peppers & Onions";
		$addOnItem->available = 1;
		$addOnItem->price = 875;
		$addOnItem->save();

		// Hot & Delicious Entrees
		// Chicken

		$addOnItem = new AddOn();
		$addOnItem->name = 'Lemon Garlic Chicken Breast';
		$addOnItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$addOnItem->available = 1;
		$addOnItem->price = 800;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Blackened Chicken Breast';
		$addOnItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$addOnItem->available = 1;
		$addOnItem->price = 800;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Tender Chicken Breast & Gravy';
		$addOnItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$addOnItem->available = 1;
		$addOnItem->price = 800;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Blackened Buffalo BBQ Chicken Breast';
		$addOnItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$addOnItem->available = 1;
		$addOnItem->price = 800;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Bella & Onions Chicken Breast';
		$addOnItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$addOnItem->available = 1;
		$addOnItem->price = 800;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Sesame Ginger Chicken Breast';
		$addOnItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$addOnItem->available = 1;
		$addOnItem->price = 800;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Chili Love Chicken Breast (Sweet and Spicy)';
		$addOnItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$addOnItem->available = 1;
		$addOnItem->price = 800;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Pure Joy Chicken Breast (all veggies available sautéed)';
		$addOnItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$addOnItem->available = 1;
		$addOnItem->price = 800;
		$addOnItem->save();

		// Shrimp Entrees

		$addOnItem = new AddOn();
		$addOnItem->name = 'Zesty Lemon Garlic Shrimp';
		$addOnItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$addOnItem->available = 1;
		$addOnItem->price = 895;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Blackened Shrimp';
		$addOnItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$addOnItem->available = 1;
		$addOnItem->price = 895;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Sesame Ginger Shrimp';
		$addOnItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$addOnItem->available = 1;
		$addOnItem->price = 895;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Chili Love Shrimp (Tangy Spicy Chili Garlic Sauce';
		$addOnItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$addOnItem->available = 1;
		$addOnItem->price = 895;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Sweet Potato Shrimp';
		$addOnItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$addOnItem->available = 1;
		$addOnItem->price = 895;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Roasted Garlic Shrimp';
		$addOnItem->description = 'Served over Organic Brown Rice and with our Organic House Salad';
		$addOnItem->available = 1;
		$addOnItem->price = 895;
		$addOnItem->save();

		// Salmon Fillet 7oz

		$addOnItem = new AddOn();
		$addOnItem->name = 'Salmon Fillet';
		$addOnItem->description = 'Sustainably Farm raised Sautéed Salmon fillet over brown rice and a house salad.  Choose: SY Red Sauce, Lemon Garlic, Sesame Ginger, Chili Love Sauce or blackened.';
		$addOnItem->available = 1;
		$addOnItem->price = 1150;
		$addOnItem->save();

		// Our Famous Favorites

		$addOnItem = new AddOn();
		$addOnItem->name = 'Ark-La-Tex Gumbo Feast';
		$addOnItem->description = 'Delicious all natural chicken, turkey sausage, farm raised shrimp, bell pepper, onions, celery, and spices in a gluten free roux, comes with organic brown rice.';
		$addOnItem->available = 1;
		$addOnItem->price = 650;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Texas Turkey Chili';
		$addOnItem->description = 'All Natural Turkey, zucchini, squash, onions, corn, roasted bell, black beans and spices. Seasoned with love and comes with organic brown rice.';
		$addOnItem->available = 1;
		$addOnItem->price = 650;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = "D-Geezy's Mac N Cheesy";
		$addOnItem->description = "Delicious Gluten Free, 3 cheese Mac.";
		$addOnItem->available = 1;
		$addOnItem->price = 550;
		$addOnItem->save();

		// Add On's

		$addOnItem = new AddOn();
		$addOnItem->name = 'Chicken Breast';
		$addOnItem->available = 1;
		$addOnItem->price = 495;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Shrimp (5-7)';
		$addOnItem->available = 1;
		$addOnItem->price = 600;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Organic Brown Rice';
		$addOnItem->available = 1;
		$addOnItem->price = 200;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Scoop of Organic Red Beans';
		$addOnItem->available = 1;
		$addOnItem->price = 200;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = "World's Best Mini Sweet Potato Pie";
		$addOnItem->price = 200;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = "The one and onlye 'Sweet Potato Cupcake'";
		$addOnItem->price = 200;
		$addOnItem->save();

		//  Drinks

		$addOnItem = new AddOn();
		$addOnItem->name = 'Organic Teas: Sweet Tea, Mint & Honey, Green Tea';
		$addOnItem->price = 225;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = '1/2 Tea 1/2 Lemonade';
		$addOnItem->price = 225;
		$addOnItem->save();

		$addOnItem = new AddOn();
		$addOnItem->name = 'Bottled Water';
		$addOnItem->price = 150;
		$addOnItem->save();
	}

}
