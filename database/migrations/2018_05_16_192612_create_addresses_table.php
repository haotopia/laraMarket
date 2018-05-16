<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration 
{
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table) {
            $table->increments('id');
            $table->string('openId');
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('province');
            $table->string('city');
            $table->string('county');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('addresses');
	}
}
