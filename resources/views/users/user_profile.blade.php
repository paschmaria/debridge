@extends('layouts.master')
@section('extra_styles')
	<style typ>
		.border-right {
		  border-right: 1px solid rgba(0, 0, 0, 0.125) !important;
		}
	</style>
@endsection
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
						{{-- @if($user->profile_picture != null)
							<img src="{{ route('image', [$user->profile_picture->image_reference, '']) }}" class="bd-dark-light pics2 p-5">
						@else
					    	<img src="{{ asset('img/icons/profiled.png') }}" class="bd-dark-light pics2 p-5">
					    @endif --}}
					    <form method="post" action="{{ route('upload_profile_pic') }}" enctype="multipart/form-data" id="upload_form">
                        {{ csrf_field() }}
                            <div class="card">
                                <div class="profile-img-holder width-185 h-261 m-r-40">
                                @if(auth()->user()->profile_picture == null)
                                    <div class="photo_wrapper h-200 p-l-5 p-t-5">
                                        <img src="{{ asset('img/icons/profiled.png') }}" id="post" class="h-200 width-100p">
                                    </div>
                                @else
                                    <div class="photo_wrapper h-200 p-l-5 p-t-5">
                                        <img src="{{ route('image', [auth()->user()->profile_picture->image_reference, '']) }}" id="post" class="h-200 width-100p">
                                    </div>
                                @endif                                            
                                    <div class="pos-rel">
                                        <button type="submit" class="btn btn-brand btn-flat m-l-18">
                                        <i class="fa fa-plus-circle"></i>
                                        Upload</button>
                                       <input name="img_ref" type="file" class="pos-abs l-30 width-125 h-40 t-8 hide z-10" id="upload">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="text-center m-t-10">
                                <button class="btn btn-sm btn-brand">save</button>
                            </div>  --}}
                        </form>
					</div>
					<div class="list-group m-t-20">
						<a href="{{ route('timeline', $user->reference) }}" class="list-group-item list-group-item-action f-12">TIMELINE</a>
                        <a href="{{ route('view_profile', $user->reference) }}" class="list-group-item list-group-item-action f-12">PROFILE</a>
                        @if(!$user->checkRole())
                        	<a href="{{ route('view_inventory', $user->reference) }}" class="list-group-item list-group-item-action f-12">INVENTORY</a>
                        @endif
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
										<div class="col-md-6 media border-right">
										    <div class="media-body c-brand">
										    	<div class="media-heading w-500 clearfix m-b-5">
										    		<span><i class="fa fa-user">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user->full_name() }}({{ $user->gender }})</span>
										    		@if($user->id == auth()->user()->id)
										    			<a class="pull-right c-brand detail-edit-icon" data-toggle="modal" data-target="#changeaccount"><i class="fa fa-pencil"></i></a>
										    		@endif
										    	</div>
										    	<p class="m-b-5"><span><i class="fa fa-envelope">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user->email }}</span></p>
										    	<p class="m-b-5"><span><i class="fa fa-calendar">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user->date_of_birth }}</span></p>
										    	<p><span><i class="fa fa-map-o">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user->community->community_address() }}<small class="c-gray"> (Trade community)</small></span></p>
										    </div>
										</div>

										<div class="media col-md-6">
										    <div class="media-body c-brand">
										    	<div class="media-heading w-500 clearfix m-b-5">
										    	@if($user->checkRole())
										    		<span><i class="fa fa-phone-square f-20">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user_acc->telephone }}</span>
										    	@else
										    		<span><i class="fa fa-phone-square f-20">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $merchant->telephone }}</span>
										    	@endif
										    		@if($user->id == auth()->user()->id)
										    			<a class="pull-right c-brand detail-edit-icon" data-toggle="modal" data-target="#Changecontact"><i class="fa fa-pencil"></i></a>
										    		@endif
										    	</div>
										    	@if($user->checkRole())
										    		@if($user_acc->address != null)
										    			<p class="m-b-5"><span><i class="fa fa-map-o">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user_acc->address->address }}</span></p>
										    			@if($user_acc->address->state != null)
										    				<p class="m-b-5"><span><i class="fa fa-map-pin">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user_acc->address->state->name }}</span></p>
										    			@endif
										    		@endif
										    		<p class="m-b-5"><span><i class="fa fa-mobile f-20">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $user_acc->status }}</span></p>
									    		@else
									    			<p class="m-b-5"><span><i class="fa fa-mobile f-20">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $merchant->store_name }}</span></p>
									    			@if($merchant->address != null)
										    			<p class="m-b-5"><span><i class="fa fa-map-o">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $merchant->address->address }}</span></p>
										    			@if($merchant->address->state != null)
										    				<p class="m-b-5"><span><i class="fa fa-map-pin">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $merchant->address->state->name }}</span></p>
										    			@endif
										    		@endif
										    		<p class="m-b-5"></p>
										    		<p class="m-b-5 width-500"><span><i class="fa fa-quote-right f-20">&nbsp;&nbsp;</i></span><span class="c-dark">{{ $merchant->status }}</span></p>
									    		@endif
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
										    	<img src="{{ route('image', [$person->profile_picture->image_reference, '']) }}" class="img-responsive h-100 width-100">
										    @else
										    	<img src="{{ asset('img/icons/profiled.png') }}" class="img-responsive h-100 width-100"> 
										    @endif
										    </div>
										    <div class="media-body m-t-20">
											    <p class="media-heading">
											      	<a href="{{ route('timeline', $person->reference) }}" class="c-brand">{{ $person->full_name() }}</a>
											      	<br>{{ $person->community_address() }}
											    </p>
										    </div>
										    <a href="{{ route('unfollow', $person->reference) }}">
										    	<button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40"><span class="fa fa-check">&nbsp; &nbsp;</span>Unfollow</button>
										    </a>
										</div>
									</div>
								</div>
							@endforeach
							@if($following_count > 3)
								<a href="{{ route('following', $user->reference) }}" >
									<button class="btn btn-sm btn-brand pull-right m-r-5">Veiw all</button> 
								</a>
							@endif
						</div>
						<div class="col-md-6 col-sm-6 col-12 m-t-10">
							<h4 class="h2-responsive text-left m-b-10 c-brand p-l-5 m-t-5">FOLLOWERS <small>({{ $followers_count }})</small></h4>
							@foreach($followers as $person)
								<div class="card m-b-10">
									<div class="card-block">
										<div class="media">
										<div class="media-left">
											@if($person->profile_picture != null)
										    	<img src="{{ route('image', [$person->profile_picture->image_reference, '']) }}" class="img-responsive h-100 width-100">
										    @else
										    	<img src="{{ asset('img/icons/profiled.png') }}" class="img-responsive h-100 width-100"> 
										    @endif
										    </div>
										    <div class="media-body m-t-20">
										      <p class="media-heading">
											      <a href="{{ route('timeline', $person->reference) }}" class="c-brand">{{ $person->full_name() }}</a>
											      <br>{{ $person->community_address() }}</p>
										    </div>
										    @if (in_array($person->id, $following_ids))
										    	<a href="{{ route('unfollow', $person->reference) }}">
										    		<button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40"><span class="fa fa-check">&nbsp; &nbsp;</span>Unfollow</button>
										    	</a>
										    @else
										    	<a href="{{ route('follow', $person->reference) }}">
											    	<button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40"><span class="fa fa-check">&nbsp; &nbsp;</span>Follow</button>
											    </a>
										    @endif
										</div>
									</div>
								</div>
							@endforeach
							@if($followers_count > 3)
								<a href="{{ route('followers', $user->reference) }}" >
									<button class="btn btn-sm btn-brand pull-right m-r-5">Veiw all</button> 
								</a>
							@endif
						</div>
					</div>
					{{-- <h4 class="h3-responsive f-22 text-left m-t-20 m-b-25 c-brand">PHOTO</h4>
					@forelse($photo_albums as $photo_album)
						<div class="product-img-group m-t-20 bd-dark-light">
							@foreach($photo_album->images->chunk(4) as $images)
								<div class="card-group m-16">
									@foreach($images as $image)
										<div class="card m-5">
											<img src="{{ route('image', [$image->image_reference, '']) }}" class="picfix2">
											<div class="col-sm-12">
												<div class="row">
													
												<a href="{{ route('profile_picture', $image->id) }}"><button class="btn btn-sm btn-brand m-l-10">set as profile picture</button></a>
												<a href="{{ route('delete_image', $image->id) }}"><i class="fa fa-trash p-10 text-danger pull-right p-l-20"></i></a>
													
												</div>
											</div>
										</div>
									@endforeach
								</div>
							@endforeach
						</div>
					@empty
						<h5 class="h5-responsive f-22 text-left m-t-20 m-b-25 c-gray">No photos to display</h5>
					@endforelse --}}
				</main>
			</div>
		</section>
		</div>
	</section>
    <!-- main section ends here -->
    <!-- Modal for change contact-->
	<div class="modal fade" id="changeaccount" tabindex="-1" role="dialog" aria-labelledby="Changecontact" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <!--Content-->
	        <div class="modal-content m-t-180">
	            <!--Header-->
	            <div class="modal-header bg-brand">
	            	<h4 class="modal-title w-100 f-17" id="Changecontact1">Account Setting</h4>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <!--Body-->
	            @if(auth()->check())
		            <div class="modal-body">
		                <form class="m-20"action="{{ route('update_profile') }}" method="post">
	                        {{ csrf_field() }}
			                <div class="row">
	                            <div class="col-md-6 col-sm-6 col-12 form-group">
	                                <label for="usr-fname" class="c-dark f-14">First Name*</label>
	                                <input type="text" name="first_name" id="usr-fname" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14" value="{{ auth()->user()->first_name }}"required>
	                                @if ($errors->has('first_name'))
	                                    <span class="help-block text-danger">
	                                        <strong>{{ $errors->first('first_name') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                            <div class="col-md-6 col-sm-6 col-12 form-group">
	                                <label for="usr-lname" class="c-dark f-14">Last Name <small class="c-gray ">(Surname)</small>*</label>
	                                <input type="text" name="last_name" id="usr-lname" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14" value="{{ auth()->user()->last_name }}" required>
	                                @if ($errors->has('last_name'))
	                                    <span class="help-block text-danger">
	                                        <strong>{{ $errors->first('last_name') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-md-12 col-sm-12 col-12 form-group">
	                                <label for="usr-email" class="c-dark f-14">Email*</label>
	                                <input type="email" name="email" id="usr-email" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14" value="{{ auth()->user()->email }}" required>
	                                @if ($errors->has('email'))
	                                    <span class="help-block text-danger">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-md-6 col-sm-6 col-12 form-group">
	                                <label for="usr-gender" class="f-14 c-dark">Gender</label>
	                                <select name="gender" id="usr-gender" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow f-14 p-l-10">
	                                    <option selected
	                                    @if(auth()->user()->gender != null) 
	                                        value="{{ auth()->user()->gender }}"> 
	                                        {{ auth()->user()->gender }}
	                                    @else
	                                        >Choose gender...
	                                    @endif
	                                    </option>
	                                    <option value="Male">Male</option>
	                                    <option value="Female">Female</option>
	                                </select>
	                                @if ($errors->has('gender'))
	                                    <span class="help-block text-danger">
	                                        <strong>{{ $errors->first('gender') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                            <div class="col-md-6 col-sm-6 col-12 form-group">
	                                <label for="usr-dob" data-error="wrong" data-success="right" class="f-14">Date of Birth*</label>
	                                <input type="date" name="date_of_birth" id="usr-dob" class="form-control bd-3 h-40 validate input-alternate border-box f-14" value="{{ auth()->user()->date_of_birth }}" required>
	                            </div>
	                        </div>
	                        <div class="row">
                                <div class="col-md-12 col-sm-12 col-12 form-group">
                                    <label class="f-14 c-dark">Trade Community</label>
                                    <select name="community" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow f-14 p-l-10">
                                        <option selected
                                            @if(auth()->user()->community != null)
                                            value="{{ auth()->user()->community->id }}">{{ auth()->user()->community->name }}
                                            @else
                                            disabled>Trade community state...
                                            @endif
                                        </option>
                                        @foreach($communities as $community)
                                            <option value="{{ $community->id }}">{{ $community->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('community'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('community') }}</strong>
                                    </span><br><br>
                                    @endif
                                </div>
                            </div>
		                	<button type="submit" class="btn btn-sm btn-brand pull-right">Save</button>
		                </form>
		            </div>
	            @endif
	        </div>
	        <!--/.Content-->
	    </div>
	</div>
<!-- Modal -->
<!-- Modal for change city-->
	<div class="modal fade" id="Changecontact" tabindex="-1" role="dialog" aria-labelledby="Changecity" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <!--Content-->
	        <div class="modal-content m-t-180">
	            <!--Header-->
	            <div class="modal-header bg-brand">
	            	<h4 class="modal-title w-100 f-17" id="Changecity1"><i class="fa fa-address-book-o"></i> Contact Information Setteing</h4>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <!--Body-->
	            <div class="modal-body">
	            @if(auth()->check())
	                <form method="post" @if (auth()->user()->checkRole())
                            action="{{ route('update_user') }}" 
                        @else
                            action="{{ route('update_merchant') }}"
                        @endif>
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12 form-group">
                                    <label for="usr-password" data-error="wrong" data-success="right" class="f-14 c-dark">Telephone</label>
                                    <input type="text" name="telephone" id="usr-password" class="form-control bd-3 h-40 validate input-alternate border-box bg-white f-14"@if(auth()->user()->checkRole())
                                        value="{{ auth()->user()->user_account->telephone }}"
                                    @else
                                        value="{{  auth()->user()->merchant_account->telephone }}"
                                    @endif>
                                    @if ($errors->has('telephone'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('telephone') }}</strong>
                                        </span><br><br>
                                    @endif
                                </div>
                            </div>
                            @if(auth()->user()->checkRole())
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                        <label class="c-dark f-14">Address </label>
                                        <input type="text" name="address" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14"
                                        @if(auth()->user()->user_account->address != null)
                                            value="{{ auth()->user()->user_account->address->address }}" 
                                        @endif>
                                        @if ($errors->has('address'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('address') }}</strong>
                                            </span><br><br>
                                        @endif
                                        <label class="c-dark f-14">State: </label>
                                        <select name="state" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow f-14 p-l-10">
                                            <option selected
                                                @if(auth()->user()->user_account->address != null && auth()->user()->user_account->address->state != null)
                                                value="{{ auth()->user()->user_account->address->state->id }}">{{ auth()->user()->user_account->address->state->name }}
                                                @else
                                                disabled>Select state...
                                                @endif
                                            </option>
                                            @foreach($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('state'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span><br><br>
                                        @endif
                                    </div>
                                </div>
                            @else
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                        <p class="f-16 c-green m-t-10">Store Information</p><hr>
                                        <label class="f-14 c-dark">Store Name</label>
                                        <input type="text" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14" name="store_name" value="{{ auth()->user()->merchant_account->store_name }}">
                                        @if ($errors->has('store_name'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('store_name') }}</strong>
                                        </span><br><br>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                        <label class="c-dark f-14">Store Address: </label>
                                        <input type="text" name="address" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14"
                                        @if(auth()->user()->merchant_account->address_id != null)
                                            value="{{ auth()->user()->merchant_account->address->address }}" 
                                        @endif>
                                        @if ($errors->has('address'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span><br><br>
                                        @endif
                                        <label class="c-dark f-14">State: </label>
                                        <select name="state" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow f-14 p-l-10">
                                            <option selected
                                                @if(auth()->user()->merchant_account->address != null && auth()->user()->merchant_account->address->state != null)
                                                value="{{ auth()->user()->merchant_account->address->state->id }}">{{ auth()->user()->merchant_account->address->state->name }}
                                                @else
                                                disabled>Select state...
                                                @endif
                                            </option>
                                            @foreach($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('state'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span><br><br>
                                        @endif
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12 form-group">
                                    <label class="f-14 c-dark">Brief Description <small class="c-gray">(status : max of 180 characters)</small> </label>
                                    <textarea type="text" name="status" class="form-control p-10 bd-3 h-58 input-alternate border-box md-textarea bg-white f-14">@if(auth()->user()->checkRole()){{ auth()->user()->user_account->status }} @else {{ auth()->user()->merchant_account->status }} @endif </textarea>
                                    @if ($errors->has('status'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span><br><br>
                                    @endif
                                </div>
                            </div>
						<button type="submit" class="btn btn-sm btn-brand pull-right">Save</button>
	                </form>
	             @endif
	            </div>
	        </div>
	        <!--/.Content-->
	    </div>
	</div>
<!-- Modal -->

@endsection

@section('scripts')
	<script>
		 $(document).ready(function () {
			var app2 = {
                imageHandler:function (){
                    $('#upload').on('change', function(){
                    	var img_ref = $("#upload")[0].files[0];
                    	console.log(img_ref);
                    	data = new FormData();
						data.append('img_ref', img_ref);
                    	$.ajax({
                    		url: "/users/profile/edit/picture",
	                        type:"POST",
	                        eenctype: 'multipart/form-data', 
	                        data: data,
	                        processData: false,  // do not process the data as url encoded params
    						contentType: false,
	                        success: function(data){
	                        	console.log(data)
	                        	readUrl();
	                            toastr.success("Profile picture has been updated!");
	                        },
	                        error: function (data) {
	                        	toastr.error("Somthing went wrong")
	                        }
                    	});
                    });
                    function readUrl(argument) {
                        var file = $("#upload")[0].files[0];
                        var reader = new FileReader();
                        reader.onloadend = function () {
                            $("#post").attr('src', reader.result);
                            $("#profile_picture_main").attr('src', reader.result);
                        }
                        if (file) {
                            reader.readAsDataURL(file);
                        }
                    }
                }
	        }
	        app2.imageHandler();
	    });
	</script>
@endsection
