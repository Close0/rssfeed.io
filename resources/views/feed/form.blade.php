{{ csrf_field() }}
<div class="row">
	<div class="col-md-6">
		<fieldset>
			<legend>Required</legend>
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" class="form-control" placeholder="My Feed" value="{{ isset($feed) ? $feed->title : old('title') }}">
			</div>

			<div class="form-group">
				<label for="link">Website Link</label>
				<input type="text" name="link" id="link" class="form-control" placeholder="http://www.example.com" value="{{ isset($feed) ? $feed->link : old('link') }}">
			</div>

			<div class="form-group">
				<label for="description">Description</label>
				<textarea name="description" id="description" class="form-control" placeholder="This is my new awesome RSS feed. Check out our website for more details!" rows="3">{{ isset($feed) ? $feed->description : old('description') }}</textarea>
			</div>
		</fieldset>
	</div>

	<div class="col-md-6">
		<fieldset>
			<legend>Optional</legend>
			<div class="form-group">
				<label for="category">Category</label>
				<select multiple name="category" id="category" class="form-control">
					<option value="temporary">Temporary</option>
				</select>
			</div>
			<div class="form-group">
				<label for="copyright">Copyright</label>
				<input type="text" name="copyright" id="copyright" class="form-control" placeholder="Copyright 2016 RSSFeed.io" value="{{ isset($feed) ? $feed->copyright : old('copyright') }}">
			</div>
			<div class="form-group">
				<label for="language">Language</label>
				<select name="language" id="language" class="form-control">
					<option value="en-us">English</option>
				</select>
			</div>
		</fieldset>
	</div>
</div>

<button type="submit" class="btn btn-primary">Submit</button>

@section('pageJavaScript')
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#title').parents('form:first').formValidation({
		        framework: 'bootstrap',
		        icon: {
		            valid: 'glyphicon glyphicon-ok',
		            invalid: 'glyphicon glyphicon-remove',
		            validating: 'glyphicon glyphicon-refresh'
		        },
		        fields: {
		            title: {
		                validators: {
		                    notEmpty: {
		                        message: 'A title for the feed is required.'
		                    }
		                }
		            },
		            link: {
		                validators: {
		                    notEmpty: {
		                        message: 'A website link associated with the feed is required.'
		                    },
		                    uri: {
		                        message: 'The website address is not valid.'
		                    }
		                }
		            },
		            description: {
		                validators: {
		                    notEmpty: {
		                        message: 'A description of the feed is required.'
		                    }
		                }
		            }
		        }
		    });
		});
	</script>
@endsection