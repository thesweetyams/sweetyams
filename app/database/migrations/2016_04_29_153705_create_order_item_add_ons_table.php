<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemAddOnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_item_add_ons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('order_item_id')->length(10)->unsigned();
			$table->foreign('order_item_id')->references('id')->on('order_items');
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
		Schema::drop('order_item_add_ons');
	}

}
