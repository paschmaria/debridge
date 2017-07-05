@extends('layouts.master')
@section('content')
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
                            <li class="nav-item"><a class="nav-link hover-underline" href="bridger.html">FRIENDS</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="tradeline.html">TRADELINE</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="#">SHOPLINE</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="#">BUSINESS INVITATION</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="#">MODELS</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="#">MARKET VALUE</a></li> 
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!-- navigations/links ends here -->
        </header>
        <!-- header ends here -->
        <div class="container-fluid">
        	<section class="main">
				<div class="row m-t-180 m-b-140">
					<div class="col-md-3 col-sm-3 col-xs-3 col-12 h-200"></div>
					<div class="col-md-8 col-sm-6 col-xs-6 col-12">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="product_display h-350 width-310 bg-white pos-rel">
									<img src="{{ asset('img/products/timeline-product-2.png') }}">
								</div>
								<div class="price_tag width-300 h-70 bg-white pos-abs opacity-70 b-15">
									<p class="text-center w-500">PLAYSTATION WEEK</p>
									<hr>
									<p class="c-red text-center w-700">FROM &#8358;13,500</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="product_description">
									<h4 class="c-gray h-30">{{ $product->name }}</h4>
									<div class="h-70 c-dark">
										<p>By Casio</p>
										<p>Be the first to rate this product</p>
									</div>
									
									<div class="">
										<h3 class="c-brand dis-inline">&#8358;{{ $product->price }}</h3>
										@if(auth()->user()->ownsShop($user->id))
											
												@if(empty($product_of_the_week) || ($diff_in_days == true))
													<form action="{{ route('product_of_the_week', $product->id) }}" method="post">
													{{ csrf_field() }}
													<button class="btn btn-sm dis-inline bg-brand c-white" type="submit">Make product of the week</button>
													</form>

													@if($product->hottest_product_id != null)
														<a href="{{ route('del_hottest', $product->id) }}" class="btn btn-sm bg-brand c-white">Remove Hottest Deals</a>
													@else
														@if ($hottest)
															<a class="btn btn-sm bg-brand c-white" href="{{ route('add_hottest', $product->id) }}">Add to Hottest Deals</a>
														@endif
													@endif

												@endif
											<button class="btn btn-sm dis-inline bg-brand c-white">Add Discount</button>
											
										@endif
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-8 bd-all m-auto">
						<div class="review_box m-b-30">
							<!-- nav tabs -->
							<ul class="nav nav-tabs tabs-3 width-700 m-auto" role="tablist">
								<li class="nav-item width-200 bg-brand c-white m-r-5 m-b-5">
									<a href="#firstpanel" id="tab-nav1" class="nav-link active tab-prop" data-toggle="tab" role="tab">Description</a>
								</li>
								<li class="nav-item width-200 m-r-5 m-b-5">
									<a href="#secondpanel" id="tab-nav2" class="nav-link tab-prop" data-toggle="tab" role="tab">Review</a>
								</li>
								<li class="nav-item width-200 m-b-5">
									<a href="#thirdpanel" class="nav-link tab-prop" data-toggle="tab" role="tab">Return Policy</a>
								</li>
							</ul>
							<!--/ nav tabs -->
							<!-- tab panels -->
							<div class="tab-content card">
								<!-- first panel -->
								<div class="tab-pane fade in show active p-l-20" id="firstpanel" role="tabpanel">
									<br>
									<p>{{ $product->description }}</p>
									<!-- <h3 class="m-t-30 m-b-30">KEY FEATURES</h3>
									<ul class="m-b-30 list-style-none">
										<li>Timeless Appeal</li>
										<li>Unbeatable distinct look</li>
										<li>Classy</li>
										<li>Unique</li>
										<li>Premium Quality</li>
									</ul>
										 -->
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
								<!-- third panel -->
								<div class="tab-pane fade" id="thirdpanel" role="tabpanel">
									<br>
									<h1 class="text-center h1-responsive">This is blank</h1>
								</div>
								<!--/ third panel -->
							</div>
							<!-- / tab panels -->
							
						</div>
					</div>
				</div>
			</section>
        </div>
		
@endsection('content')
