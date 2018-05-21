<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopcartsTable extends Migration 
{
	public function up()
	{
		Schema::create('shopcarts', function(Blueprint $table) {
            $table->increments('id');
            $table->string('goods_id');
            $table->string('openId');
            $table->integer('quntity');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('shopcarts');
	}
}
