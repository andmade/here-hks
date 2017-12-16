<?php

use Illuminate\Database\Seeder;
use App\Event ;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/events_seed.json");
        $data = json_decode($json);
        foreach ($data as $seed_event) {
        	$event 					= new Event();
        	$event->title 			= $seed_event->title;
        	$event->start_time 		= new DateTime($seed_event->start_time);
        	$event->end_time 		= new DateTime($seed_event->end_time);
        	$event->location 		= $seed_event->location;
        	$event->description 	= $seed_event->description;
        	$event->contact_name 	= $seed_event->contact_name;
        	$event->contact_email 	= $seed_event->contact_email;
        	$event->contact_phone 	= $seed_event->contact_phone;
        	$event->rsvp_required 	= $seed_event->rsvp_required;
        	$event->rsvp_link 		= $seed_event->rsvp_link;
        	$event->event_url 		= $seed_event->event_url;
        	$event->event_image 	= $seed_event->event_image;

        	$event->save();


        }
    }
}
