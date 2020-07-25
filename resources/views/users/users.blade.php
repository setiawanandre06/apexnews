@extends('layouts.app')

@section('content')

	<div class="row">

		@foreach ($users as $user)
			<div class="col-md-3">
				<div class="card" style="width: 100%; margin-top: 10px; margin-bottom: 10px;">
				  	<div class="card-body">
				    	<h5 class="card-title">{{ $user->first_name }} {{ $user->last_name }}</h5>
				  	</div>
				</div>
			</div>
		@endforeach

	</div>

	<div class="col-md-12">
		<!-- Shows Pagination -->
		{{ $users->links() }}
	</div>

@endsection