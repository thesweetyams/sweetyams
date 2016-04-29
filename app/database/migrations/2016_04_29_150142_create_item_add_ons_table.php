<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemAddOnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_add_ons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('item_id')->length(10)->unsigned();
			$table->foreign('item_id')->references('id')->on('menu_items');
			$table->integer('add_on_id')->length(10)->unsigned();
			$table->foreign('add_on_id')->references('id')->on('add_ons');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('item_add_ons');
	}

}
