@extends('layout')

@section('content')
	<h1>Create your RSS Feed Item</h1>
	<div class="row">
		<form method="POST" action="/feed/{{ $feed->id }}/item">
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