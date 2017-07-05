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
<div class="col-12">
	<section>
    	<div class="container-fluid">
		<h2 class="h1-responsive f-48 text-center m-t-20 m-b-25 c-brand w-500">{{ $user->full_name() }}</h2>
		<section>
			<div class="row m-t-20">
				<aside class="col-md-2 col-sm-2 col-12">
					<div class="">
						@if($user->profile_picture != null)
							<img src="{{ route('image', $user->profile_picture->image_reference) }}" class="bd-dark-light pics2 p-5">
						@else
					    	<img src="{{ asset('img/icons/profiled.png') }}" class="bd-dark-light pics2 p-5">
					    @endif
					</div>
					<div class="list-group m-t-20">
						<a href="#" class="list-group-item list-group-item-action f-12">TIMELINE</a>
                        <a href="#" class="list-group-item list-group-item-action f-12">PHOTOS</a>
                        <a href="#" class="list-group-item list-group-item-action f-12">DOCUMENTS</a>
                        <a href="#" class="list-group-item list-group-item-action f-12">TRADE GROUPS</a>
                        <a href="#" class="list-group-item list-group-item-action f-12">COMMUNITY</a>
					</div>
				</aside>
				<main class="col-md-10 col-sm-10 col-12">
					<div class="card">
						<div class="card-block">
							<div class="row">
								<div class="col-sm-12 col-md-12 col-12">
									<div class="row">
										<div class="col-12">
											<div class="media border-bottom">
											    <div class="media-body c-brand">
											    	<div class="media-heading w-500 clearfix m-b-5">
											    		<span><i class="fa fa-user">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user->full_name() }}({{ $user->gender }})</span>
											    		@if($user->id == auth()->user()->id)
											    			<a class="pull-right c-brand detail-edit-icon" data-toggle="modal" data-target="#Changework1"><i class="fa fa-pencil"></i></a>
											    		@endif
											    	</div>
											    	<p class="m-b-5"><span><i class="fa fa-envelope">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user->email }}</span></p>
											    	<p class="m-b-5"><span><i class="fa fa-calendar">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user->date_of_birth }}</span></p>
											    </div>
											</div>

											<div class="media">
											    <div class="media-body c-brand">
											    	<div class="media-heading w-500 clearfix m-b-5 m-t-10">
											    		<span><i class="fa fa-map-o">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user->community->community_address() }}<small class="c-gray"> (Trade community)</small></span>
											    		@if($user->id == auth()->user()->id)
											    			<a class="pull-right c-brand detail-edit-icon" data-toggle="modal" data-target="#Changework1"><i class="fa fa-pencil"></i></a>
											    		@endif
											    	</div>
											    	@if($user->checkRole())
											    		@if($user_acc->address != null)
											    			<p class="m-b-5"><span><i class="fa fa-user-circle">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user_acc->address->address }}</span></p>
											    			@if($user_acc->address->state != null)
											    				<p class="m-b-5"><span><i class="fa fa-user-circle">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user_acc->address->state->name }}</span></p>
											    			@endif
											    		@endif
										    		@else

										    		@endif
											    	
											    	<p class="m-b-5"><span><i class="fa fa-mobile f-20">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user_acc->telephone }}</span></p>
											    </div>
											</div>

										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-12 m-t-10">
							<h4 class="h2-responsive text-left m-b-10 c-brand p-l-5 m-t-5">FOLLOWING <small>({{ $following_count }})</small></h4>
							@foreach($following as $person)
								<div class="card m-b-10">
									<div class="card-block">
										<div class="media">
										<div class="media-left">
											@if($person->profile_picture != null)
										    	<img src="assets/img/photo000.png" class="media-object picfix">
										    @else
										    	<img src="{{ asset('img/icons/profiled.png') }}" class="media-object picfix"> 
										    @endif
										    </div>
										    <div class="media-body m-t-20">
										      <p class="media-heading">{{ $person->full_name() }}<br>{{ $person->community_address() }}</p>
										    </div>
										    <button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40"><span class="fa fa-check">&nbsp; &nbsp;</span>Unfollow</button>
										</div>
									</div>
								</div>
							@endforeach
							<a href="{{ route('following', $user->reference) }}" >
								<button class="btn btn-sm btn-brand pull-right m-r-5">Veiw all</button> 
							</a>
						</div>
						<div class="col-md-6 col-sm-6 col-12 m-t-10">
							<h4 class="h2-responsive text-left m-b-10 c-brand p-l-5 m-t-5">FOLLOWERS <small>({{ $followers_count }})</small></h4>
							@foreach($followers as $person)
								<div class="card m-b-10">
									<div class="card-block">
										<div class="media">
										<div class="media-left">
											@if($person->profile_picture != null)
										    	<img src="assets/img/photo000.png" class="media-object picfix">
										    @else
										    	<img src="{{ asset('img/icons/profiled.png') }}" class="media-object picfix"> 
										    @endif
										    </div>
										    <div class="media-body m-t-20">
										      <p class="media-heading">{{ $person->full_name() }}<br>{{ $person->community_address() }}</p>
										    </div>
										    <button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40"><span class="fa fa-check">&nbsp; &nbsp;</span>Unfollow</button>
										</div>
									</div>
								</div>
							@endforeach
							<a href="{{ route('followers', $user->reference) }}" >
								<button class="btn btn-sm btn-brand pull-right m-r-5">Veiw all</button> 
							</a>
						</div>
					</div>
					<h4 class="h1-responsive f-22 text-left m-t-20 m-b-25 c-brand">PHOTO</h6>
					<div class="product-img-group m-t-20 bd-dark-light">
						<div class="card-group m-16">
							<div class="card m-5">
								<img src="assets/img/rectangle-499.png " class="picfix2">
							</div>
							<div class="card m-5">
								<img src="assets/img/rectangle-496.png" class="picfix2">
							</div>
							<div class="card m-5">
								<img src="assets/img/rectangle-495.png" class="picfix2">
							</div>
							<div class="card m-5">
								<img src="assets/img/rectangle-494.png" class="picfix2">
							</div>
						</div>
						<div class="card-group m-t-10 m-16">
							<div class="card m-5">
								<img src="assets/img/rectangle-493.png" class="picfix2">
							</div>
							<div class="card m-5">
								<img src="assets/img/rectangle-492.png" class="picfix2">
							</div>
							<div class="card m-5">
								<img src="assets/img/rectangle-491.png" class="picfix2">
							</div>
							<div class="card m-5">
								<img src="assets/img/rectangle-490.png" class="picfix2">
							</div>
						</div>
					</div>
				</main>
			</div>
		</section>
		</div>
	</section>
    <!-- main section ends here -->
    <!-- Modal for change contact-->
	<div class="modal fade" id="Changecontact1" tabindex="-1" role="dialog" aria-labelledby="Changecontact" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <!--Content-->
	        <div class="modal-content m-t-180">
	            <!--Header-->
	            <div class="modal-header">
	            	<h4 class="modal-title w-100 c-brand f-17" id="Changecontact1">Change Contact</h4>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <!--Body-->
	            <div class="modal-body">
	                <form class="m-l-60">
		                <div class="row">
		                    <div class="col-md-11">
		                        <div class="">
		                            <label for="Email">Change Email</label>
		                            <input type="text" name="Email" id="" class="form-control bd-3 h-40 input-alternate border-box bg-white">
		                        </div>
		                    </div>
	                	</div>
		                <div class="row">
		                    <div class="col-md-11">
		                        <div class="">
		                            <label for="Number">Change Phone Number</label>
		                            <input type="text" name="Phone" id="" class="form-control bd-3 h-40 input-alternate border-box bg-white">
		                        </div>
		                    </div>
	                	</div>
	                	<button type="button" class="btn btn-sm btn-outline-brand pull-right m-r-40">Save</button>
	                </form>
	            </div>
	        </div>
	        <!--/.Content-->
	    </div>
	</div>
<!-- Modal -->
<!-- Modal for change city-->
	<div class="modal fade" id="Changecity1" tabindex="-1" role="dialog" aria-labelledby="Changecity" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <!--Content-->
	        <div class="modal-content m-t-180">
	            <!--Header-->
	            <div class="modal-header">
	            	<h4 class="modal-title w-100 c-brand f-17" id="Changecity1">Change city</h4>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <!--Body-->
	            <div class="modal-body">
	                <form class="m-l-60">
		                <div class="row">
		                    <div class="col-md-11">
		                        <div class="">
		                            <label for="Live">WHRE DO YOU LIVE</label>
		                            <input type="text" name="" id="" class="form-control bd-3 h-40 input-alternate border-box bg-white">
		                        </div>
		                    </div>
	                	</div>
		                <div class="row">
		                    <div class="col-md-11">
		                        <div class="">
		                            <label for="State">STATE OF ORIGIN</label>
		                            <input type="text" name="" id="" class="form-control bd-3 h-40 input-alternate border-box bg-white">
		                        </div>
		                    </div>
	                	</div>
	                	<button type="button" class="btn btn-sm btn-outline-brand pull-right m-r-40">Save</button>
	                </form>
	            </div>
	        </div>
	        <!--/.Content-->
	    </div>
	</div>
<!-- Modal -->
<!-- Modal for Education-->
	<div class="modal fade" id="Education1" tabindex="-1" role="dialog" aria-labelledby="Education" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <!--Content-->
	        <div class="modal-content m-t-180">
	            <!--Header-->
	            <div class="modal-header">
	            	<h4 class="modal-title w-100 c-brand f-17" id="Education1">Change University</h4>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <!--Body-->
	            <div class="modal-body">
	                <form class="">
		                <div class="row">
		                    <div class="col-md-12">
		                        <div class="">
		                            <label for="Study">WHRE DID YOU STUDY</label>
		                            <input type="text" name="" id="" class="form-control bd-3 h-40 input-alternate border-box bg-white">
		                        </div>
		                    </div>
	                	</div>
		                <div class="row">
		                    <div class="col-md-6">
		                    	<div class="form-group ">
		                    	    <div class="e-date1">
			                    	    <label class="" for="s-date">
			                    	       Start Date
			                    	    </label>
		                    	       	<div class="input-group input-shadow">
		                    	        	<input type="text" id="s-date" name="s-date" class="form-control input-alternate no-shadow" placeholder="MM/DD/YYYY"/>
		                    	        	<div class="input-group-addon">
		                    	         		<i class="fa fa-calendar c-brand"></i>
		                    	        	</div>
		                    	       	</div>
		                    	    </div>
		                    	</div>
		                    </div>
		                   	<div class="col-md-6">
		                    	<div class="form-group ">
		                    	    <div class="e-date1">
			                    	    <label class="" for="e-date">
			                    	       End Date
			                    	    </label>
		                    	       	<div class="input-group input-shadow">
		                    	        	<input type="text" id="e-date" name="e-date" class="form-control input-alternate no-shadow" placeholder="MM/DD/YYYY"/>
		                    	        	<div class="input-group-addon">
		                    	         		<i class="fa fa-calendar c-brand"></i>
		                    	        	</div>
		                    	       	</div>
		                    	    </div>
		                    	</div>
		                    </div>
	                	</div>
                		<div class="text-right">
                			<button type="button" class="btn btn-md btn-outline-brand m-r-0 width-100">Save</button>
                		</div>
	                </form>
	            </div>
	        </div>
	        <!--/.Content-->
	    </div>
	</div>
<!-- Modal -->
<!-- Modal for Change work-->
	<div class="modal fade" id="Changework1" tabindex="-1" role="dialog" aria-labelledby="Changework" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <!--Content-->
	        <div class="modal-content m-t-180">
	            <!--Header-->
	            <div class="modal-header">
	            	<h4 class="modal-title w-100 c-brand f-17" id="Changework1">Change Work</h4>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <!--Body-->
	            <div class="modal-body">
	                <form class="m-l-10">
		                <div class="row">
		                    <div class="col-md-11">
		                        <div class="">
		                            <label for="Study">WHRE DO YOU WORK</label>
		                            <input type="text" name="" id="" class="form-control bd-3 h-40 input-alternate border-box bg-white">
		                        </div>
		                    </div>
	                	</div>
		                <div class="row">
		                    <div class="col-md-6">
		                    	<div class="form-group ">
		                    	    <div class="e-date1">
			                    	    <label class="" for="s-date">
			                    	       Start Date
			                    	    </label>
		                    	       	<div class="input-group input-shadow">
		                    	        	<input type="text" id="s-date" name="s-date" class="form-control input-alternate no-shadow" placeholder="MM/DD/YYYY"/>
		                    	        	<div class="input-group-addon">
		                    	         		<i class="fa fa-calendar c-brand"></i>
		                    	        	</div>
		                    	       	</div>
		                    	    </div>
		                    	</div>
		                    </div>
		                   	<div class="col-md-6">
		                    	<div class="form-group ">
		                    	    <div class="e-date1">
			                    	    <label class="" for="e-date">
			                    	       End Date
			                    	    </label>
		                    	       	<div class="input-group input-shadow">
		                    	        	<input type="text" id="e-date" name="e-date" class="form-control input-alternate no-shadow" placeholder="MM/DD/YYYY"/>
		                    	        	<div class="input-group-addon">
		                    	         		<i class="fa fa-calendar c-brand"></i>
		                    	        	</div>
		                    	       	</div>
		                    	    </div>
		                    	</div>
		                    </div>
	                	</div>
	                	<div class="text-right">
                			<button type="button" class="btn btn-md btn-outline-brand m-r-0 width-100">Save</button>
                		</div>
	                </form>
	            </div>
	        </div>
	        <!--/.Content-->
	    </div>
	</div>
<!-- Modal -->

@endsection

@section('scripts')

@endsection
