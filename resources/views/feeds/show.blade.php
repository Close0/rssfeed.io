@extends('layout')

@section('content')
	<h1> {{ $feed->title }} </h1>
	<h3> <a href="{{ $feed->link }}">{{ $feed->link }}</a> </h3>
	<hr>
	<div> {{ $feed->description }} </div>
@stop