<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('venue_id')->nullable();
            $table->string('venue_name')->nullable();
            $table->string('venue_address')->nullable();
            $table->string('chef_id')->nullable();
            $table->string('chef_name')->nullable();
            $table->string('chef_phone')->nullable();
            $table->string('table_id')->nullable();
            $table->string('table_name')->nullable();
            $table->string('table_image')->nullable();
            $table->boolean('number_in_party')->nullable();
            $table->boolean('reserve_status')->nullable();
            $table->date('reserve_date')->nullable();
            $table->date('start_time')->nullable();
            $table->date('end_time')->nullable();
            $table->string('order_name')->nullable();
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
        Schema::dropIfExists('reservations');
    }
}
