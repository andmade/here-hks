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
			<h1>{{ $event->title }}</h1>
		</div>
	</div>
@stop 

@section('search_active')
		class='footer-nav-title is-active'
@endsection