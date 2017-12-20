@extends('layouts.master') 

@section('content')
		<div class="header-wrapper" data-sticky-container>
            <header id="top_banner" class="sticky" data-sticky data-sticky data-options="marginTop:0;stickTo:top; stickyOn:small;">
                <h1>Suggestions for You</h1>
            </header>
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