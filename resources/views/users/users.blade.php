@extends('layouts.app')

@section('content')
	<div class="container">
		<div class = 'row'>
		@foreach($users as $user)
			<div class="col-md-3 thumbnail">
				<p>name: {{ $user->email }}</p>
				@if(!in_array($user->id, $sent_request))
					<form method="post" action="{{ route('send_request', $user->email) }}">
					{{ csrf_field() }}
					<button class="btn btn-primary" type="submit">Send Friend Request</button>
					</form>
				@else
					<form method="post" action="{{ route('undo_request', $user->email) }}">
					{{ csrf_field() }}
					<button class="btn btn-primary" type="submit">Undo Request</button>
					</form>
				@endif
				<br>
				@if(!in_array($user->id, $following_ids))
					<form method="post" action="{{ route('follow', $user->email) }}">
					{{ csrf_field() }}
					<button class="btn btn-primary" type="submit">follow</button>
					</form>
				@else
					<form method="post" action="{{ route('unfollow', $user->email) }}">
					{{ csrf_field() }}
					<button class="btn btn-primary" type="submit">unfollow</button>
					</form>
				@endif
			</div>
		@endforeach
		</div>
	</div>
@endsection('content')