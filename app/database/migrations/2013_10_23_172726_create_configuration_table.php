<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurationTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'configuration',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('lang_code')->index();
                $table->string('label');
                $table->string('name');
                $table->enum('type', array('text'));
                $table->string('value');
                $table->timestamps();

                $table->foreign('lang_code')->references('code')->on('lang');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('configuration');
    }

}