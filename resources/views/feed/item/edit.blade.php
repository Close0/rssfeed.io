@extends('layout')

@section('content')
	<h1>Edit your RSS Feed</h1>
	<div class="row">
		<form method="POST" action="/feed/{{ $feed->id }}/item/{{ $feedItem->id }}">
			<input name="_method" type="hidden" value="PATCH">
			@include('feed.item.form')

			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
		</form>
	</div>
@stop