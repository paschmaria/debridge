	        		@foreach($users as $user)
	        			<div class="col-md-6 col-sm-6 col-xs-6 col-12">
	        				<div class="">
		        				<div class="row">
		        					<div class="col-md-3 col-sm-3 col-xs-6">
		        							<div class="profile-picture dis-inline">
			        							@if($user->profile_picture != null)
			        								<img src="{{ route('image', [$user->profile_picture->image_reference,'']) }}" class="p-10 h-100 width-100 card image-resposive">
						        				@else
						        					<img src="{{ asset('img/icons/profile.png') }}" class="p-10 h-100 width-100 card image-resposive">
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
			        				@if(in_array($user->id, $following_ids))
			        					{{-- <form method="post" action="{{ route('unfollow', $user->reference) }}"> --}}
			        						<button class="btn unfollow btn-sm f-14 waves-light waves-effect btn-outline-brand m-t-40 m-b-50" data-email="{{$user->reference}}" data-id="{{$user->id}}" data-fname="{{$user->full_name()}}" >Unfollow</button>
			        					{{-- </form> --}}
			        				@else
			        					{{-- <form method="post" action="{{ route('follow', $user->reference) }}"> --}}
			        						<button class="btn follow btn-sm f-14 waves-light waves-effect btn-outline-brand m-t-40 m-b-50" data-email="{{$user->reference}}" data-id="{{$user->id}}" data-fname="{{$user->full_name()}}" >Follow</button>
			        					{{-- </form> --}}
			        				@endif
			        				</div>
		        				</div>
		        			</div>
		        		</div>
	        		@endforeach