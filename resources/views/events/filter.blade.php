@extends('layouts.master') 

@section('content')
		<div id="search_options_container">	
			<input id="search_input_field" type="search" placeholder="Search...">
			<div id="search_filters">
				<a class="dropdown button tiny hollow" href="#">Date</a>
				<a data-toggle="type_dropdown" class="dropdown button tiny not-hollow" href="#">Type</a>
				
				<a class="dropdown button tiny hollow" href="#">Dept</a>
				<a class="dropdown button tiny hollow" href="#">Area</a>
				
			</div>
			
			
		</div>
		
		@foreach($events as $event)
		<a class="event-card-link" href="/events/{{$event->id}}-{{ str_slug($event->title,'-')}}" >
			<div class="event-card">
				<img class="event-image" src="{{ $event->event_image . "_thumb.jpg" }}" alt="Event Poster"/>
				<div class="event-card-info">
					<span class="label event-card-label">{{ $event->event_type }}</span>
					<p class="event-card-title">{{ str_limit($event->title,$limit=55,$end='...') }}</p>
					<p class="event-card-time">
						{{ Carbon\Carbon::parse($event->start_time)->format('D, M j')}}
						{{ Carbon\Carbon::parse($event->start_time)->format('g:i a')}} |
						{{ $event->location }}
					</p>
					
				</div>
			</div>
			</a>
		@endforeach


@endsection

@section('search_active')
		class='footer-nav-title is-active'
@endsection