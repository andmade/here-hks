@extends('layouts.master') 

@section('title') 
Show book 
@stop 

{{-- This `head` section will be yielded right before the closing </head> tag. Use it to add specific things that *this* View needs in the head, such as a page specific stylesheets. --}}
@section('head')
	<link href="/css/books/show.css" type='text/css' rel='stylesheet'> 
@stop 

@section('content') 
	<form method='POST' action='/events'>
    {{ csrf_field() }}
    <input type='text' name='title'>
    <input type='submit' value='Submit'>
</form>
@stop 

{{-- This `body` section will be yielded right before the closing </body> tag. Use it to add specific things that *this* View needs at the end of the body, such as a page specific JavaScript files. --}} 
@section('body')
	<script src="/js/books/show.js"></script>
@stop