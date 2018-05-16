<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoresTable extends Migration {
	public function up() {
		Schema::create('stores', function (Blueprint $table) {
			$table->increments('id')->index();
			$table->string('openId');
			$table->string('name');
			$table->string('abstract');
			$table->string('img');
			$table->timestamps();
		});
	}

	public function down() {
		Schema::drop('stores');
	}
}
