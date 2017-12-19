
@extends('layouts.master') 
@section('content') 

	@section('top_banner')
		<a class="back-button"><i class="fas fa-chevron-left fa-xs" data-fa-transform="up-1" ></i>   Back</a>
	@endsection

	<div id="show_event_image">
		<img src="/img/evts/equalopp.jpg" alt="">
	</div>

	<div id="show_event_details">
		<div id="show_event_title">
			<span id="show_event_label">Seminar</span><br>
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
			<i class="far fa-calendar-plus fa-2x" ></i>
			<i class="fas fa-share-square fa-2x" ></i>

		</div>
		<div id="show_event_description">
			{{ $event->description }}
		</div>

		<div id="show_event_misc">
			<p><a data-toggle="show_event_misc_list"  >+ Contact Details / More Info:</a></p>
			<ul id="show_event_misc_list" class="animation" data-toggler data-animate="hinge-in-from-top hinge-out-from-top">
				<li><span class="show-event-toggle-label">Sponsor:</span></li>
				<li><span class="show-event-toggle-label">Contact: <a href="mailto:{{ $event->contact_email }}">{{ $event->contact_name}}</a> / {{ $event->contact_phone }}</span></li>
				<li><span class="show-event-toggle-label">RSVP:</span></li>
				<li><span class="show-event-toggle-label">Source:</span></li>
			</ul>
		</div>
	</div>
@endsection

@section('search_active')
		class='footer-nav-title is-active'
@endsection