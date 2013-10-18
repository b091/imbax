<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menu', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('parent_id')->nullable();
            $table->enum('layout', array('contact', 'home', 'content', 'products', 'gallery'));
            $table->string('title', 100);
            $table->text('content') ;
            $table->string('pagelink');
            $table->string('lang');
            $table->boolean('mainpage')->default(false);
			$table->timestamps();

            //$table->foreign('lang')->references('id')->on('lang');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menu');
	}

}
