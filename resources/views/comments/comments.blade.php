@extends('layouts.app')

@section('content')

	<div class="row">

		@foreach ($comments as $comment)
			<div class="card" style="width: 100%; margin-top: 10px; margin-bottom: 10px;">
			  	<div class="card-body">
			    	<h5 class="card-title">{{ $comment->author->first_name }} {{ $comment->author->last_name }}</h5>
			    	<p class="card-text">{{ $comment->content }}</p>
			    	<a href="{{ $comment->post->link() }}" class="btn btn-primary">Go to Post</a>
			  	</div>
			</div>
		@endforeach

	</div>

	<div class="col-md-12">
		<!-- Shows Pagination -->
		{{ $comments->links() }}
	</div>

@endsection