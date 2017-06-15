@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @forelse (auth()->user()->received_requests as $user)
                        <div class="col-sm-12 well" id="user_div{{$user->id}}">
                            <p>{{ $user->email }}</p>
                            {{-- <form method="post" action="{{ route('accept_friend', $user->email) }}"> --}}
                                {{-- {{ csrf_field() }} --}}
                                <button type="submit" data-email="{{$user->email}}" data-id="{{$user->id}}" class="btn btn-success accept_friend">Accept</button> <br> <br>
                            {{-- </form> --}}
                            {{-- <form method="post" action="{{ route('decline_friend', $user->email) }}"> --}}
                                {{-- {{ csrf_field() }} --}}
                                <button type="submit" id="a_del" data-email="{{$user->email}}" data-id="{{$user->id}}" class="btn btn-danger decline_friend">Decline</button>
                            {{-- </form> --}}
                        </div>
                    @empty
                        <div class="col-sm-10 col-sm-offset-1 well">
                            <h3><b class="text-danger">No friend rquest yet!</b></h3>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
