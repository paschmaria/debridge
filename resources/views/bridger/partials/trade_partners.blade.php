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
							@if($user->merchant_account != null && $user->merchant_account->store_name)
								<br><small>{{ $user->merchant_account->store_name }}</small>
							@endif
						</p></a>
						<p class="f-12 text-fluid">{{ $user->email }}</p>
					</div>
				</div>
                @if(auth()->user()->id != $user->id && !auth()->user()->checkRole())
    				@if(in_array($user->id, auth()->user()->trade_partners->pluck('id')->toArray()))
    					<button class="btn btn-sm f-12 waves-light waves-effect btn-outline-brand m-t-40 m-b-50" data-toggle="modal" data-target="#cancel-modal{{ $user->reference }}" id="trade-req{{ $user->reference }}">
    					cancel partnersip <i class="fa fa-times c-red"></i>
    					</button>
    				@else
    					@if(!in_array($user->id, auth()->user()->sent_trade_requests->pluck('id')->toArray()))
    						<a href="{{ route('send_trade_request', $user->reference) }}">
    						<button class="btn btn-sm f-12 waves-light waves-effect btn-outline-brand m-t-40 m-b-50 send-trade-request no-js" id="trade-req{{ $user->reference }}" data-reference="{{ $user->reference }}">Send Trade Request</button>

    					@else
    						<button class="btn btn-sm f-12 waves-light waves-effect btn-brand m-t-40 m-b-50" data-toggle="modal" data-target="#cancel-request-modal{{ $user->reference }}" id="trade-req{{ $user->reference }}">Cancel Trade Request</button>
    					@endif
    				
                    @endif
                @endif

				@include('bridger.partials.modals.cancel_trade_modal')

			</div>
		</div>
	</div>
@endforeach