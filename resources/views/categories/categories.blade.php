@extends('layouts.app')

@section('content')

	
	<form action="{{ route('save-category') }}" method="post">
		@csrf
		<div class="form-group row mt-2">
	    	<label for="category_title" class="col-md-2 col-form-label">Category Title</label>
	    	<div class="col-md-10 row">
	    		<input type="text" class="form-control" id="category_title" placeholder="Enter category title" name="category_title" required/>
	    	</div>

	    	<label for="category_color" class="col-md-2 col-form-label">Category Color</label>
	    	<div class="col-md-10 row">
	    		<input type="color" class="form-control" id="category_color" placeholder="Enter category color" name="category_color" required/>
	    	</div>

	    	<label for="" class="col-md-2 col-form-label"></label>
	    	<div class="col-md-10 row">
	    		<button type="submit" class="btn btn-primary">Save New Category</button>
	    	</div>
	  	</div>
	</form>

	<div class="row">
		@foreach($categories as $category)
			<div class="col-md-3 mt-2 mb-2">
				<div class="card">
					<div class="card-body">
						{{ $category->title }}
						<div style="background-color: {{ $category->color }}; width: 50px; height: 25px;"></div>
					</div>
				</div>
			</div>
		@endforeach
	</div>

@endsection