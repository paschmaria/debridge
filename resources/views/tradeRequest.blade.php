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
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="bridger.html">Friends</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="tradeline.html">Tradeline</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">Shopline</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">Business Invitation</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">Models</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">Market Value</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!-- navigations/links ends here -->
        </header>
    <!-- header ends here -->
    <!--main section begins here-->
    <section class="main">
    	<div class="container">
    		<div id="navbarNav1 m-t-40">
	            <h3 class="h3-responsive c-brand f-24 m-t-30 m-b-8">TRADE REQUEST</h3>
	            <div class="h-58">
	            	<p class="c-gray f-14 dis-inline-b">These are merchants you follow</p>
	            	<button class="pull-right f-17 m-b-10 h-40 bg-brand-lite btn-outline-brand c-white"><a href="traderequester.html" class="c-brand"><span class="fa fa-plus m-r-10"></span>Follow Merchants</a></button>
	            </div>
	        </div>
	        <!-- friends display  -->
	        <div class="m-t-40 m-b-140">
	        	<div class="row">
	        	@forelse($merchants as $merchant)

	        		<!-- first column of friends -->
	        		<div class="col-md-6">
	        			<!-- first friend -->
	        			<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3">
	        						<div class="profile-picture dis-inline">
			        					<img src="{{ asset('img/pphoto-10.jpeg') }}" class="p-10">
			        				</div>
	        					</div>
		        				<div class="col-md-5 p-t-10">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<a style = color:black; class="f-14" href="{{ route('timeline', $merchant->reference) }}">{{ $merchant->full_name() }}</a>
										<p class="f-12">42, Montgomerry road, Yaba.</p>
										<p class="f-12">Dealers in all kinds of game console</p>
									</div>
		        				</div>
		        				<div class="col-md-4">
		        				@if(in_array($merchant->id, $fr))
		        				<form action="{{ route('undo_trade_request', $merchant->reference) }}" method="post">
		        					{{ csrf_field() }}
		        					<button type="submit" class="f-14 width-130 c-brand h-30 btn-outline-brand m-t-40 m-b-50"><span>&nbsp; &nbsp; Cancel</span></button>
		        					
		        				</form>	
		        				@else
		        				<form action="{{ route('send_trade_request', $merchant->reference) }}" method="post">
		        					{{ csrf_field() }}
		        					<button type="submit" class="f-14 width-130 c-brand h-30 btn-outline-brand m-t-40 m-b-50"><span>&nbsp; &nbsp; Send Request</span></button>
		        					
		        				</form>
		        				@endif
		        				</div>
	        				</div>
	        			</div>
	        			<!-- / first friend -->
	        			
	        		</div>
	        		<!-- / second column of friends -->
	        	@endforeach
	        	</div>


	        </div>
	        <!-- / friends display -->
	        <!-- pagination begins here -->
	        <div class="pagination-wrapper width-300 h-30 m-auto m-b-20">
	        	<nav class="bg-brand-lite text-center">
	        		<ul class="pagination bg-brand-lite f-14 c-gray">
	        			<li class="page-item">
	        				<a href="#" class="page-link" aria-label="Previous">
	        					<span aria-hidden="true">&lt;</span>
	        					<span class="sr-only">Prev</span>
	        				</a>
	        			</li>
	        			<li class="page-item">
	        				<a href="#" class="page-link">1</a>
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
	        					<span class="c-brand">Next</span>
	        					<span aria-hidden="true">&gt;</span>
	        				</a>
	        			</li>
	        		</ul>
	        	</nav>
	        </div>
	        <!-- pagination ends here -->
    	</div>
    </section>
    <!-- main section ends here -->
@endsection('content')
