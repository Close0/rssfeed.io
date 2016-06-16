{{ csrf_field() }}
<div class="col-md-6">
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" id="title" class="form-control" placeholder="My Feed" value="{{ isset($feedItem) ? $feedItem->title : old('title') }}" required>
	</div>

	<div class="form-group">
		<label for="link">Website Link</label>
		<input type="text" name="link" id="link" class="form-control" placeholder="http://www.example.com" value="{{ isset($feedItem) ? $feedItem->link : old('link') }}" required>
	</div>

	<div class="form-group">
		<label for="description">Description</label>
		<textarea name="description" id="description" class="form-control" placeholder="This is my new awesome RSS feed. Check out our website for more details!" rows="3" required>{{ isset($feedItem) ? $feedItem->description : old('description') }}</textarea>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</div>

<div class="col-md-6">
	<div class="form-group">
		<label for="author">Author</label>
		<input type="text" name="author" id="author" class="form-control" placeholder="Robert Smith" value="{{ isset($feedItem) ? $feedItem->author : old('author') }}" required>
	</div>

	<div class="form-group">
		<label for="category">Category</label>
		<input type="text" name="category" id="category" class="form-control" placeholder="World of Warcraft" value="{{ isset($feedItem) ? $feedItem->category : old('category') }}" required>
	</div>
</div>
