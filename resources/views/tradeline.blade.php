@extends('layouts.master')
@section('content')
         <!-- main section begins here-->
        <section class="main">
            <div class="container-fluid">

                <h1 class="text-center h1-responsive m-t-32 m-b-28">TRADELINE</h1>

                <div class="row">
                    <div class="hidden-xs-down col-sm-3 col-md-3 m-t-20">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">CATEGORIES</a>
                            <a href="#" class="list-group-item list-group-item-action">VISIT OTHER STATES</a>
                            <a href="#" class="list-group-item list-group-item-action">GET A STAND</a>
                        </div>
                    </div>
                    <div class="col col-sm-6 col-md-6">
                        <div class="card m-t-20 p-18">
                             
                            <div class="card-block p-0">
                                <form action="" id="product-upload-form">
                                    <div class="md-form m-0">
                                        <textarea type="text" id="status_update" class="md-textarea input-alternate p-10 h-100 border-box" placeholder="What's on your mind?"></textarea>
                                    </div>
                                    <div id="product-img-wrapper" class="dis-flex flex-row">
                                        <ul id="product-imgs" class=""></ul>
                                        <span class="add-img pos-rel">
                                            <span class=""><input type="file" class="product-img-input" multiple></span>
                                            <button type="button" class="btn-upload btn-product-img"><i class="fa fa-plus fa-3x"></i></button>
                                        </span>
                                    </div>
                                    <div id="">
                                        <button type="button" class="btn-flat btn-product-img"><i class="fa fa-image"></i> upload</button>
                                        <input type="file" class="product-img-input" multiple>
                                        <button type="submit" class="btn btn-brand waves-effect">post</button>
                                    </div>
                                </form>
                               <!-- <div class="md-form m-0">
                                   <textarea type="text" id="status_update" class="md-textarea input-alternate p-10 h-100 border-box" placeholder="What's on your mind?"></textarea>
                               </div>
                               <div class="text-right m-b-20">
                                   <button type="button" class="btn btn-brand waves-effect"><span><i class="fa fa-image"></i></span>upload</button>
                                   <button type="submit" class="btn btn-brand waves-effect">post</button>
                               </div> -->

                                <div class="">
                                    @forelse($products as $product)
                                    @forelse($merchants as $merchant)
                                    <div class="card-block">
                                        <figure class="">
                                            <img src="{{ asset('img/oval-8.png') }}" alt="" class="figure-img img-fluid rounded-circle mx-auto m-b-14">
                                            <figcaption class="figure-caption text-center">
                                                <h3 class="h3-responsive">{{ $merchant->store_name }}</h3>
                                                <h3 class="h3-responsive">Manufacturer</h3>
                                            </figcaption>
                                        </figure>

                                        <div class="card-group">
                                            <div class="card m-5">
                                                <!--Card image-->
                                                <div class="view overlay hm-white-slight">
                                                    <img src="{{ asset('img/products/timeline-product-1.png') }}" class="img-fluid width-100p" alt="">
                                                    <a href="#">
                                                        <div class="mask waves-effect waves-light"></div>
                                                    </a>
                                                </div>
                                                <!--/.Card image-->
                                            </div>
                                            <div class="card m-5">
                                                <!--Card image-->
                                                <div class="view overlay hm-white-slight">
                                                    <img src="{{ asset('img/products/timeline-product-2.png') }}" class="img-fluid width-100p" alt="">
                                                    <a href="#">
                                                        <div class="mask waves-effect waves-light"></div>
                                                    </a>
                                                </div>
                                                <!--/.Card image-->
                                            </div>
                                        </div>
                                        <div class="m-t-10 m-b-50">
                                            <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10" role="group" aria-label="Ad Action Buttons">
                                                <button type="button" class="btn bg-white m-r-3 f-14">
                                                    <a href="{{ route('addToCart', $product->id) }}" style="color: #16a085;"><span class="f-left">Add Item&nbsp;</span><span class="f-right"><i class="fa fa-shopping-cart"></i></span></a>
                                                </button>
                                                <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14"><a href="" style="color: #16a085;">
                                                    <span class="f-left">Admire&nbsp;</span><span class="f-right"><i class="fa fa-heart"></i></span></a>
                                                </button>
                                                <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14"><a href="" style="color: #16a085;">
                                                    <span class="f-left">Comment&nbsp;</span><span class="f-right"><i class="fa fa-comment"></i></span></a>
                                                </button>
                                                <form action="{{ route('product_hype', $product->id) }}" method="post">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn bg-white m-l-3 f-14"><a href="" style="color: #16a085;">
                                                    <span class="f-left">Hype&nbsp;</span><span class="f-right"><i class="fa fa-share-alt"></i></span></a>
                                                </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="media m-b-15">
                                            <a class="pull-left" href="#">
                                                <img class="media-object p-r-10" src="{{ asset('img/acc-img-1.png') }}" alt="Image">
                                            </a>
                                            <div class="media-body">
                                                <textarea name="" id="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Press enter to send..."></textarea>
                                            </div>
                                        </div>

                                        <div class="media m-b-40">
                                            <div class="media">
                                                <div class="pull-left p-r-10">
                                                    <img class="media-object " src="{{ asset('img/acc-img-2.png') }}" alt="Image">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading w-700 m-b-5 f-12">Cindy Fashion House </h6>
                                                    <p m-b- f-12>New arrivals are everywhere. Get Quality 2017 dresses which never goes out of style. Call us: 08073404890 or Visit jhuds.com/clothing</p>
                                                    <ul class="m-b-0 f-12">
                                                        <li class="c-brand dis-inline-b p-r-10"><a href="#"><span><i class="fa fa-heart-o"></i></span> Like</a></li>
                                                    <li class="c-brand dis-inline-b p-l-10 p-r-10"><a href="#">Reply</a></li>
                                                    <li class="c-brand dis-inline-b p-l-10">31 May 2017</li>
                                                    </ul>
                                                    <div class="media m-t-5">
                                                        <div class="pull-left p-r-10">
                                                            <img src="{{ asset('img/acc-img-1.png') }}" class="media-object">
                                                        </div>
                                                        <div class="media-body">
                                                            <textarea name="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Write a reply..."></textarea>
                                                        </div>

                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!--hello-->
                                    @empty
                                        <p>nothing</p>
                                    @endforelse

                                    @empty
                                        <p>nothing</p>
                                    @endforelse
                                </div>
                        
                            </div>
                        </div> 
                    </div>
                    <div class="hidden-xs-down col-sm-3 col-md-3 m-t-20">
                    </div>
                </div>
            </div>
        </section>
        <!-- main section ends here-->
@endsection('content')