@extends('layouts.master')
@section('content')
<p class="container col-md-4">name : {{ $user->email }}</p>


@if(isset($user_picture))
	<li class="nav-item animated bounceIn list-inline-item dis-block">
	    <a href=""><img src="" class="" width="50" height="50"></a>
	</li>
@endif
@endsection('content')
