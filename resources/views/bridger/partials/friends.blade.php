@foreach($users as $user)
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
						</p></a>
						<p class="f-12 text-fluid">{{ $user->email }}</p>
					</div>
				</div>
				@if(auth()->user()->id != $user->id  && auth()->user()->checkRole())
                    @if(in_array($user->id, auth()->user()->friends->pluck('id')->toArray()))
                        <button class="btn btn-sm f-12 waves-light waves-effect btn-brand m-t-40 m-b-50" data-toggle="modal" data-target="#cancel-modal{{ $user->reference }}" id="friend-req{{ $user->reference }}">
                        cancel friendship <i class="fa fa-times c-red"></i>
                        </button>
                    @else
                        @if(!in_array($user->id, auth()->user()->sent_requests->pluck('id')->toArray()))
                            <a href="{{ route('send_friend_request', $user->reference) }}" class="no-js">
                            <button class="btn btn-sm f-12 waves-light waves-effect btn-outline-brand m-t-40 m-b-50 send-friend-request" data-reference="{{ $user->reference }}" id="friend-req{{ $user->reference }}">Send Friend Request</button>
                        @else
                            <button class="btn btn-sm f-12 waves-light waves-effect btn-brand m-t-40 m-b-50" data-toggle="modal" data-target="#cancel-request-modal{{ $user->reference }}" id="friend-req{{ $user->reference }}">Cancel Friend Request</button>
                        @endif
                    
                    @endif
				@endif
				<!-- Modal cancel_partnership -->
                    <div class="modal fade m-t-180" id="cancel-modal{{ $user->reference }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Header-->
                                <div class="modal-header bg-brand text-right">
                                    <button type="button" class="close c-white" data-dismiss="modal">&times;</button>
                                </div>
                                <!--Body-->
                                <div class="modal-body bg-brand-lite c-dark dis-flex">
                                    <p class="text-responsive w-700 m-0">Are you sure you want to cancel this friendship?</p>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer bg-brand-lite justify-content-center">
                                    <a class="btn btn-md btn-outline-brand cancel-friendship" href="{{ route('unfriend', $user->reference) }}" data-reference="{{ $user->reference }}">Yes</a>
                                    <button type="button" class="btn btn-md btn-outline-brand" data-dismiss="modal">No</button>
                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                <!-- Modal -->

                <!-- Modal cancel_request -->
                    <div class="modal fade m-t-180" id="cancel-request-modal{{ $user->reference }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Header-->
                                <div class="modal-header bg-brand text-right">
                                    <button type="button" class="close c-white" data-dismiss="modal">&times;</button>
                                </div>
                                <!--Body-->
                                <div class="modal-body bg-brand-lite c-dark dis-flex">
                                    <p class="text-responsive w-700 m-0">Are you sure you want to cancel this friend request?</p>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer bg-brand-lite justify-content-center">
                                    <a class="btn btn-md btn-outline-brand cancel-friend-request" href="{{ route('cancel_friend_request', $user->reference) }}" data-reference="{{ $user->reference }}">Yes</a>
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