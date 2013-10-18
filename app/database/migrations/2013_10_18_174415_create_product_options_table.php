<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('product_options', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->index();
            $table->integer('option_id')->unsigned()->index();

            $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('option_id')->references('id')->on('products_options');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('product_options');
	}

}