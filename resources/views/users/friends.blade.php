@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @forelse ($friends as $friend)
                        <div class="col-sm-12 well">
                            <p>{{ $friend->email }}</p>
                            <form method="post" action="{{ route('unfriend', $friend->email) }}">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger">unfriend</button>
                            </form>
                        </div>
                    @empty
                        <div class="col-sm-10 col-sm-offset-1 well">
                            <h3><b class="text-danger">No friends yet!</b></h3>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
