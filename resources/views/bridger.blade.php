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
	            <h3 class="h3-responsive c-brand f-24 m-t-30 m-b-8">BRIDGER</h3>
	            <div class="h-58">
	            	<p class="text-fluid c-gray f-14 dis-inline-b">These are friends you follow</p>
	            	<button class="btn btn-md btn-sm pull-right f-17 m-b-10 bg-brand-lite btn-outline-brand"><a href="bridgerRequest.html" class="c-brand"><span class="fa fa-plus m-r-10"></span>Add Friends</a></button>
	            </div>
	        </div>
	        <!-- friends display  -->
	        <div class="m-t-40 m-b-140">
	        	<div class="row">
	        		<!-- first column of friends -->
	        		<div class="col-md-6 col-sm-6 col-xs-6 col-12">
	        			<!-- first friend -->
	        			<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3 col-sm-3 col-xs-6">
	        							<div class="profile-picture dis-inline">
				        					<img src="{{ asset('img/pphoto-2.jpeg') }}" class="p-10">
			        					</div>
	        						
	        					</div>
		        				<div class="col-md-4 col-sm-4 col-xs-4 col-12 p-t-10">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<p class="f-14 m-t-30 text-fluid">JHUD EJIKE</p>
										<p class="f-12 text-fluid">Business owner at Sony.</p>
									</div>
		        				</div>
		        				<div class="col-md-5 col-sm-5 col-xs-5">
		        					<button class="btn btn-sm f-14 waves-light waves-effect c-brand btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Following</button>
		        				</div>
	        				</div>
	        			</div>
	        			<!-- / first friend -->
	        			<!-- second friend -->
	        			<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3 col-sm-3 col-xs-6">
	        						<div class="profile-picture dis-inline">
			        					<img src="{{ asset('img/pphoto-4.jpg') }}"class="p-10">
			        				</div>
	        					</div>
		        				<div class="col-md-4 col-sm-4 p-t-10">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<p class="f-14 m-t-30 text-fluid">JHUD EJIKE</p>
										<p class="f-12 text-fluid">Business owner at Sony</p>
									</div>
		        				</div>
		        				<div class="col-md-5 col-sm-5">
		        					<button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Following</button>
		        				</div>
	        				</div>
	        			</div>
	        			<!-- / second friend-->
	        			<!-- third friend -->
	        			<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3 col-sm-3">
	        						<div class="profile-picture dis-inline">
			        					<img src="{{ asset('img/pphoto-301.jpeg') }}" class="p-10">
			        				</div>
	        					</div>
		        				<div class="col-md-4 col-sm-4 p-t-10">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<p class="f-14 m-t-30 text-fluid">JHUD EJIKE</p>
										<p class="f-12 text-fluid">Business owner at Sony.</p>
									</div>

		        				</div>
		        				<div class="col-md-5 col-sm-5">
		        					<button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Following</button>
		        				</div>
	        				</div>
	        			</div>
	        			<!-- / third friend -->
	        			<!--  4th friend -->
						<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3 col-sm-3">
	        						<div class="profile-picture dis-inline">
			        					<img src="{{ asset('img/pphoto-5.jpeg') }}" class="p-10">
			        				</div>
	        					</div>
		        				<div class="col-md-4 col-sm-4 p-t-10">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<p class="f-14">JHUD EJIKE</p>
										<p class="f-12">Business owner at Sony.</p>
									</div>
		        				</div>
		        				<div class="col-md-5 col-sm-5">
		        					<button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Following</button>
		        				</div>
	        				</div>
	        			</div>
	        			<!-- / 4th friend -->
	        			<!-- 5th friend -->
	        			<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3 col-sm-3">
	        						<div class="profile-picture dis-inline">
			        					<img src="{{ asset('img/pphoto-7.jpeg') }}"class="p-10">
			        				</div>
	        					</div>
		        				<div class="col-md-4 col-sm-4 p-t-10">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<p class="f-14 text-fluid">JHUD EJIKE</p>
										<p class="f-12 text-fluid ">Business owner at Sony</p>
									</div>
		        				</div>
		        				<div class="col-md-5 col-sm-5">
		        					<button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Following</button>
		        				</div>
	        				</div>
	        			</div>
	        			<!-- / 5th friend -->
	        			<!-- 6th friend -->
	        			<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3">
	        						<div class="profile-picture dis-inline">
			        					<img src="{{ asset('img/p-photo-6.jpeg') }}" class="p-10">
			        				</div>
	        					</div>
		        				<div class="col-md-4 col-sm-4 p-t-10">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<p class="f-14 text-fluid">JHUD EJIKE</p>
										<p class="f-12 text-fluid">Business owner at Sony</p>
									</div>
		        				</div>
		        				<div class="col-md-5 col-sm-5">
		        					<button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Following</button>
		        				</div>
	        				</div>
	        			</div>
	        			<!-- / 6th friend -->
	        			<!-- 7th friend -->
	        			<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3 col-sm-3">
	        						<div class="profile-picture dis-inline">
			        					<img src="{{ asset('img/pphoto-8.jpeg') }}" class="p-10">
			        				</div>
	        					</div>
		        				<div class="col-md-4 col-sm-4 p-t-10">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<p class="f-14 text-fluid">JHUD EJIKE</p>
										<p class="f-12 text-fluid">Business owner at Sony</p>
									</div>
		        				</div>
		        				<div class="col-md-5 col-sm-5">
		        					<button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Following</button>
		        				</div>
	        				</div>
	        			</div>
	        			<!-- / 7th friend -->
	        		</div>
	        		<!-- / first column of friends -->
	        		<!-- second column of friends -->
	        		<div class="col-md-6 col-sm-6 col-xs-12 col-12">
	        			<!-- first friend -->
	        			<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3 col-xs-3">
	        						<div class="profile-picture dis-inline">
			        					<img src="{{ asset('img/pphoto-10.jpeg') }}" class="p-10">
			        				</div>
	        					</div>
		        				<div class="col-md-4 col-sm-4 col-xs-8  p-t-35">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<p class="f-14 text-fluid">JHUD EJIKE</p>
										<p class="f-12 text-fluid">Business owner at Sony</p>
									</div>
		        				</div>
		        				<div class="col-md-5 col-sm-5">
		        					<button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Following</button>
		        				</div>
	        				</div>
	        			</div>
	        			<!-- / first friend -->
	        			<!-- second friend -->
	        			<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3 col-sm-3">
	        						<div class="profile-picture dis-inline">
			        					<img src="{{ asset('img/pphoto-9.jpeg') }}" class="p-10">
			        				</div>
	        					</div>
		        				<div class="col-md-4 col-sm-4 p-t-35">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<p class="f-14 text-fluid">JHUD EJIKE</p>
										<p class="f-12 text-fluid">Business owner at Sony</p>
									</div>
		        				</div>
		        				<div class="col-md-5 col-sm-5">
		        					<button class="btn btn-sm f-14 c-brand  btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Following</button>
		        				</div>
	        				</div>
	        			</div>
	        			<!-- / second friend-->
	        			<!-- third friend -->
	        			<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3 col-sm-3">
	        						<div class="profile-picture dis-inline">
			        					<img src="{{ asset('img/pphoto-8.jpeg') }}" class="p-10">
			        				</div>
	        					</div>
		        				<div class="col-md-4 p-t-35">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<p class="f-14">JHUD EJIKE</p>
										<p class="f-12">Business owner at Sony</p>
									</div>
		        				</div>
		        				<div class="col-md-5 col-sm-5">
		        					<button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Following</button>
	        					</div>
	        				</div>
	        			</div>
	        			<!-- / third friend -->
	        			<!--  4th friend -->
						<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3 col-sm-3">
	        						<div class="profile-picture dis-inline">
			        					<img src="{{ asset('img/p-photo-6.jpeg') }}" class="p-10">
			        				</div>
	        					</div>
		        				<div class="col-md-4 col-sm-4 p-t-35">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<p class="f-14 text-fluid">JHUD EJIKE</p>
										<p class="f-12 text-fluid">Business owner Sony</p>
									</div>
		        				</div>
		        				<div class="col-md-5 col-sm-5">
		        					<button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Following</button>
		        				</div>
	        				</div>
	        			</div>
	        			<!-- / 4th friend -->
	        			<!-- 5th friend -->
	        			<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3 col-sm-3">
	        						<div class="profile-picture dis-inline">
			        					<img src="{{ asset('img/pphoto-7.jpeg') }}" class="p-10">
			        				</div>
	        					</div>
		        				<div class="col-md-4 col-sm-4 p-t-35">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<p class="f-14">JHUD EJIKE</p>
										<p class="f-12">Business Owner at Sony</p>
									</div>
		        				</div>
		        				<div class="col-md-5 col-sm-5">
		        					<button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Following</button>
		        				</div>
	        				</div>
	        			</div>
	        			<!-- / 5th friend -->
	        			<!-- 6th friend -->
	        			<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3">
	        						<div class="profile-picture dis-inline">
			        					<img src="{{ asset('img/pphoto-10.jpeg') }}" class="p-10">
			        				</div>
	        					</div>
		        				<div class="col-md-4 p-t-35">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<p class="f-14">JHUD EJIKE</p>
										<p class="f-12">Business owner at Sony</p>
									</div>
		        				</div>
		        				<div class="col-md-5">
		        					<button class="btn btn-sm f-14 c-brand btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Following</button>
		        				</div>
	        				</div>
	        			</div>
	        			<!-- / 6th friend -->
	        			<!-- 7th friend -->
	        			<div class="h-114 width-563 m-b-30">
	        				<div class="row">
	        					<div class="col-md-3">
	        						<div class="profile-picture dis-inline">
			        					<img src="{{ asset('img/pphoto-301.jpeg') }}" class="p-10">
			        				</div>
	        					</div>
		        				<div class="col-md-4 p-t-35">
		        					<div class="profile-description dis-inline width-200 h-114 c-gray-medium">
										<p class="f-14">JHUD EJIKE</p>
										<p class="f-12">Business owner at Sony</p>
									</div>
		        				</div>
		        				<div class="col-md-5">
		        					<button class="btn btn-sm  f-14 c-brand btn-outline-brand m-t-40 m-b-50"><span class="fa fa-check">&nbsp; &nbsp;</span>Following</button>
		        				</div>
	        				</div>
	        			</div>
	        			<!-- / 7th friend -->
	        		</div>
	        		<!-- / second column of friends -->
	        	</div>


	        </div>
	        <!-- / friends display -->
	        <!-- pagination begins here -->
	        <div class="pagination-wrapper width-300 h-30 m-auto m-b-20">
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
	        </div>
	        <!-- pagination ends here -->
    	</div>
    </section>
    <!-- main section ends here -->
@endsection('content')
