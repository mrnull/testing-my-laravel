<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('orders')->delete();
		DB::table('sellers')->delete();

		$names = array(
			"Иван",
			"Петр",
			"Сергей",
			"Платон",
			);
		$patronymics = array(
			"Ивановис",
			"Петрович",
			"Сергеевич",
			"Платонович",
			);
		$surnames = array(
			"Иванов",
			"Петров",
			"Сергеев",
			"Платонов",
			);

		$cities = array(
			"495" => "г. Москва",
			"812" => "г. Санкт-Петербург",
			"473" => "г. Воронеж",
			"861" => "г. Краснодар",
			);

		$adjectives = array(
			"Прекрасный",
			"Отличный",
			"Крутой",
			"Модный"
			);

		$colors = array(
			"красный",
			"желтый",
			"зеленый",
			"синий"
			);
		$objects = array(
			"галстук",
			"барабан",
			"стакан",
			"стул"
			);

		$orders_states = array(
			"initial",
			"accepted",
			"delivery",
			"ready");

		$dates = array(
			"now",
			"yesterday",
			"-1 day",
			"-2 days",
			"-4 days",
			"-6 days",
			"-8 days",
			"-10 days",
			"-14 days",
			);

		$seller_ids = array();

		for ($i=0; $i < 10; $i++) { 
			$seller_name = $names[array_rand($names, 1)] . " " . $patronymics[array_rand($patronymics, 1)] . " " . $surnames[array_rand($surnames, 1)];
			$seller_city_code = array_rand($cities, 1);
			$seller_city_name = $cities[$seller_city_code];
			$seller_phone = "+7 (" . $seller_city_code . ")" . rand(100, 999) . " - " . rand(10, 99) . " - " . rand(10, 99);
			$seller_ids[] = DB::table('sellers')->insertGetId(
				array(
					"name" => $seller_name, 
					"phone" => $seller_phone, 
					"city" => $seller_city_name, 
					"created_at" => Date::parse($dates[array_rand($dates, 1)]), 
					"updated_at" => new DateTime(),
					)
				);
		}

		for ($i=0; $i < 35; $i++) { 
			$order_title = $adjectives[array_rand($adjectives, 1)] . " " . $colors[array_rand($colors, 1)] . " " . $objects[array_rand($objects, 1)];
			$product_amount = rand(1000, 50000);
			$delivery_amount = $product_amount * 0.1;
			$comission_amount = $product_amount * 0.02;
			$seller_id = $seller_ids[array_rand($seller_ids)];
			DB::table('orders')->insert(array(
				"state" => rand(0,3),
				"title" => $order_title,
				"product_amount" => $product_amount,
				"delivery_amount" => $delivery_amount,
				"comission_amount" => $comission_amount,
				"seller_id" => $seller_id,
				"created_at" => Date::parse($dates[array_rand($dates, 1)]), 
				"updated_at" => new DateTime(),
				)
			);

		}
	}

}
