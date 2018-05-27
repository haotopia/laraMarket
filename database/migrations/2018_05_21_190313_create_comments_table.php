<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {
	public function up() {
		Schema::create('comments', function (Blueprint $table) {
			$table->increments('id');
			$table->string('openId');
			$table->flout('comment');
			$table->string('description');
			$table->integer('storId');
			$table->timestamps();
		});
	}

	public function down() {
		Schema::drop('comments');
	}
}
