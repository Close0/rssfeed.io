@extends('layout')

@section('content')
	<h1> {{ $feed->title }} </h1>
	<h3> <a href="{{ $feed->link }}">{{ $feed->link }}</a> </h3>
	<div> {{ $feed->description }} </div>
	<hr>
	<h3> Feed Item </h3>
	<div> {{ $feedItem->title }} </div>
	<div> {{ $feedItem->link }} </div>
	<div> {{ $feedItem->description }} </div>
@stop