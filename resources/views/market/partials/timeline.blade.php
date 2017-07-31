<div id="all_posts">
                    @forelse ($posts as $post)
                        <div class="card m-t-20 p-18" id="post__{{ $post->id }}">
                            <div class="media">
                                <a class="pull-left" href="{{ route('view_profile', $post->user->reference) }}">
                                    @if ($post->user->profile_picture == null)
                                        <img src="{{ asset('img/icons/profiled.png') }}" class="card media-object img-responsive h-50 width-50 m-r-10" alt="">
                                    @else
                                        <img src="{{ route('image', [$post->user->profile_picture->image_reference, '']) }}" class="card media-object img-responsive h-50 width-50 m-r-10" alt="">
                                    @endif
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading c-brand w-500">

                                        <!-- <a href="{{ route('tradeline', $post->user->id) }}" class="c-brand">{{ $post->user->full_name() }}</a> -->

                                        <a href="{{ route('timeline', $post->user->reference) }}" class="c-brand">{{ $post->user->full_name() }}</a>

                                        <span class="pull-right" style="color:grey">
                                            {{$post->updated_at->diffForHumans()}}
                                            @if(Auth::id() == $post->user->id)
                                                <a data-toggle="modal" data-target="#post-delete-modal{{ $post->id }}" ><i class="fa fa-trash c-red"></i></a>
                                                <!-- Modal delete -->
                                                    <div class="modal fade m-t-180" id="post-delete-modal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <!--Content-->
                                                            <div class="modal-content">
                                                                <!--Header-->
                                                                <div class="modal-header bg-brand text-right">
                                                                    <button type="button" class="close c-white" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <!--Body-->
                                                                <div class="modal-body bg-brand-lite c-dark dis-flex">
                                                                    <p class="text-responsive w-700 m-0">Are you sure you want to delete this post?</p>
                                                                </div>
                                                                <!--Footer-->
                                                                <div class="modal-footer bg-brand-lite justify-content-center">
                                                                    <a class="btn btn-md btn-outline-brand delete_post" href="{{ route('delete_post', $post->reference) }}">Yes</a>
                                                                    <button type="button" class="btn btn-md btn-outline-brand" data-dismiss="modal">No</button>
                                                                </div>
                                                            </div>
                                                            <!--/.Content-->
                                                        </div>
                                                    </div>
                                                <!-- Modal -->
                                            @endif
                                        </span>
                                    </h6>
                                    <p>{{ $post->title }}
                                        @if ($post->product !== null)
                                            <a href="{{ route('product_details', $post->product->reference) }}">
                                                <span class="c-brand pull-right m-r-20">View Product</span>
                                            </a>
                                        @endif
                                    </p> {{-- <a href="#" class="c-brand">View Product</a></p> --}}
                                </div>
                            </div>
                            @if($post->pictures != null)
                                <div class="m-t-10">
                                    <div id="myCarousel{{ $post->id }}" class="carousel slide carousel-fade" data-ride="carousel">
                                        <!--Indicators-->
                                        <ol class="carousel-indicators">
                                            @for ($i = 0; $i < count($post->pictures->images); $i++)
                                                <li data-target="#myCarousel{{ $post->id }}" data-slide-to="{{ $i }}" @if($i === 0 )class="active"@endif></li>
                                            @endfor
                                        </ol>
                                        <!--/.Indicators-->

                                        <!--Slides-->
                                        <div class="carousel-inner" role="listbox" {{ $counter=0 }}>
                                            @foreach ($post->pictures->images as $image)
                                                <div class="carousel-item @if($counter == 0) active @endif">
                                                    <img src="{{ route('image', [$image->image_reference, '']) }}" class="img-fluid width-100p h-350" alt="First slide" {{ $counter++ }}>
                                                </div>
                                            @endforeach()
                                        </div>
                                        <!--/.Slides-->

                                        <!--Controls-->
                                        <a class="left carousel-control pos-abs l-15 t-40" href="#myCarousel{{ $post->id }}" role="button" data-slide="prev">
                                            <span class="fa fa-chevron-left f-24 c-dark" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control pos-abs r-15 t-40" href="#myCarousel{{ $post->id }}" role="button" data-slide="next">
                                            <span class="fa fa-chevron-right c-dark f-24" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        <!--/.Controls-->
                                    </div>
                                    <!--/.Carousel Wrapper-->
                                </div>
                            @endif
                            <div class="m-t-10 p-5"><p>{{ $post->content }}</p></div>
                            @if(auth()->check())
                                <div class="m-b-20">
                                    <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 col-sm-12" role="group" aria-label="Ad Action Buttons">
                                        @if(!in_array($post->id, $admired))
                                            <a href="{{ route('admire', $post->reference) }}"><button type="button" class="btn bg-white m-l-3 f-14 m-r-5 f-14 width-200">
                                                <span class="admire">Admire<small class="c-gray f-10">({{ $post->admires->count() }})</small>&nbsp;</span><span class=""><i class="fa fa-heart-o"></i></span>
                                            </button></a>
                                        @else
                                            <a href="{{ route('unadmire', $post->reference) }}"><button type="button" class="btn bg-white m-l-3 f-14 m-r-5 f-14 width-200">
                                                <span class="unadmire">Unadmire<small class="c-gray f-10">({{ $post->admires->count() }})</small>&nbsp;</span><span class=""><i class="fa fa-heart"></i></span>
                                            </button></a>
                                        @endif
                                        <a href=""><button type="button" class="btn bg-white m-l-10 f-14 m-r-10 f-14 width-200">
                                            <span class="">Comments<small class="c-gray f-10">({{ $post->comments->count() }})</small>&nbsp;</span><span class=""><i class="fa fa-comment"></i></span>
                                        </button></a>
                                        @if (!in_array($post->id, $hyped))
                                            <a href="{{ route('hype', $post->reference) }}"><button type="button" class="btn bg-white m-l-3 f-14 width-150">
                                                <span class="">Hype&nbsp;</span><span class=""><i class="fa fa-share-alt"></i></span>
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
                                            <img src="{{ asset('img/icons/profiled.png') }}" class="card media-object img-responsive h-50 width-50 m-r-10" alt="">
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
                                        <button type="button" class="btn bg-white m-l-5 f-14 m-r-3 f-14 width-200" data-toggle="modal" data-target="#basicExample" >
                                            <span class="">Admire<small class="c-gray f-10">({{ $post->admires->count() }})</small>&nbsp;</span><span class=""><i class="fa fa-heart-o"></i></span>
                                        </button>
                                        
                                        <button type="button" class="btn bg-white m-l-10 f-14 m-r-10 f-14 width-200" data-toggle="modal" data-target="#basicExample">
                                            <span class="">Comments<small class="c-gray f-10">({{ $post->comments->count() }})</small>&nbsp;</span><span class=""><i class="fa fa-comment"></i></span>
                                        </button>
                                        <button type="button" class="btn bg-white m-l-5 f-14 width-150" data-toggle="modal" data-target="#basicExample">
                                            <span class="">Hype&nbsp;</span><span class=""><i class="fa fa-share-alt"></i></span>
                                        </button>
                                    </div>
                                </div>
                            @endif
                            @forelse($post->comments->sortByDesc('created_at')->slice(0,5) as $comment)
                                <div class="media m-b-20">
                                    <div class="pull-left p-r-10">
                                        <a href="{{ route('view_profile', $comment->user->reference) }}">
                                            @if ($comment->user->image_id == null)
                                                <img src="{{ asset('img/icons/profile.png') }}" class="card media-object img-responsive h-50 width-50 m-r-10" alt="">

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
                                                        <img src="{{ asset('img/icons/profiled.png') }}" class="media-object p-r-10" alt="">
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
</div>

                    <!--modal-->
                        <div class="modal fade width-100p m-t-180" id="basicExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <!--Content-->
                                <div class="modal-content bg-brand-lite">
                                    <!--Header-->
                                    <div class="modal-header bg-brand">
                                        <h4 class="modal-title w-100 m-auto c-white text-center" id="myModalLabel">Join Debridge </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="c-white">&times;</span>
                                        </button>
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body">
                                        <p class="text-center f-20 m-t-20 m-b-10 c-dark">Please sign up or log in to continue</p>
                                        <div class="modal-signup text-center m-b-10">
                                            <a href="{{ route('register') }}">
                                                <button class="btn btn-md bg-brand text-center f-16">Log in/Register</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Content-->
                            </div>
                        </div>
                    <!--/modal-->