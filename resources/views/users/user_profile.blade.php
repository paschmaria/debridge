@extends('layouts.master')
@section('content')

@if(isset($user))
	<p class="container col-md-4">name : {{ $user->email }}</p>


	 @if(isset($user_picture1))
		<li class="nav-item animated bounceIn list-inline-item dis-block">
		    <a href="{{ route('image', [$user_picture1, '']) }}"><img src="{{ route('image', [$user_picture1, '']) }}" class="" width="50" height="50"></a>
		</li>
	@endif
@else
<h4 class="text-center">Page Not Found</h4>
@endif
@endsection('content')
