@extends('layout')

@section('content')
	<h3>Your RSS Feeds</h3>
	@foreach ($feeds as $feed)
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
	@endforeach
@stop