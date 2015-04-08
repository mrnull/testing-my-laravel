<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sellers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('phone');
			$table->string('city');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sellers');
	}

}
