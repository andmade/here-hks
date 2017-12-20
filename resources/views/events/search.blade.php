@extends('layouts.master') 

@section('content')
		<div id="search_options_container">	
			<input id="search_input_field" type="search" placeholder="Search...">
			<div id="search_filters">
				<a class="dropdown button tiny hollow" href="#">So Tiny</a>
				<a class="dropdown button tiny hollow" href="#">So Tiny</a>
				<a class="dropdown button tiny hollow" href="#">So Tiny</a>
				<a class="dropdown button tiny hollow" href="#">So Tiny</a>
				
			</div>
			
		</div>
		
		@foreach($events as $event)
			<div class="event-card">
				<img class="event-image" src="{{ $event->event_image }}" alt="Even Poster"/>
				<div class="event-card-info">
					<span class="label event-card-label">Seminar</span>
					<p class="event-card-title">{{ str_limit($event->title,$limit=55,$end='...') }}</p>
					<p class="event-card-time">
						{{ Carbon\Carbon::parse($event->start_time)->format('D, M j')}}
						{{ Carbon\Carbon::parse($event->start_time)->format('g:i a')}} |
						{{ $event->location }}
					</p>
					
				</div>
			</div>
		@endforeach

@endsection

@section('home_active')
		class='footer-nav-title is-active'
@endsection