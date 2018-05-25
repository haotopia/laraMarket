<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration 
{
	public function up()
	{
		Schema::create('payments', function(Blueprint $table) {
            $table->increments('id');
            $table->string('openId');
            $table->integer('ads_id');
            $table->integer('list_id');
            $table->integer('status');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('payments');
	}
}
