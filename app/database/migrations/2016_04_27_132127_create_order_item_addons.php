<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemAddons extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('order_item_addons', function(Blueprint $table)
		 {
		 	$table->increments('id');
		 	$table->integer('order_item_id')->length(10)->unsigned();
		 	$table->foreign('order_item_id')->references('id')->on('order_item');
		 	$table->integer('order_item_addon_id')->length(10)->unsigned();
		 	$table->foreign('order_item_addon_id')->references('id')->on('mushroom_burger_add_ons');
		 });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_item_addons');
	}

}
