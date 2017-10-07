@extends('layouts.master1')
@section('header')
@endsection
    @section('content')
    <section class="container" >
        
        <div class="row">
            <div class="col-md-2 leftNav hidden-sm hidden-xs visible-md visible-lg">
                <div class="biz-leftside-bar ">
                    <ul >                        
                        <li><a href="" style="padding: 5px 10px 5px 10px; margin-left: -10px; border-radius: 3px solid white; background-color: #28b1a1; border-radius: 3px;">The Nigerian Market</a></li>
                        <li><a href="">Categories</a></li>
                        <li><a href="">Tradline</a></li>
                        <li><a href="">Bridge Code</a></li>
                        <li><a href="">Bridgers</a></li>
                        
                        <li><a href="" style="margin-left: -15px; color: #28b1a1; font-weight: bolder;">MARKETS</a></li>
                        <li><a href="">State Market</a></li>
                        <li><a href="">Black Market</a></li>
                        <li><a href="">Araha Market</a></li>
                        <li><a href="">Hiring Arena</a></li>
                        <li><a href="">Bridge Shopline</a></li>
                        <li><a href="" style="margin-left: -15px; color: #28b1a1; font-weight: bolder;">FAVOURITES</a></li>
                        <li><a href="">Exhibition Stand</a></li>
                        <li><a href="">Invest Hub</a></li>
                        <li><a href="">Messages</a></li>
                        <li><a href="">Photos</a></li>
                        <li><a href="">Followers</a></li>
                        <li><a href="">Following</a></li>
                        <li><a href="">Create Groups</a></li>
                        <li><a href="">Windowshop</a></li>
                        <li><a href="">B-analytor</a></li>
                        <li><a href="" style="margin-left: -15px; color:white; font-weight: bolder;">UNION</a></li>
                        <li><a href="">Create Union</a></li>
                        <li><a href="">Trade Commnunity</a></li>
                
                    </ul>
                </div>
            </div>
            
            <div class="col-md-8 col-xs-12 content">
               <!-- Content Area -->
               <div class="row m-t-30">
                    <div class="row">
                            <div class=" hidden-xs col-md-1">
                                    
                            </div>
                        <div class="col-xs-1 hidden-xs">
                                
                        </div>
                        <div  class="col-xs-8">
                               <h2> SOLO IYKE STITCHES </h2>
                              
                        </div>
                        <div class="hidden-xs col-md-3">
                                
                        </div>
                    </div>
                    <center>
                        <div class="row">
                            <div class="col-xs-3 hidden-xs col-md-1">
                                    
                            </div>
                            <div  class="col-xs-12 col-md-6">
                                
                                <p >RS123456</p>
                                
                                <p >Lekki, Lagos (Trade Community) </p>

                            </div>
                            <div class="col-xs-3 hidden-xs col-md-3">
                                    
                            </div>
                        </div>
                    </center>
                    <div class="row">
                      
                            <div class="col-xs-3 col-md-1 hidden-xs">
                                
                            </div>
                            <div class="col-xs-3 col-md-2">
                                    <a href="#">Inventory</a>
                            </div>
                            <div class="col-xs-3 col-md-2">
                                    <a href="#">Promo</a>                            
                            </div>
                            <div class="col-xs-5 col-md-4">
                                    Hottest Deal
                            </div>  
                            <div class="col-xs-1 col-md-2">
                            
                            </div>                      
                    </div>    
                    
                    <div class="row"  >
                        <div class="col-md-8">
                            <div class="">
                                <img src="images/resa.jpg" class="img img-responsive"  width="500" height="350" style="border: 1px solid #28b1a1">                                    
                            </div>
                            <div id="naijaMarket"  style="color: #28b1a1; ">
                                <h3 style="text-align:center; font-size:20 ">THE NIGERIAN MARKET</h3>
                            </div>
                            <div id="text2">
                              <p style="text-align:right; font-size:16px; font-style:italic ">  ...The Largest Black Market</p>
                            </div> 
                            <div>
                                    <div class="panel panel-success">
                                            <div class="panel-heading">
                                                    <h2 class="panel-title"> Featured Product </h2>
                                                </div>
                                                <div class="panel-body">
                                                    <center>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p><img src="images/august.jpg" width="100" height="120" /> </p>
                                                                <p>John Stores</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <a href="#" role="button" class="btn btn-success" > Follow Store </a>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                
                                    </div>  
                                <div class="row">
                                    <div class="col-md-4 col-xs-4">
                                        Followers
                                    </div> 
                                    <div class="col-md-4 col-xs-4">
                                        Following
                                    </div> 
                                    <div class="col-md-4 col-xs-4">

                                    </div>
                                </div>
                                <div> <!-- POst message section and Comments -->
                                    <div class="m-t-10 p-5"><p>{{ $post->content }}</p></div>
                                    @if(auth()->check())
                                        <div class="m-b-20">
                                            <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 col-sm-12" role="group" aria-label="Ad Action Buttons">
                                                @if(!in_array($post->id, $admired))
                                                    <a href="{{ route('admire', $post->reference) }}"><button type="button" class="btn bg-white m-l-10 f-14 m-r-10 f-14 mf-9 mm-l-2 mm-r-0 mp-l-5 mp-r-5 mwidth-75 width-200">
                                                        <span class="admire">Admire<small class="c-gray f-10">({{ $post->admires->count() }})</small>&nbsp;</span><span class=""><i class="fa fa-heart-o mf-9rem"></i></span>
                                                    </button></a>
                                                @else
                                                    <a href="{{ route('unadmire', $post->reference) }}"><button type="button" class="btn bg-white m-l-3 f-14 m-r-5 f-14 width-200">
                                                        <span class="unadmire">Unadmire<small class="c-gray f-10">({{ $post->admires->count() }})</small>&nbsp;</span><span class=""><i class="fa fa-heart"></i></span>
                                                    </button></a>
                                                @endif
                                                <a href=""><button type="button" class="btn bg-white m-l-10 f-14 m-r-10 f-14 mf-9 mm-l-2 mm-r-0 mp-l-5 mp-r-5 width-200 mwidth-90 ">
                                                    <span class="">Comments<small class="c-gray f-10">({{ $post->comments->count() }})</small>&nbsp;</span><span class=""><i class="fa fa-comment mf-9rem"></i></span>
                                                </button></a>
                                                @if (!in_array($post->id, $hyped))
                                                    <a href="{{ route('hype', $post->reference) }}"><button type="button" class="btn bg-white m-l-10 f-14 m-r-10 f-14 mf-9 mm-l-2 mm-r-0 mp-l-5 mp-r-5 mwidth-67  width-150">
                                                        <span class="">Hype&nbsp;</span><span class=""><i class="fa fa-share-alt mf-9rem"></i></span>
                                                    </button></a>
                                                @else
                                                    <button type="button" class="btn m-l-5 f-14 width-150">
                                                        <span class="">Hyped&nbsp;</span><span class=""><i class="fa fa-share-alt"></i></span>
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- comment section-->
                                        <div class="media m-b-15">
                                            <a class="pull-left" href="#">
                                                @if (auth()->user()->profile_picture == null)
                                                    <img src="{{ asset('img/icons/profile.png') }}" class="card media-object img-responsive h-50 width-50 m-r-10 p-5" alt="">
                                                @else
                                                    <img src="{{ route('image', [auth()->user()->profile_picture->image_reference, '']) }}" class="card media-object img-responsive h-50 width-50 m-r-10" alt="">
                                                @endif
                                            </a>
                                            <div class="media-body">
                                                <form method="post" action="{{ route('create_comment', $post->reference) }}">
                                                    {{ csrf_field() }}
                                                    <textarea name="content" id="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Press enter to send..."></textarea>
                                                    <button type="submit" class="btn btn-brand btn-sm pull-right">comment</button>
                                                </form>
                                            </div>
                                        </div>
                                    @else
                                        <div class="m-b-20">
                                            <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 col-sm-12" role="group" aria-label="Ad Action Buttons">
                                                <button type="button" class="btn bg-white m-l-5 f-14 m-r-3 f-14 mf-9 mm-l-2 mm-r-0 mp-l-9 mp-r-9 width-200 mw-s" data-toggle="modal" data-target="#basicExample" >
                                                    <span class="">Admire<small class="c-gray f-10">({{ $post->admires->count() }})</small>&nbsp;</span><span class=""><i class="fa fa-heart-o mf-9rem"></i></span>
                                                </button>
                                                
                                                <button type="button" class="btn bg-white m-l-10 f-14 m-r-10 f-14 mf-9 mm-l-2 mm-r-0 mp-l-5 mp-r-5 width-200 mw-s mwidth-250" data-toggle="modal" data-target="#basicExample">
                                                    <span class="">Comments<small class="c-gray f-10">({{ $post->comments->count() }})</small>&nbsp;</span><span class=""><i class="fa fa-comment mf-9rem"></i></span>
                                                </button>
                                                <button type="button" class="btn bg-white m-l-5 f-14 mf-9 mm-l-2 mm-r-0 mp-l-9 mp-r-9 width-150 mw-s" data-toggle="modal" data-target="#basicExample">
                                                    <span class="">Hype&nbsp;</span><span class=""><i class="fa fa-share-alt mf-9rem"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                    @forelse($post->comments->sortByDesc('created_at')->slice(0,5) as $comment)
                                        <div class="media m-b-20">
                                            <div class="pull-left p-r-10">
                                                <a href="{{ route('view_profile', $comment->user->reference) }}">
                                                    @if ($comment->user->image_id == null)
                                                        <img src="{{ asset('img/icons/profile.png') }}" class="card media-object img-responsive h-50 width-50 m-r-10 p-5" alt="">
        
                                                    @else
                                                        <img src="{{ route('image', [$comment->user->profile_picture->image_reference, '']) }}" class="card media-object img-responsive h-50 width-50 m-r-10" alt="">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading w-700 m-b-5 f-12 c-brand">
                                                    <a class="c-brand" href="{{ route('view_profile', $comment->user->reference) }}">
                                                        {{ $comment->user->full_name() }}
                                                    </a>
                                                    <span class="pull-right c-gray dis-inline-b p-l-10 p-r-10">{{ $comment->updated_at->diffForHumans() }} &nbsp 
                                                        @if(Auth::id() == $comment->user_id)
                                                            <a href="{{ route('delete_comment', $comment->id) }}"><i class="fa fa-trash c-red"></i></a>
                                                        @endif
                                                    </span>
                                                </h6>
                                                <p m-b- f-12>{{ $comment->content }}</p>
                                                {{-- <ul class="m-b-0 f-12">
                                                    <li class="c-brand dis-inline-b p-r-10"><a href="#"><span><i class="fa fa-heart-o"></i></span> Like</a></li>
                                                    <li class="c-brand dis-inline-b p-l-10 p-r-10"><a href="#">Reply</a></li>
                                                </ul>
                                                @if(auth()->check())
                                                    <div class="media m-t-5">
                                                        <div class="pull-left p-r-10">
                                                            @if (auth()->user()->profile_picture == null)
                                                                <img src="{{ asset('img/icons/profile.png') }}" class="media-object p-r-10" alt="">
                                                            @else
                                                                <img src="{{ route('image', [auth()->user()->profile_picture->image_reference, '']) }}" class="card media-object img-responsive h-50 width-50 m-r-10" alt="">
                                                            @endif
                                                        </div>
                                                        <div class="media-body">
                                                            <form method="post" action="{{ route('create_comment', $post->reference) }}">
                                                                {{ csrf_field() }}
                                                                <textarea name="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Write a reply..."></textarea>
                                                            </form>
                                                        </div>
                                                    </div> 
                                                @endif --}}
                                            </div>
                                        </div>
                                    @empty
                                        {{-- empty expr --}}
                                    @endforelse  
                                    @if($post->comments->count() > 5)
                                        <a href="" class="pull-right c-brand"><p class="pull-right c-brand">view all ({{ $post->comments->count() }}) comments</p></a>
                                    @endif
                                    <!--/. comment section-->
                                </div>
                            @empty
                                {{-- empty expr --}}
                            @endforelse
        
                            <center>
                                                 <img src="{{asset('img/new_loader.gif')}}" id="post_loader" style="position: absolute; display: none;" alt="loading...">
                            </center> 
        

                                </div>
                            </div>                                                            
                        
                        

                        <div class="col-md-4">
                           <div  class=" hidden-xs hidden-sm">
                                
                                <div class="panel panel-success">
                                        <div class="panel-heading">
                                                <h2 class="panel-title"> Stores You May Know</h2>
                                            </div>
                                            <div class="panel-body">
                                                    <img src="images/1.jpg"  width="100" height="100" />
                                                    <p>Ada sells her women's slippers for #800.</p>
                                            </div>
                                           
                                </div>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h2 class="panel-title"> Trade Request
                                        </h2>
                                    </div>
                                    <div class="panel-body">
                                            <img src="images/1.jpg"  width="100" height="100" />
                                            <p>Ada sells her women's slippers for #800.</p>
                                    </div>
                                    
                            </div>
                           </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>                        
            <div class="col-md-2  reletedContent hidden-xs hidden-sm visible-md visible-lg " style="margin-top:70px; text-align:center">
                <div class="row">                    
                    <div class="rightbox ">
                            <div class="panel panel-success">
                                    <div class="panel-heading">
                                            <h2 class="panel-title"> Product of the Week</h2>
                                        </div>
                                        <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p><img src="images/august.jpg" width="80" height="80" /> </p>
                                                        <p>John Stores</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="#" role="button" class="btn btn-success" > Follow Store </a>
                                                    </div>
                                                </div>
                                        </div>
                                        
                            </div>

                            <div class="panel panel-success">
                                    <div class="panel-heading">
                                            <h2 class="panel-title"> Suggested Trade Community
                                                </h2>
                                        </div>
                                        <div class="panel-body">
                                                <div class="row">
                                                        <div class="col-md-12">
                                                            <p><img src="images/august.jpg" width="40" height="40" /> </p>
                                                            <p>Machine</p>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-12">
                                                            <button class="btn btn-success" /> View All </button>
                                                        </div>
                                                    </div>
                                        </div>
                                  
                            </div>

                            <div class="panel panel-success">
                                    <div class="panel-heading">
                                            <h2 class="panel-title"> My Inventory</h2>
                                        </div>
                                        <div class="panel-body">
                                                <div class="row">
                                                        <div class="col-md-12">
                                                            <p><img src="images/august.jpg" width="50" height="50" /> iPhone 7</p>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-12">
                                                            <button class="btn btn-success" /> View Product </button>
                                                        </div>
                                                    </div>
                                        </div>
                                  
                            </div>

                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>
    <footer class="container">
       <!-- <h2>Footer</h2>-->
    </footer>
    <script src="assets/js/jquery-1.9.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type="text/javascript" src="assets/plugins/mdb/js/jquery-3.1.1.min.js"></script>
        
                <!-- Bootstrap tooltips -->
                <script type="text/javascript" src="assets/plugins/mdb/js/tether.min.js"></script>
        
                <!-- Bootstrap core JavaScript -->
                <script type="text/javascript" src="assets/plugins/mdb/js/bootstrap.min.js"></script>
        
                <!-- MDB core JavaScript -->
                <script type="text/javascript" src="assets/plugins/mdb/js/mdb.min.js"></script>
        
                <!-- slick carousel -->
                <script type="text/javascript" src="assets/plugins/slick/slick.min.js"></script>
        
                <!-- Main JS -->
                <script type="text/javascript" src="assets/js/main.js"></script>
                <script>
                    $(document).ready(function(){
                        $('.carousel_big').slick({
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true,
                            arrows: false,
                            fade: true,
                            autoplay: true,
                            asNavFor: '.carousel_small'
                        });
                        $('.carousel_small').slick({
                            infinite: true,
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            arrows: false,
                            asNavFor: '.carousel_big',
                            focusOnSelect: true,
                            autoplay: true,
                            autoplaySpeed: 2000,
                            vertical: true,
                            centerPadding: '0px',
                            responsive: [
                                // {
                                //   breakpoint: 1024,
                                //   settings: {
                                //     slidesToShow: 3,
                                //     slidesToScroll: 3,
                                //     infinite: true
                                //   }
                                // },
                                {
                                  breakpoint: 600,
                                  settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2,
                                    infinite: true
                                  }
                                },
                                {
                                  breakpoint: 480,
                                  settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    infinite: true
                                  }
                                }
                            ]
                        });
        
                        new WOW().init();
                        $('[data-toggle="tooltip"]').tooltip();
                    });
                </script>
                <script>
                    app.commentHandler();
                </script>
       @endsection