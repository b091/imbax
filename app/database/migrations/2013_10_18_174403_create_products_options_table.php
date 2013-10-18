<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('products_options', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->enum('type', array('flag', 'feature'))->default('flag');
            $table->string('color');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('products_options');
	}

}