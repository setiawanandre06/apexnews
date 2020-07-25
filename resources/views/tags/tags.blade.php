@extends('layouts.app')

@section('content')

	<form action="{{ route('save-tag') }}" method="post">
		@csrf
		<div class="form-group row mt-2">
	    	<label for="tag_title" class="col-md-2 col-form-label">Tag Title</label>
	    	<div class="col-md-10 row">
	    		<input type="text" class="form-control" id="tag_title" placeholder="Enter Tag title" name="tag_title" required/>
	    	</div>

	    	<label for="" class="col-md-2 col-form-label"></label>
	    	<div class="col-md-10 row">
	    		<button type="submit" class="btn btn-primary">Save New Tag</button>
	    	</div>
	  	</div>
	</form>

	<div class="row">
		@foreach($tags as $tag)
			<div class="col-md-2 mt-2 mb-2">
				<div class="card">
					<div class="card-body">
						{{ $tag->title }}
					</div>
				</div>
			</div>
		@endforeach
	</div>

@endsection