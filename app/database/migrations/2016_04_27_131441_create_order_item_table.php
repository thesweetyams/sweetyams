<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_item', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('order_id')->length(10)->unsigned();
			$table->foreign('order_id')->references('id')->on('orders');

			$table->integer('menu_id')->length(10)->unsigned();
			$table->foreign('menu_id')->references('id')->on('menu');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_item');
	}

}