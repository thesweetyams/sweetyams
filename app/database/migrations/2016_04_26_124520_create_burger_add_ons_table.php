<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBurgerAddOnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mushroom_burger_add_ons', function(Blueprint $table) 
		{
			$table->increments('id');
			$table->boolean('add_to_burger')->default(0);
			$table->integer('price');
			$table->string('description');
			$table->boolean('available');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mushroom_burger_add_ons');
	}

}
