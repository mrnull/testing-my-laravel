<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->tinyInteger('state')->unsigned();
			$table->string('title');
			$table->double('product_amount', 7, 2);
			$table->double('delivery_amount', 7, 2);
			$table->double('comission_amount', 7, 2);

			$table->integer('seller_id')->unsigned();
			$table->foreign('seller_id')->references('id')->on('sellers')->onUpdate('cascade')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
