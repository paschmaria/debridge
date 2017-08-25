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
                    @if(auth()->check())
                    	@if(auth()->user()->checkRole())
                    		<li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('view_friends', auth()->user()->reference) }}">Friends</a></li>
                    	@else
                    		<li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('view_partners', auth()->user()->reference) }}">Trade Partners</a></li>
                    	@endif
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('following', auth()->user()->reference) }}">Following</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('followers', auth()->user()->reference) }}">Followers</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('timeline', auth()->user()->reference) }}">Tradeline</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('community', auth()->user()->reference) }}">Trade Community</a></li>
                    @else
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Following</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Followers</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Tradeline</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Trade Community</a></li>
                    @endif
                    <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('bridge_shops') }}">Bridger Shops</a></li>
                    <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('araha_market') }}">Araha Market</a></li>
                    <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="{{ route('exhibition') }}">Exhibition Stand</a></li>
                    <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="{{ route('hiring') }}">Hiring</a></li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    <!-- navigations/links ends here -->
@endsection

@section('content')
    <!--main section begins here-->
    <section class="main">
    	<div class="container">
    		<div id="navbarNav1 m-t-40">
	            <h3 class="h3-responsive c-brand f-24 m-t-30 m-b-8">BRIDGER</h3>
	            <div class="">
	            	<button class="btn btn-md btn-sm pull-right f-17 m-b-10 bg-brand-lite btn-outline-brand"><a href="{{url('/users/follow/more')}}" class="c-brand"><span class="fa fa-plus m-r-10"></span>Follow More</a></button>
	            </div><br>
	        </div>
	        <!-- friends display  -->
	        <div class="m-t-40 m-b-50">
	        	<div class="row" id="following_list">
	        		<!-- first column of friends -->
	        		<div class="p-10 m-b-10 bg-brand col-sm-12"> {{ ucwords(strtolower($user->full_name())) }} - following <span class="badge bg-white c-brand follow_count" >{{ $following_count }}</span></div>
	        		<div class="m-b-20 col-sm-12">
		        		<nav class="navbar user-type-navbar no-shadow">
	                        <ul class="nav user-type-nav text-center">
	                            <li class="nav-item"><a class="nav-link hover-underline @if(strtolower($filter == ''))active @endif" href="{{ route('following', $user->reference) }}">ALL</a></li>
	                            <li class="nav-item"><a class="nav-link hover-underline @if($filter == 'merchant')active @endif" href="{{ route('following', [$user->reference, 'merchant']) }}">MERCHANT</a></li>
	                            <li class="nav-item"><a class="nav-link hover-underline @if($filter == 'user')active @endif" href="{{ route('following', [$user->reference, 'user']) }}">INDIVIDUALS</a></li>
	                        </ul>
	                    </nav>
		        	</div>

	        		@include('users.partials.following_bridger')
	        			
        			@if($following->count() <= 0)
        				<div class="p-10 col-sm-12 c-brand"><p>{{ ucwords(strtolower($user->full_name())) }} is currently following no one.</p></div>
        			@endif
	        		</div>
	        		<!-- / first column of friends -->
	        	</div>


	        </div>
	        <!-- / friends display -->
	        <!-- pagination begins here -->
	        {{-- <div class="pagination-wrapper width-300 h-30 m-auto m-b-20">
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
	        </div> --}}
	        <!-- pagination ends here -->
    </section>
    <!-- main section ends here -->
@endsection

@section('scripts')
	<script>
        $(document).ready(function () {
            var page = 2;
            $(window).scroll(function(){
               	var scroll_height = $(window).scrollTop() + $(window).height();
                var doc_height = $(document).height() - 10;
                if ( scroll_height >= doc_height ) {
                   $.ajax({
                        url: document.URL,
                        type:'GET',
                        data:{'page': page},
                        success:function(data){
                            $('#following_list').append(data) ;
                        },
                        error: function (data) {
                        }
                    });
                    page += 1;
                }
            });
        }); 
    </script>
@endsection