@extends('layout')

@section('content')
	<h3>View and Edit Your RSS Feed</h3>
	<div class="media">
		<div class="media-left">
			<img class="media-object" src="http://placehold.it/64x64" alt="">
		</div>
		<div class="media-body">
			<h4 class="media-heading">
				{{ $feed->title }}
				<small><a href="{{ $feed->link }}">{{ $feed->link }}</a></small>
			</h4>
			{{ $feed->description }}
		</div>
	</div>

	<h1>Feed Items</h1>
	@foreach ($feedItems as $feedItem)
		Feed Item {{ $feedItem->id }}
	@endforeach
@stop