@extends('layout')

@section('content')
	<h1>Create your RSS Feed</h1>
	<div class="row">
		<div class="col-md-12">
			<form id="createFeedForm" method="POST" action="/feed">
				@include('feed.form')

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
	</div>
@stop
