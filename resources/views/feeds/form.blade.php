{{ csrf_field() }}

<div class="form-group">
	<label for="title">Title</label>
	<input type="text" name="title" id="title" class="form-control" placeholder="My Feed" value="{{ $feed ? $feed->title : old('title') }}" required>
</div>

<div class="form-group">
	<label for="link">Website Link</label>
	<input type="text" name="link" id="link" class="form-control" placeholder="http://www.example.com" value="{{ $feed ? $feed->link : old('link') }}" required>
</div>

<div class="form-group">
	<label for="description">Description</label>
	<textarea name="description" id="description" class="form-control" placeholder="This is my new awesome RSS feed. Check out our website for more details!" rows="3" required>{{ $feed ? $feed->description : old('description') }}</textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>