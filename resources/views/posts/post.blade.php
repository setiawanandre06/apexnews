@extends('layouts.app')

@section('content')

	<div class="row">

		<div class="col-md-8">
			<div class="card" style="width: 100%; margin-top: 10px; margin-bottom: 10px;">
			  	<div class="card-body">
			    	<h5 class="card-title">{{ $post->title }}</h5>
			    	<p class="card-text">{{ $post->content }}</p>
			    	{{-- <a href="{{ $comment->post->link() }}" class="btn btn-primary">Go to Post</a> --}}
			  	</div>
			</div>
		</div>

		<div class="col-md-4">
			@foreach ($videos as $video)
				<img class="img-thumbnail" src="{{ $video->url }}" alt="">
			@endforeach
			@foreach ($images as $image)
			{{-- asset($image->url) --}}
				<img class="img-thumbnail" src="{{ Storage::url($image->url) }}" alt="">
			@endforeach
		</div>

	</div>

@endsection