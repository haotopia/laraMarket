<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoodsTable extends Migration {
	public function up() {
		Schema::create('goods', function (Blueprint $table) {
			$table->increments('id');
			$table->string('market_id');
			$table->string('name');
			$table->float('price');
			$table->integer('quntity');
			$table->string('abstract');
			$table->string('img');
			$table->string('address');
			$table->integer('cat_id');
			$table->timestamps();
		});
	}

	public function down() {
		Schema::drop('goods');
	}
}
