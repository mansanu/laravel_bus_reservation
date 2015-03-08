<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('bus_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
        });
	   Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bus_reg_no')->default('');
			$table->string('bus_type')->default('');
			$table->integer('bus_max_seat')->unsigned();
			$table->integer('bus_type_id')->unsigned()->default(0);
            $table->foreign('bus_type_id')->references('id')->on('bus_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bus_types');
		Schema::drop('buses');
    }
}
