<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddOnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('add_ons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('description');
			$table->integer('price');
			$table->boolean('available');
			$table->boolean('add_to_burger');
			$table->integer('add_on_type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('add_ons');
	}

}
