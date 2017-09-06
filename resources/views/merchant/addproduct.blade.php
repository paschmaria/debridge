@extends('layouts.master')
@section('extra_styles')
    <style>
        .call{
            opacity: 0;
            position: absolute;
            width: 100%;
            bottom: 0px;
            height: 30px;
            z-index: 1000;
            }
    </style>
@endsection
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
        <section class="main">
            <div class="container bd-dark-light m-t-30 m-b-30 ">
                <h2 class="h2-responsive m-t-20 text-center c-brand">ADD PRODUCT</h2><hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><hr>
                @endif
                <form class="m-t-10 m-l-60" action="{{ route('addProduct') }}" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="">
                                {{ csrf_field() }}
                                <label for="product_name">Product name</label>
                                <input type="text" value="{{ old('product_name') }}" name="product_name" id="usrname" class="form-control bd-3 h-40 input-alternate border-box bg-white" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                       <div class="col-md-4 sm-6">
                            <div class="">
                                <label for="product_price">Price</label>
                                <input type="number" value="{{ old('product_price') }}" name="product_price" class="form-control bd-3 h-40 input-alternate border-box bg-white" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-4 sm-6">
                            <div class="">
                                <label for="category">Category</label>
                                <select name="category" class="form-control bd-3 h-40 input-alternate border-box bg-white p-5" required>
                                <option disabled selected>Please a category...</option>
                                @foreach($product_categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-4 sm-6">
                            <div class="">
                                <label for="product_description">Description</label>
                                <textarea type="text" value="{{ old('product_description') }}" name="product_description" class="form-control bd-3 h-150 input-alternate border-box md-textarea bg-white"></textarea> 
                            </div>
                        </div>
                    </div>
                    <!-- add images for products -->
                     <div class="row">
                        <div class="col-md-9">
                            <div class="c-gray m-t-10">
                            <p class="m-b-0">photo</p>
                            <h6>Ads with photo get 5x more clients. Accepted formats are .jpg, .gif and .png.</h6>
                            </div>
                            <div class="dis-flex flex-row justify-content-between">
                               <div class="m-5">
                                  <div class="card h-200 width-150">
                                    <img src="{{ asset('img/icons/ic-perm-identity.png') }}" alt="" class="h-200 width-150 p-5">
                                    <input type="file" name="file[]"  value="" class="call">
                                    <button type="button"  id="" class="btn-flat call_1 h-20 p-0 c-gray">
                                        <i class="fa fa-plus-circle"></i><span> Add photo</span>
                                    </button>
                                  </div>
                               </div>
                               <div class="m-5">
                                <div class="card h-200 width-150">
                                    <img src="{{ asset('img/icons/ic-perm-identity.png') }}" alt="" class="h-200 width-150 p-5">
                                    <input type="file" name="file[]"  value="" class="call">
                                    <button type="button"  id="" class="btn-flat call_1 h-20 p-0 c-gray">
                                        <i class="fa fa-plus-circle"></i><span> Add photo</span>
                                    </button>
                                  </div>
                               </div>
                               <div class="m-5">
                                <div class="card h-200 width-150">
                                    <img src="{{ asset('img/icons/ic-perm-identity.png') }}" alt="" class="h-200 width-150 p-5">
                                    <input type="file" name="file[]"  value="" class="call">
                                    <button type="button"  id="" class="btn-flat call_1 h-20 p-0 c-gray">
                                        <i class="fa fa-plus-circle"></i><span> Add photo</span>
                                    </button>
                                  </div>
                               </div>
                               <div class="m-5">
                                <div class="card h-200 width-150">
                                    <img src="{{ asset('img/icons/ic-perm-identity.png') }}" alt="" class="h-200 width-150 p-5">
                                    <input type="file" name="file[]"  value="" class="call">
                                    <button type="button"  id="" class="btn-flat call_1 h-20 p-0 c-gray">
                                        <i class="fa fa-plus-circle"></i><span> Add photo</span>
                                    </button>
                                  </div>
                               </div>
                               <div class="m-5">
                                  <div class="card h-200 width-150">
                                    <img src="{{ asset('img/icons/ic-perm-identity.png') }}" alt="" class="h-200 width-150 p-5">
                                    <input type="file" name="file[]"  value="" class="call">
                                    <button type="button"  id="" class="btn-flat call_1 h-20 p-0 c-gray">
                                        <i class="fa fa-plus-circle"></i><span> Add photo</span>
                                    </button>
                                  </div>
                               </div>
                            </div>
                            <div class="dis-flex pull-left m-t-10 m-b-20">
                             <button type="submit" class="btn btn-brand">Add Product</button>
                            </div>
                        </div>
                    </div>
                    <!-- /. add images for products -->
                </form>
            </div>
        </section>
 @endsection

 @section('scripts')
    <script type="text/javascript">
        document.onreadystatechange = function() {
            if (document.readyState === "complete") {
                app.addProductImageHandler();
                app.stickyHeader();
                $(function(){
                    $('.notify').slimScroll({
                        height: '300px'
                    });
                });
            }
        }
    </script>
@endsection