@extends('layouts.app')

@section('content')

	<div class="row">

		<div class="col-md-12 mb-2">
			<div class="card">
			  	<div class="card-body">
			  		<form action="{{ route('save-post') }}" method="post" enctype="multipart/form-data">
			  			@csrf
			  			<div class="form-group row mt-2">
					    	<label for="post_title" class="col-md-2 col-form-label mt-2 mb-2">Post Title</label>
					    	<div class="col-md-10">
					    		<input type="text" class="form-control" id="post_title" placeholder="Enter post title" name="post_title" required/>
					    	</div>
					    </div>

					    <div class="form-group row mt-2">
					    	<label for="post_content" class="col-md-2 col-form-label mt-2 mb-2">Post Content</label>
					    	<div class="col-md-10">
					    		<textarea placeholder="Enter post content" class="form-control" id="post_content" name="post_content" cols="30" rows="10" required></textarea>
					    	</div>
					    </div>

					    <div class="form-group row mt-2">
					    	<label for="post_category" class="col-md-2 col-form-label mt-2 mb-2">Post Category</label>
					    	<div class="col-md-10">
					    		<select class="form-control" id="post_category" name="post_category" required>
					    			<option selected>Select Category</option>
					    			@foreach ($categories as $category)
					    				<option value="{{ $category->id }}">{{ $category->title }}</option>
					    			@endforeach
					    		</select>
					    	</div>
					    </div>

					    <div class="form-group row mt-2">
					    	<label for="post_tags" class="col-md-2 col-form-label mt-2 mb-2">Post Tags</label>
					    	<div class="col-md-10">
					    		<select class="form-control" id="post_tags" name="post_tags[]" required multiple>
					    			<option selected>Select Tags</option>
					    			@foreach ($tags as $tag)
					    				<option value="{{ $tag->id }}">{{ $tag->title }}</option>
					    			@endforeach
					    		</select>
					    	</div>
					    </div>

					    <div class="form-group row mt-2">
					    	<label for="post_images" class="col-md-2 col-form-label mt-2 mb-2">Post Images</label>
					    	<div class="col-md-10">
					    		<input id="post_images" type="file" name="post_images[]" class="form-control" multiple/>
					    	</div>
					    </div>

					    <div class="form-group row mt-2">
					    	<label for="" class="col-md-2 col-form-label"></label>
					    	<div class="col-md-10">
					    		<button type="submit" class="btn btn-primary">Save New Post</button>
					    	</div>
					  	</div>
			  		</form>
			  	</div>
			</div>
		</div>

	</div>

@endsection