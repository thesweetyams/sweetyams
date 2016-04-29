<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->length(10)->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->integer('subtotal');
			$table->string('location');
			$table->text('special_instructions');
			$table->timestamp('created_on');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order');
	}


}
