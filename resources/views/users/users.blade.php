@extends('layouts.app')

@section('content')
	<div class="container">
		<div class = 'row'>
		@foreach($users as $user)
			<div class="col-md-3 thumbnail">
				<p>name: {{ $user->email }}</p>
				<form method="post" action="{{ route('send_request', $user->email) }}">
				{{ csrf_field() }}
				<button class="btn btn-primary" type="submit">Send Friend Request</button>
				</form>
			</div>
		@endforeach
		</div>
	</div>
@endsection('content')