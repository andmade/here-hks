@extends('layouts.master') 

@section('content')
		<div class="header-wrapper" data-sticky-container>
            <header id="top_banner" class="sticky" data-sticky data-sticky data-options="marginTop:0;stickTo:top; stickyOn:small;">
                <h1>Suggestions for You</h1>
            </header>
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

@section('home_active')
		class='footer-nav-title is-active'
@endsection