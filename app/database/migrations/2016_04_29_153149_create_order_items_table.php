<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('order_id');//->length(10)->unsigned();
			// $table->foreign('order_id')->references('id')->on('orders');
			$table->integer('menu_item_id');//->length(10)->unsigned();
			// $table->foreign('menu_item_id')->references('id')->on('menu_items');
			$table->text('special_instructions');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_items');
	}

}
