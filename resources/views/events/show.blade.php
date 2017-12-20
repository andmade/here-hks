
@extends('layouts.master') 
@section('content') 

<div class="header-wrapper" data-sticky-container>
            <header id="top_banner" class="sticky" data-sticky data-sticky data-options="marginTop:0;stickTo:top; stickyOn:small;">
                <h1><a class="back-button"><i class="fas fa-chevron-left fa-xs" data-fa-transform="up-1" ></i>   Back</a></h1>
            </header>
        </div>
	@section('top_banner')
		
	@endsection

	<div id="show_event_image">
		<img src="{{ $event->event_image . ".jpg" }}" alt="">
	</div>

	<div id="show_event_details">
		<div id="show_event_title">
			<span id="show_event_label">{{ $event->event_type }}</span><br>
			<h1>{{ $event->title }}</h1>
		</div>
		<div id="show_event_date_time">
			<p>
				<span>{{ Carbon\Carbon::parse($event->start_time)->format('l, M j')}}</span> |
				<span>{{ Carbon\Carbon::parse($event->start_time)->format('g:ia -')}}</span>
				<span>{{ Carbon\Carbon::parse($event->end_time)->format('g:ia')}}</span> |
				<span>{{ $event->location }}</span>
			</p>
		</div>
		<div id="show_event_actions">
			<i class="far fa-bookmark fa-2x" ></i>
			
			<a href="/calendar"><i class="far fa-calendar-plus fa-2x" ></i></a>
			<a><i class="fas fa-share-square fa-2x" ></i></a>

		</div>
		<div id="show_event_description">
			{{ $event->description }}
		</div>

		<div id="show_event_misc">
			<p><a data-toggle="show_event_misc_list"  >+ Contact Details / More Info:</a></p>
			<ul id="show_event_misc_list" class="animation" data-toggler data-animate="hinge-in-from-top hinge-out-from-top">
				<li><span class="show-event-toggle-label">Sponsor: {{ $event->sponsor }}</span></li>
				<li><span class="show-event-toggle-label">Contact: <a href="mailto:{{ $event->contact_email }}">{{ $event->contact_name}}</a> / {{ $event->contact_phone }}</span></li>
				<li><span class="show-event-toggle-label">RSVP: 
@if (!$event->rsvp_required)
            No
            @else
            <a  style="color:#A71930" href="{{ $event->rsvp_link }}">Yes. Click here to RSVP.</a>
            @endif
				</span></li>
				<li><span class="show-event-toggle-label">Source: <a style="color:#A71930" href="{{  $event->event_url }}">Visit event homepage for more info.</a></li>
			</ul>
		</div>
	</div>

	<div id="show_event_title">
			<h1 style="padding-left:10px">  Related Events</h1>
	</div>
@endsection

@section('search_active')
		class='footer-nav-title is-active'
@endsection