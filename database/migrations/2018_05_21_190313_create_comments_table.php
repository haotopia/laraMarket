<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration 
{
	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
            $table->increments('id');
            $table->string('openId');
            $table->integer('comment');
            $table->string('description');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('comments');
	}
}
