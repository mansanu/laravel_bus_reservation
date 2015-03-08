<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReservationDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		 Schema::create('freq_details', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('sun')->unsigned()->default(4);
            $table->integer('mon')->unsigned()->default(4);
			$table->integer('tue')->unsigned()->default(4);
			$table->integer('wed')->unsigned()->default(4);
			$table->integer('thu')->unsigned()->default(4);
			$table->integer('fri')->unsigned()->default(4);
			$table->integer('sat')->unsigned()->default(4);
        });
		Schema::create('routes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('distance')->unsigned();
			$table->integer('from_city')->unsigned();
			$table->integer('to_city')->unsigned();
        });
	   Schema::create('travel_details', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('bus_id')->unsigned()->default(0);
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
			
			$table->integer('route_id')->unsigned()->default(0);
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
			
			$table->dateTime('depature_time');
			$table->dateTime('arrival_time');
			//$table->money('fare');
			$table->decimal('fare', 5, 2);
			
			$table->integer('freq_detail_id')->unsigned()->default(0);
            $table->foreign('freq_detail_id')->references('id')->on('freq_details')->onDelete('cascade');;
         
        });
		Schema::create('reservation_details', function (Blueprint $table) {
            $table->increments('id');
			
			$table->integer('passenger_id')->unsigned()->default(0);
            $table->foreign('passenger_id')->references('id')->on('passengers')->onDelete('cascade');
			
			$table->integer('travel_detail_id')->unsigned()->default(0);
            $table->foreign('travel_detail_id')->references('id')->on('travel_details')->onDelete('cascade');
			
			$table->integer('purchase_detail_id')->unsigned()->default(0);
            $table->foreign('purchase_detail_id')->references('id')->on('purchase_details')->onDelete('cascade');
			
			$table->dateTime('reserved_date');
			
			$table->integer('no_seat')->unsigned()->default(4);
			
			$table->dateTime('depature_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('freq_details');
		Schema::drop('routes');
		Schema::drop('travel_details');
		Schema::drop('reservation_details');
    }
}
