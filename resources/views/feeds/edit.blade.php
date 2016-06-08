@extends('layout')

@section('content')
	<h1>Edit your RSS Feed</h1>
	<div class="row">
		{!! Form::model($feed, [ 'method' => 'PATCH', 'route' => ['feeds.update', $feed->id] ]) !!}
			@include('feeds.form')

			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

		{!! Form::close() !!}
	</div>
@stop