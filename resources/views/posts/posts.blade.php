@extends('layouts.app')

@section('content')

	<div class="row">

		@foreach ($posts as $post)
			<div class="card" style="width: 100%; margin-top: 10px; margin-bottom: 10px;">
			  	<div class="card-body">
			    	<h5 class="card-title">{{ $post->title }}</h5>
			    	<p class="card-text">{{ $post->content }}</p>
			    	<a href="{{ route('show-post', ['id' => $post->id]) }}" class="btn btn-primary">
			    		Read Me
			    	</a>
			  	</div>
			</div>
		@endforeach

	</div>

	<div class="col-md-12">
		<!-- Shows Pagination -->
		{{ $posts->links() }}
	</div>

@endsection