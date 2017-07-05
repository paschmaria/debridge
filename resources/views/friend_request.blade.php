@extends('layouts.master')

@section('content')

         <!-- main section begins here-->
        <section class="main">
          <div class="container bd-dark-light m-t-60 width-800 h-800">
                <h6 class="m-t-30 m-l-2">Trade Requests</h6>
                <hr>
                @forelse(auth()->user()->received_requests as $user)
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                           <div class="col-md-4">
                                <h6>{{ $user->full_name() }}</h6>
                                <img src="{{ asset('img/pphoto-10.jpeg') }}" class="bd-dark-light p-5">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row m-t-20">
                            <div class="col-md-6">
                                <div class="m-l-60 m-t-20">
                                    <form method="post" action="{{ route('accept_trade_request', $user->reference) }}">

                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm bg-brand" href=""><span>&times;&nbsp;&nbsp;</span>Accept</button>
                                        
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="m-l-60 m-t-20">
                                    <form method="post" action="{{ route('decline_trade_request', $user->reference) }}">
                                    
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm bg-brand" href=""><span>&times;&nbsp;&nbsp;</span>Cancel</button>
                                        
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>  
                </div>
                @empty
                <p>No Trade Requests</p>
                <hr>
                <h3>Suggestion</h3>

                @endforelse
            
                </div>
            </div>
          </div>
        </section>
        <!-- main section ends here-->
        
@endsection('content')