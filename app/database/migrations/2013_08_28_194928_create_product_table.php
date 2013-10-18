<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('menu_id')->unsigned()->index();
            $table->string('name');
            $table->longText('description');
            $table->string('short_description')->default('');
            $table->boolean('specjal')->default(false);
            $table->string('foto')->default('');
			$table->timestamps();

            $table->foreign('menu_id')->references('id')->on('menu');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
	}

}
