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
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('tradeline', auth()->user()->reference) }}">Tradeline</a></li>
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
        <div class="container-fluid main">
        	<section class="">
				<div class="row m-t-30 m-b-50">
					{{-- <div class="col-md-2 col-sm-3 col-xs-3 col-12 h-200"></div> --}}
					<div class="col-md-8 col-sm-8 col-xs-8 col-12 m-auto">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								@if($product->pictures != null)
	                                <div class="m-t-10 m-l-20">
	                                    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
	                                        <!--Indicators-->
	                                        <ol class="carousel-indicators">
	                                            @for ($i = 0; $i < count($product->pictures->images); $i++)
	                                                <li data-target="#myCarousel" data-slide-to="{{ $i }}" @if($i === 0 )class="active"@endif></li>
	                                            @endfor
	                                        </ol>
	                                        <!--/.Indicators-->

	                                        <!--Slides-->
	                                        <div class="carousel-inner" role="listbox" {{ $counter=0 }}>
	                                            @foreach ($product->pictures->images as $image)
	                                                <div class="carousel-item @if($counter == 0) active @endif">
	                                                    <img src="{{ route('image', [$image->image_reference, '']) }}" class="h-350 col-12" alt="First slide" {{ $counter++ }}>
	                                                </div>
	                                            @endforeach()
	                                        </div>
	                                        <!--/.Slides-->

	                                        <!--Controls-->
	                                        <a class="left carousel-control pos-abs l-15 t-40" href="#myCarousel" role="button" data-slide="prev">
	                                            <span class="fa fa-chevron-left f-24 c-dark" aria-hidden="true"></span>
	                                            <span class="sr-only">Previous</span>
	                                        </a>
	                                        <a class="right carousel-control pos-abs r-15 t-40" href="#myCarousel" role="button" data-slide="next">
	                                            <span class="fa fa-chevron-right c-dark f-24" aria-hidden="true"></span>
	                                            <span class="sr-only">Next</span>
	                                        </a>
	                                        <!--/.Controls-->
	                                    </div>
	                                    <!--/.Carousel Wrapper-->
	                                </div>
	                            @else
	                            	<div class="m-t-10 m-l-20">
										<img src="{{ asset('img/products/timeline-product-2.png') }}" class="h-350 col-12">
									</div>
                            	@endif
							</div>
							<div class="col-md-6">
								<div class="product_description m-t-180">
									<h4 class="c-gray h-30">{{ $product->name }}</h4>
									<div class="">
										@if(!$product->promo_price)
											<h3 class="c-brand dis-inline">&#8358;{{ $product->price }}</h3>
										@else
											<h3 class="c-brand dis-inline">&#8358;{{ $product->promo_price }}
												<small><del>&#8358;{{ $product->price }}</del></small>
											</h3>
										@endif
										<br>
										@if(auth()->user()->ownsShop($user->id))
											
											@if($product_of_the_week)
												@if($product->product_of_the_week != null)
													<p class="p-5 bg-brand c-white m-t-10">This is the product of the week</p>
												@else
													<form action="{{ route('product_of_the_week', $product->reference) }}" method="post">
													{{ csrf_field() }}
													<button class="btn btn-sm dis-inline bg-brand c-white" type="submit">Make product of the week</button>
													</form>
												@endif
											@endif
											{{-- <br> --}}
											@if($hottest && $product->hottest)
												<a href="{{ route('del_hottest', $product->reference) }}" class="btn btn-sm bg-brand c-white">Remove Hottest Deals</a>
											@else
												@if ($hottest && !$product->product_of_the_week)
													<a class="btn btn-sm bg-brand c-white" href="{{ route('add_hottest', $product->reference) }}">Add to Hottest Deals</a>
												@endif
											@endif
											@if(!$product->promo_price)
												<button class="btn btn-sm dis-inline bg-brand c-white" data-toggle="modal" data-target="#discount_modal">Add Discount</button>
											@else
												<button class="btn btn-sm dis-inline btn-outline-brand c-red" data-toggle="modal" data-target="#discount_delete_modal">Remove Discount</button>
											@endif
										@else
											@if($product->product_of_the_week != null)
												<p class="p-5 bg-brand c-white m-t-10">This is the product of the week</p>
											@else
												<br>
											@endif
											<a href="{{ route('addToCart', $product->reference) }}"><button class="btn btn-brand btn-sm">Add to Cart <i class="fa fa-shopping-cart"></i></button></a>
										@endif
										@if(!in_array($product->id, $admired))
											<button class="btn btn-brand btn-sm">Admire <small>({{ $product->admires->count() }})</small> <i class="fa fa-heart-o"></i></button>
										@else
											<button class="btn btn-brand btn-sm">Unadmire <small>({{ $product->admires->count() }})</small> <i class="fa fa-heart"></i></button>
										@endif
										<button class="btn btn-brand btn-sm" data-toggle="modal" data-target="#share-modal">hype <small>({{ $product->hypes->count() }})</small> <i class="fa fa-share-alt"></i></button>
										<a href="{{ route('view_inventory', $user->reference) }}"><button class="btn btn-brand btn-sm">Visit Store<i class="fa fa-shopping-cart"></i></button></a>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-8 bd-all m-auto p-10 m-b-30">
						<div class="review_box">
							<!-- nav tabs -->
							<ul class="nav nav-tabs tabs-2 m-auto" role="tablist">
								<li class="nav-item width-200 bg-brand c-white m-r-5 m-b-5">
									<a href="#firstpanel" id="tab-nav1" class="nav-link active tab-prop" data-toggle="tab" role="tab">Description</a>
								</li>
								<li class="nav-item width-200 m-r-5 m-b-5">
									<a href="#secondpanel" id="tab-nav2" class="nav-link tab-prop" data-toggle="tab" role="tab">Review</a>
								</li>
							</ul>
							<!--/ nav tabs -->
							<!-- tab panels -->
							<div class="tab-content card">
								<!-- first panel -->
								<div class="tab-pane fade in show active p-l-20" id="firstpanel" role="tabpanel">
									<br>
									<h3 class="h3-responsive c-brand">{{ $product->name }}</h3>
									<a href="{{ route('view_inventory', $user->reference) }}" class="c-brand"><p>{{ $merchant->store_name }}<small>{{ $user->full_name() }}</small></p></a>
									<p class="p-r-20 text-justified">{{ $product->description }}</p>
								</div>
								<!--/ first panel -->
								<!-- second panel -->
								<div class="tab-pane fade" id="secondpanel" role="tabpanel">
									<br>
									<div class="row">
										<div class="col-md-3 col-sm-3 col-xs-6 col-12">
											<h4 class="p-l-10">Average Rating</h4>
											<div class="star_rating m-b-20 m-t-20 p-l-30">
												<img src="{{ asset('img/group-3.png') }}">
											</div>
											<h6 class="p-l-20">No rating yet</h6>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12 col-12">
											<div class="progress_bars">
												<div class="row">
													<div class="col-md-2">
														<span>5 Stars</span>
													</div>
													<div class="col-md-7">
														<div class="progress h-18">
															<div class="progress">
																<div class="progress-bar bd-9 width-110" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<span>(0)</span>
													</div>
												</div>
												<div class="row m-t-10">
													<div class="col-md-2">
														<span>4 Stars</span>
													</div>
													<div class="col-md-7">
														<div class="progress h-18">
															<div class="progress">
																<div class="progress-bar bd-9 width-82" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<span>(0)</span>
													</div>
												</div>
												<div class="row m-t-10">
													<div class="col-md-2">
														<span>3 Stars</span>
													</div>
													<div class="col-md-7">
														<div class="progress h-18">
															<div class="progress">
																<div class="progress-bar bd-9 width-60" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<span>(0)</span>
													</div>
												</div>
												<div class="row m-t-10">
													<div class="col-md-2">
														<span>2 Stars</span>
													</div>
													<div class="col-md-7">
														<div class="progress h-18">
															<div class="progress">
																<div class="progress-bar bd-9 width-40" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<span>(0)</span>
													</div>
												</div>
												<div class="row m-t-10">
													<div class="col-md-2">
														<span>1 Stars</span>
													</div>
													<div class="col-md-7">
														<div class="progress h-18">
															<div class="progress">
																<div class="progress-bar bd-9 width-30" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<span>(0)</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6 col-12 bd-l-brandgreen">
											<h6>Have you used this product before?</h6>
											<div>
												<span class="fa fa-star-o c-gray p-r-5 f-16"></span>
												<span class="fa fa-star-o c-gray p-r-5 f-16"></span>
												<span class="fa fa-star-o c-gray p-r-5 f-16"></span>
												<span class="fa fa-star-o c-gray p-r-5 f-16"></span>
												<span class="fa fa-star-o c-gray f-16"></span>
											</div>
											<button class="btn btn-sm m-t-30 bg-brand c-white h-40">Write a review</button>
										</div>
									</div>
								</div>
								<!--/ second panel -->
							</div>
							<!-- / tab panels -->
							
						</div>
					</div>
				</div>
			</section>
        </div>
		
		                    <!-- Modal Share-->
            <div class="modal fade m-t-120" id="share-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header bg-brand">
                            <h6 class="modal-title w-100" id="myModalLabel">Share on your timeline</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="c-white">&times;</span>
                            </button>
                        </div>
                        <!--Body-->
                        <div class="modal-body bg-brand-lite">
                            <form action="{{ route('product_hype', $product->reference) }}" method="POST">
                                {{ csrf_field() }}
                                <div class="media m-b-20">
                                    <a class="pull-left" href="#">
                                        <img class="media-object p-r-10" src="{{ asset('img/acc-img-2.png') }}" alt="Image">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading w-700 m-b-5 f-12 c-brand">{{ auth()->user()->first_name }}</h6>
                                        <input type="hidden" class="m-b-5 f-12 c-dark" name ='title' value="{{ $product->name }} at &#8358 {{ $product->price }}">

                                        <p class="m-b-5 f-12 c-dark" name ='title'>{{ $product->name }} at &#8358 {{ $product->price }} 
                                            @if($merchant->store_name != null)
                                                @ {{ $merchant->store_name }}
                                            @endif
                                        </p>

                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-group">
                                            @if($product->pictures != null)
                                                @forelse($product->pictures->images as $image)
                                                    <div class="card m-5">
                                                        <img src="{{ route('image', [$image->image_reference, '']) }}" class="image-responsive col-md-12">
                                                    </div>
                                                @empty
                                                    <h3 class="h3-responsive c-gray">Product has no image</h3>
                                                @endforelse
                                            @else
                                                <h3 class="h3-responsive c-gray">Product has no image</h3>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn-md btn-flat c-gray" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-md btn-outline-brand">Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <!--/ Modal Share-->

            <!-- Modal discount-->
            <div class="modal fade m-t-180" id="discount_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header bg-brand">
                            <h6 class="modal-title w-100" id="myModalLabel">Add discount</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="c-white">&times;</span>
                            </button>
                        </div>
                        <!--Body-->
                        <div class="modal-body bg-brand-lite">
                        	<form method="post" action="{{ route('add_promo', $product->reference) }}">
                        	{{ csrf_field() }}
	                        	 <div class="media">
                                    <div class="media-body">
                                    	<label class="c-brand m-l-10">New Price</label>
                                        <input name="promo_price" type="number" class="md-textarea input-alternate p-10 border-box bg-white" placeholder="enter new discount price...">
                                    </div>
                                </div>
                        		<div class="modal-footer justify-content-center">
                                    <button type="button" class="btn-md btn-flat c-gray" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-md btn-outline-brand">Post</button>
                                </div>
                        	</form>
                        </div>
                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <!--/ Modal discount-->
            <!-- Modal discount-->
            <div class="modal fade m-t-180" id="discount_delete_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header bg-brand">
                            <h6 class="modal-title w-100" id="myModalLabel">Remove discount</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="c-white">&times;</span>
                            </button>
                        </div>
                        <!--Body-->
                         <div class="modal-body bg-brand-lite c-dark dis-flex">
                            <p class="text-responsive w-700 m-0">Are you sure you want to remove this promo?</p>
                        </div>
                        <!--footer-->
                        <div class="modal-body bg-brand-lite">
                        	<div class="modal-footer bg-brand-lite justify-content-center">
	                            <a class="btn btn-md btn-outline-brand" href="{{ route('remove_promo', $product->reference) }}">Yes</a>
	                            <button type="button" class="btn btn-md btn-outline-brand" data-dismiss="modal">No</button>
	                        </div>
                        </div>
                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <!--/ Modal discount-->
@endsection
