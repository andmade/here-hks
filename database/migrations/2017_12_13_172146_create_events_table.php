<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $path = public_path() . "/img/evts";
            
            if (!File::exists($path)) {
                File::makeDirectory($path);
            }

            $table->increments('id');
            $table->timestamps();

            $table->string('title');
            $table->string('speaker');
            $table->string('sponsor');
            $table->string('event_type');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('location');
            $table->text('description');
            $table->string('contact_name');
            $table->string('contact_email');
            $table->text('contact_phone');
            $table->boolean('rsvp_required');
            $table->text('rsvp_link');
            $table->string('event_url');
            $table->string('event_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        File::deleteDirectory(public_path() . "/img/evts");
        Schema::dropIfExists('events');
    }
}
