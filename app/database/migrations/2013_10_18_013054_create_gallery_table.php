<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('gallery', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('menu_id')->unsigned()->index();
            $table->string('name');
            $table->string('photo');
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
        Schema::drop('gallery');
	}

}