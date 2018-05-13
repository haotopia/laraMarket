<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWechatUser extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('wechat_users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('openId')->unique();
			$table->string('name');
			$table->string('nickname');
			$table->string('avatar');
			$table->string('email');
			$table->integer('sex');
			$table->string('city');
			$table->integer('type');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//
	}
}
