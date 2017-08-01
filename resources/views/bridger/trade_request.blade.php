@extends('layouts.master')
@section('header')
	<!-- navigations/links right here -->
        <nav class="navbar navbar-toggleable-sm navbar-light transparent p-t-15 p-b-15 no-shadow border-top border-bottom" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div id="navbarNav1" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                    @if(auth()->check())
                    	@if(auth()->user()->checkRole())
                    		<li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('view_friends', auth()->user()->reference) }}">Friends</a></li>
                    	@else
                    		<li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('view_partners', auth()->user()->reference) }}">Trade Partners</a></li>
                    	@endif
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('following', auth()->user()->reference) }}">Following</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('followers', auth()->user()->reference) }}">Followers</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('timeline', auth()->user()->reference) }}">Tradeline</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('community', auth()->user()->reference) }}">Trade Community</a></li>
                    @else
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Following</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Followers</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Tradeline</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Trade Community</a></li>
                    @endif
                    <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('bridge_shops') }}">Bridger Shops</a></li>
                    <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('araha_market') }}">Araha Market</a></li>
                    <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="{{ route('exhibition') }}">Exhibition Stand</a></li>
                    <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="{{ route('hiring') }}">Hiring</a></li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    <!-- navigations/links ends here -->
@endsection

@section('content')
    <!--main section begins here-->
    <section class="main">
    	<div class="container">
    		<div id="navbarNav1 m-t-40">
	            <h3 class="h3-responsive c-brand f-24 m-t-30 m-b-8">TRADE REQUEST</h3>
	            <div class="h-58">
	            	{{-- <p class="text-fluid c-gray f-14 dis-inline-b">All users on the bridge u can follow</p> --}}
	            	<a href="{{ route('add_more_partners') }}"><button class="btn btn-md btn-sm pull-right f-14 m-b-10 bg-brand-lite btn-outline-brand"><span class="fa fa-plus m-r-10"></span>ADD MORE PARTNERS</button></a>
	            </div>
	        </div>

	        <!-- friends display  -->
	        <div class="m-t-20 m-b-50">
	        	{{-- <div class="m-b-20">
	        		<nav class="navbar user-type-navbar no-shadow">
                        <ul class="nav user-type-nav text-center">
                            <li class="nav-item"><a class="nav-link hover-underline @if(strtolower($filter == ''))active @endif" href="{{ route('view_users') }}">ALL</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline @if($filter == 'merchant')active @endif" href="{{ route('view_users', 'merchant') }}">MERCHANT</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline @if($filter == 'user')active @endif" href="{{ route('view_users', 'user') }}">INDIVIDUALS</a></li>
                        </ul>
                    </nav>
	        	</div> --}}
	        	<hr>
	        	<div class="row">
		        		<!-- first column of friends -->
		        		@forelse(auth()->user()->received_trade_requests as $user)
		        			<div class="col-md-6 col-sm-6 col-xs-6 col-12 m-t-30">
	        				<div class="">
		        				<div class="row">
		        					<div class="col-md-3 col-sm-3 col-xs-6 m">
		        							<div class="profile-picture dis-inline">
			        							@if($user->profile_picture != null)
			        								<img src="{{ route('image', [$user->profile_picture->image_reference,'']) }}" class="p-10 h-100 width-100 card image-responsive">
						        				@else
						        					<img src="{{ asset('img/icons/profiled.png') }}" class="p-10 h-100 width-100 card image-responsive">
						        				@endif
				        					</div>
		        					</div>
			        				<div class="col-md-4 col-sm-4 col-xs-4 col-12">
			        					<div class="profile-description dis-inline c-gray-medium">
											<a href="{{ route('timeline', $user->reference) }}"><p class="f-14 m-t-30 text-fluid c-brand">
												{{ $user->full_name() }} 
												@if($user->role_id != null && $user->role->name == 'Merchant')
													<small>(Merchant)</small>
												@endif
											</p></a>
											<p class="f-12 text-fluid">{{ $user->email }}</p>
										</div>
			        				</div>
			        				<div class="col-md-5 col-sm-5 col-xs-5">
			        				
			        				<a href="{{ route('accept_partnership', $user->reference) }}"><button class="btn btn-sm waves-light waves-effect c-brand btn-outline-brand m-t-10 m-b-5" data-email="{{$user->reference}}" data-id="{{$user->id}}" data-fname="{{$user->full_name()}}" >Accept <i class="fa fa-check"></i></button></a>
			        					
			        				<button class="btn btn-sm waves-light waves-effect c-brand btn-outline-brand m-t-5 m-b-5" data-email="{{$user->reference}}" data-id="{{$user->id}}" data-fname="{{$user->full_name()}}" data-toggle="modal" data-target="#cancel-modal{{ $user->id }}">Reject &nbsp<i class="fa fa-times c-red"></i></button>

			        				<!-- Modal reject -->
					                    <div class="modal fade m-t-180" id="cancel-modal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					                        <div class="modal-dialog" role="document">
					                            <!--Content-->
					                            <div class="modal-content">
					                                <!--Header-->
					                                <div class="modal-header bg-brand text-right">
					                                    <button type="button" class="close c-white" data-dismiss="modal">&times;</button>
					                                </div>
					                                <!--Body-->
					                                <div class="modal-body bg-brand-lite c-dark dis-flex">
					                                    <p class="text-responsive w-700 m-0">Are you sure you want to reject this partnership?</p>
					                                </div>
					                                <!--Footer-->
					                                <div class="modal-footer bg-brand-lite justify-content-center">
					                                    <a class="btn btn-md btn-outline-brand" href="{{ route('reject_partnership', $user->reference) }}">Yes</a>
					                                    <button type="button" class="btn btn-md btn-outline-brand" data-dismiss="modal">No</button>
					                                </div>
					                            </div>
					                            <!--/.Content-->
					                        </div>
					                    </div>
				                    <!-- Modal -->
			        				
			        				</div>
		        				</div>
		        			</div>
		        		</div>
		        		@empty
		        		<h4 class="p-20 c-gray h4-responsive">No pending trade request</h4>
		        		@endforelse
		        		<!-- / second column of friends -->
		        	</div>
	        </div>
    	</div>
    </section>
    <!-- main section ends here -->
@endsection('content')
