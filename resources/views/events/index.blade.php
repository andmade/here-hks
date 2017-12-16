@extends('layouts.master') 

@section('content')
		@section('top_banner')
		Suggestions for You
		@endsection
		
		@foreach($events as $event)
			<div class="event-card">
				<img class="event-image" src="{{ $event->event_image }}" alt="Even Poster"/>
				<div class="event-card-info">
					<span class="label event-card-label">Seminar</span>
					<p class="event-card-title">{{ $event->title }}</p>
					
				</div>
			</div>
		@endforeach

@endsection