<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventSponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_sponsor', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

                    $table->integer('event_id')->unsigned();
        $table->integer('sponsor_id')->unsigned();

        # Make foreign keys
        $table->foreign('event_id')->references('id')->on('events');
        $table->foreign('sponsor_id')->references('id')->on('sponsors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_sponsor');
    }
}
