@extends('layouts.app')

@section('content')
	<div class="container">
		<div class = 'row'>
		@foreach($users as $user)
			<div class="col-md-3 thumbnail">
				<p>name: {{ $user->email }}</p>
				@if(!in_array($user->id, $sent_request))
					{{-- <form id="form_send_request_{{$user->email}}" > --}}
					{{-- {{ csrf_field() }} --}}
					<button data-email="{{$user->email}}" class="btn btn-primary send_request" type="submit">Send Friend Request</button> <br>
					{{-- </form> --}}
				@else
					{{-- <form id="form_undo_request_{{$user->email}}" > --}}
					{{-- {{ csrf_field() }} --}}
					<button data-email="{{$user->email}}" class="btn btn-primary undo_request" type="submit">Undo Request</button> <br>
					{{-- </form> --}}
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