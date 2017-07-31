@foreach($merchants as $user)
	<div class="col-md-6 col-sm-6 col-xs-6 col-12">
		<div class="">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="profile-picture dis-inline">
						@if($user->profile_picture != null)
							<img src="{{ route('image', [$user->profile_picture->image_reference,'']) }}" class="p-10 h-100 width-100 card image-responsive">
        				@else
        					<img src="{{ asset('img/icons/profile.png') }}" class="p-10 h-100 width-100 card image-responsive">
        				@endif
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 col-12">
					<div class="profile-description dis-inline c-gray-medium">
						<a href="{{ route('timeline', $user->reference) }}"><p class="f-14 m-t-30 text-fluid c-brand">
							{{ $user->full_name() }} 
							@if($user->merchant_account != null)
								<br><small>$user->merchant_account->store_name</small>
							@endif
						</p></a>
						<p class="f-12 text-fluid">{{ $user->email }}</p>
					</div>
				</div>
				@if(auth()->user()-> != $user->id)
    				@if(!auth()->user()->checkRole())
    					@if(in_array($user->id, auth()->user()->trade_partners->pluck('id')->toArray()))
    						<button class="btn btn-sm f-12 waves-light waves-effect btn-outline-brand m-t-40 m-b-50" data-toggle="modal" data-target="#cancel-modal{{ $user->id }}">
        					cancel partnersip <i class="fa fa-times c-red"></i>
        					</button>
    					@else
    						@if(!in_array($user->id, auth()->user()->sent_trade_requests->pluck('id')->toArray()))
    							<a href="{{ route('send_trade_request', $user->reference) }}">
    							<button class="btn btn-sm f-12 waves-light waves-effect btn-outline-brand m-t-40 m-b-50 ">Send Trade Request</button>

    						@else
    							<button class="btn btn-sm f-12 waves-light waves-effect btn-brand m-t-40 m-b-50" data-toggle="modal" data-target="#cancel-request-modal{{ $user->id }}">Cancel Trade Request</button>
    						@endif
    					
                        @endif
    				@else
    					@if(in_array($user, auth()->user()->following->toArray()))
    						<button class="btn btn-sm f-12 waves-light waves-effect btn-outline-brand m-t-40 m-b-50 follow" data-email="{{$user->reference}}" data-id="{{$user->id}}" data-fname="{{$user->full_name()}}" >follow</button>
    					@else
    						<button class="btn btn-sm f-12 waves-light waves-effect btn-brand m-t-40 m-b-50 unfollow" data-email="{{$user->reference}}" data-id="{{$user->id}}" data-fname="{{$user->full_name()}}">unfollow</button>
    					@endif
                    @endif
				@endif
				<!-- Modal cancel_partnership -->
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
                                    <p class="text-responsive w-700 m-0">Are you sure you want to cancel this partnership?</p>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer bg-brand-lite justify-content-center">
                                    <a class="btn btn-md btn-outline-brand" href="{{ route('cancel_patrnership', $user->reference) }}">Yes</a>
                                    <button type="button" class="btn btn-md btn-outline-brand" data-dismiss="modal">No</button>
                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                <!-- Modal -->

                <!-- Modal cancel_request -->
                    <div class="modal fade m-t-180" id="cancel-request-modal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Header-->
                                <div class="modal-header bg-brand text-right">
                                    <button type="button" class="close c-white" data-dismiss="modal">&times;</button>
                                </div>
                                <!--Body-->
                                <div class="modal-body bg-brand-lite c-dark dis-flex">
                                    <p class="text-responsive w-700 m-0">Are you sure you want to cancel this trade request?</p>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer bg-brand-lite justify-content-center">
                                    <a class="btn btn-md btn-outline-brand" href="{{ route('undo_trade_request', $user->reference) }}">Yes</a>
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
@endforeach