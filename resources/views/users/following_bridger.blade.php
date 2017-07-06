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
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('following', auth()->user()->reference) }}">Following</a></li>
	                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('followers', auth()->user()->reference) }}">Followers</a></li>
	                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('timeline', auth()->user()->reference) }}">Tradeline</a></li>
	                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">Business Invitation</a></li>
	                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">Models</a></li>
	                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">Market Value</a></li>
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
	            <h3 class="h3-responsive c-brand f-24 m-t-30 m-b-8">BRIDGER</h3>
	            <div class="">
	            	<button class="btn btn-md btn-sm pull-right f-17 m-b-10 bg-brand-lite btn-outline-brand"><a href="{{url('/users/follow/more')}}" class="c-brand"><span class="fa fa-plus m-r-10"></span>Follow More</a></button>
	            </div><br>
	        </div>
	        <!-- friends display  -->
	        <div class="m-t-40 m-b-140">
	        	<div class="row">
	        		<!-- first column of friends -->
	        		<div class="p-10 m-b-20 bg-brand col-sm-12">{{ $user->full_name() }}'S FOLLOWING <span class="badge bg-white c-brand follow_count" >{{ $following_count }}</span></div>
	        		@forelse ($following as $user)
	        			<div class="col-md-6 col-sm-6 col-xs-6 col-12">
	        				<div class="h-114 width-563 m-b-30">
		        				<div class="row">
		        					<div class="col-md-3 col-sm-3 col-xs-6">
		        							<div class="profile-picture dis-inline">
			        							@if($user->image_id != null)
			        								<img src="{{ asset('img/icons/profiled.png') }}" class="p-10">
						        					{{-- <img src="{{ route('image', [$user->profile_picture->image_reference,'']) }}" class="p-10"> --}}
						        				@else
						        					<img src="{{ asset('img/icons/profiled.png') }}" class="p-10">
						        				@endif
				        					</div>
		        					</div>
			        				<div class="col-md-4 col-sm-4 col-xs-4 col-12 p-t-10">
			        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
											<a href="{{ route('timeline', $user->reference) }}"><p class="f-14 m-t-30 text-fluid c-brand">
												{{ strtoupper($user->full_name()) }} 
												@if($user->role_id != null && $user->role->name == 'Merchant')
													(Merchant)
												@endif
											</p></a>
											<p class="f-12 text-fluid">{{ $user->email }}</p>
										</div>
			        				</div>
			        				<div class="col-md-5 col-sm-5 col-xs-5">
			        					<form method="post" action="{{ route('unfollow', $user->email) }}">
			        						<!-- <button type="submit" class="btn btn-sm f-14 waves-light waves-effect c-brand btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Unfollow</button> -->
			        						<button class="btn unfollow btn-sm f-14 waves-light waves-effect c-brand btn-outline-brand m-t-40 m-b-50" data-email="{{$user->reference}}" data-id="{{$user->id}}" data-fname="{{$user->full_name()}}" ><span class="fa fa-check">&nbsp; &nbsp;</span>Unfollow</button>
			        					</form>
			        				</div>
		        				</div>
		        			</div>
		        		</div>
        			@empty
        				<div class="p-10 col-sm-12 c-brand"><p>no one is currently following {{ $user->full_name() }}</p></div>
        			@endforelse
	        		</div>
	        		<!-- / first column of friends -->
	        	</div>


	        </div>
	        <!-- / friends display -->
	        <!-- pagination begins here -->
	        {{-- <div class="pagination-wrapper width-300 h-30 m-auto m-b-20">
	        	<nav class="dis-flex text-center">
	        		<ul class="pagination footer f-14 c-gray">
	        			<li class="page-item diabled">
	        				<a href="#" class="page-link" aria-label="Previous">
	        					<span aria-hidden="true">&laquo;</span>
	        					<span class="sr-only">Prev</span>
	        				</a>
	        			</li>
	        			<li class="page-item active">
	        				<a href="#" class="page-link">1<span class="sr-only">(current)</span></a>
	        			</li>
	        			<li class="page-item">
	        				<a href="#" class="page-link">2</a>
	        			</li>
	        			<li class="page-item">
	        				<a href="#" class="page-link">3</a>
	        			</li>
	        			<li class="page-item">
	        				<a href="#" class="page-link">4</a>
	        			</li>
	        			<li class="page-item">
	        				<a href="#" class="page-link">5</a>
	        			</li>
	        			<li class="page-item">
	        				<a href="#" class="page-link">6</a>
	        			</li>
	        			<li class="page-item">
	        				<a href="#" class="page-link" aria-label="Next">
	        					<span class="c-brand" aria-hidden="true">&raquo;</span>
	        					<span class="sr-only">Next</span>
	        				</a>
	        			</li>
	        		</ul>
	        	</nav>
	        </div> --}}
	        <!-- pagination ends here -->
    </section>
    <!-- main section ends here -->
@endsection
