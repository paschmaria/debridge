@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="panel panel-default col-sm-5">
                    <div class="panel-heading">Following ({{ $following_count }})</div>

                    <div class="panel-body">
                        @forelse ($following as $user)
                            <div class="col-sm-10 col-sm-offset-1 well">
                                <p>{{ $user->email }}</p>
                            </div>
                        @empty
                            <div class="col-sm-10 col-sm-offset-1 well">
                                <h3><b class="text-danger">Not following anyone yet!</b></h3>
                            </div>
                        @endforelse
                    </div>
                </div>
                <span class="col-sm-2"></span>
                <div class="panel panel-default col-sm-5">
                    <div class="panel-heading">Followers ({{ $followers_count }})</div>
                    <div class="panel-body">
                        @forelse ($followers as $user)
                            <div class="col-sm-10 col-sm-offset-1 well">
                                <p>{{ $user->email }}</p>
                            </div>
                        @empty
                            <div class="col-sm-10 col-sm-offset-1 well">
                                <h3><b class="text-danger">No followers yet!</b></h3>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
