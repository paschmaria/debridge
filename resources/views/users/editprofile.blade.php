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
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('timeline', auth()->user()->reference) }}">Tradeline</a></li>
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
    <!-- main section begins here -->
    <section class="main">
    	<div class="container">
    		<div class="wrapper m-b-50">
	    		<div class="row">
	    			<div class="col-md-2 col-sm-2 h-200">
	    			</div>
	    			<div class="col-md-7 col-sm-7 m-t-20">
	    				<div class="row">
	    					<div class="col-md-4 col-sm-4">
                                <form method="post" action="{{ route('upload_profile_pic') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="card">
                                        <div class="profile-img-holder width-185 h-261 m-r-40">
                                        @if(auth()->user()->profile_picture == null)
                                            <div class="photo_wrapper h-200 p-l-5 p-t-5">
                                                <img src="{{ asset('img/icons/profiled.png') }}" id="post" class="h-200 width-100pf">
                                            </div>
                                        @else
                                            <div class="photo_wrapper h-200 p-l-5 p-t-5">
                                                <img src="{{ route('image', [auth()->user()->profile_picture->image_reference, '']) }}" id="post" class="h-200 width-100pf">
                                            </div>
                                        @endif                                            
                                            <div class="pos-rel">
                                                <button type="submit" class="btn btn-brand btn-flat m-l-18">
                                                <i class="fa fa-plus-circle"></i>
                                                Upload</button>
                                               <input name="img_ref" type="file" class="pos-abs l-30 width-125 h-40 t-8 hide z-10" id="upload">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="text-center m-t-10">
                                        <button class="btn btn-sm btn-brand">save</button>
                                    </div>  --}}
                                </form>
	    					</div>
	    					<div class="col-md-8 col-sm-8">
	    						<div class="card c-dark">
                                    <div class="card-block">
                                        <div class="account-details">
                                            <form action="{{ route('update_profile') }}" method="post">
                                            {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 m-b-30">
                                                    <span class="c-brand fa fa-cog fa-2x">&nbsp; </span>
                                                        <h3 class="dis-inline">  ACCOUNT SETTINGS</h3>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-12 form-group">
                                                        <label for="usr-fname" class="c-dark f-14">First Name*</label>
                                                        <input type="text" name="first_name" id="usr-fname" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14" value="{{ auth()->user()->first_name }}"required>
                                                        @if ($errors->has('first_name'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('first_name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-12 form-group">
                                                        <label for="usr-lname" class="c-dark f-14">Last Name <small class="c-gray ">(Surname)</small>*</label>
                                                        <input type="text" name="last_name" id="usr-lname" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14" value="{{ auth()->user()->last_name }}" required>
                                                        @if ($errors->has('last_name'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('last_name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <label for="usr-email" class="c-dark f-14">Email*</label>
                                                        <input type="email" name="email" id="usr-email" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14" value="{{ auth()->user()->email }}" required>
                                                        @if ($errors->has('email'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-12 form-group">
                                                        <label for="usr-gender" class="f-14 c-dark">Gender</label>
                                                        <select name="gender" id="usr-gender" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow f-14 p-l-10">
                                                            <option selected
                                                            @if(auth()->user()->gender != null) 
                                                                value="{{ auth()->user()->gender }}"> 
                                                                {{ auth()->user()->gender }}
                                                            @else
                                                                >Choose gender...
                                                            @endif
                                                            </option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                        @if ($errors->has('gender'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('gender') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-12 form-group">
                                                        <label for="usr-dob" data-error="wrong" data-success="right" class="f-14">Date of Birth*</label>
                                                        <input type="date" name="date_of_birth" id="usr-dob" class="form-control bd-3 h-40 validate input-alternate border-box f-14" value="{{ auth()->user()->date_of_birth }}" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <label class="f-14 c-dark">Trade Community</label>
                                                        <select name="community" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow f-14 p-l-10">
                                                            <option selected
                                                                @if(auth()->user()->community != null)
                                                                value="{{ auth()->user()->community->id }}">{{ auth()->user()->community->name }}
                                                                @else
                                                                disabled>Trade community state...
                                                                @endif
                                                            </option>
                                                            @foreach($communities as $community)
                                                                <option value="{{ $community->id }}">{{ $community->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('community'))
                                                        <span class="help-block text-danger">
                                                            <strong>{{ $errors->first('community') }}</strong>
                                                        </span><br><br>
                                                        @endif
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-brand m-t-20 pull-right">UPDATE</button>
                                                
                                            </form>
                                        </div>
                                    </div>                     
                                </div>
	    					</div>
	    				</div>

                        <div class="row m-t-20">
                            <div class="col-md-4 col-sm-4">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="card c-dark">
                                    <div class="card-block">
                                        <div class="account-details">
                                            <form method="post" @if (strtolower(auth()->user()->role->name) === 'user')
                                                action="{{ route('update_user') }}" 
                                            @else
                                                action="{{ route('update_merchant') }}"
                                            @endif>
                                            {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 m-b-30">
                                                    <span class="c-brand fa fa-cog fa-2x">&nbsp; </span>
                                                        <h4 class="dis-inline">INFORMATION SETTINGS</h4>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <label for="usr-password" data-error="wrong" data-success="right" class="f-14 c-dark">Telephone</label>
                                                        <input type="text" name="telephone" id="usr-password" class="form-control bd-3 h-40 validate input-alternate border-box bg-white f-14"@if (strtolower(auth()->user()->role->name) === 'user')
                                                            value="{{ $user_acc->telephone }}"
                                                        @else
                                                            value="{{ $merchant->telephone }}"
                                                        @endif>
                                                        @if ($errors->has('telephone'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('telephone') }}</strong>
                                                            </span><br><br>
                                                        @endif
                                                    </div>
                                                </div>
                                                @if(strtolower(auth()->user()->role->name) === 'user')
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-12 form-group">
                                                            <label class="c-dark f-14">Address </label>
                                                            <input type="text" name="address" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14"
                                                            @if($user_acc->address != null)
                                                                value="{{ $user_acc->address->address }}" 
                                                            @endif>
                                                            @if ($errors->has('address'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('address') }}</strong>
                                                                </span><br><br>
                                                            @endif
                                                            <label class="c-dark f-14">State: </label>
                                                            <select name="state" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow f-14 p-l-10">
                                                                <option selected
                                                                    @if($user_acc->address != null && $user_acc->address->state != null)
                                                                    value="{{ $user_acc->address->state->id }}">{{ $user_acc->address->state->name }}
                                                                    @else
                                                                    disabled>Select state...
                                                                    @endif
                                                                </option>
                                                                @foreach($states as $state)
                                                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @if ($errors->has('state'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('state') }}</strong>
                                                            </span><br><br>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-12 form-group">
                                                            <p class="f-16 c-green m-t-10">Store Information</p><hr>
                                                            <label class="f-14 c-dark">Store Name</label>
                                                            <input type="text" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14" name="store_name" value="{{ $merchant->store_name }}">
                                                            @if ($errors->has('store_name'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('store_name') }}</strong>
                                                            </span><br><br>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-12 form-group">
                                                            <label class="c-dark f-14">Store Address: </label>
                                                            <input type="text" name="address" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14"
                                                            @if($merchant->address_id != null)
                                                                value="{{ $merchant->address->address }}" 
                                                            @endif>
                                                            @if ($errors->has('address'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('address') }}</strong>
                                                            </span><br><br>
                                                            @endif
                                                            <label class="c-dark f-14">State: </label>
                                                            <select name="state" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow f-14 p-l-10">
                                                                <option selected
                                                                    @if($merchant->address != null && $merchant->address->state != null)
                                                                    value="{{ $merchant->address->state->id }}">{{ $merchant->address->state->name }}
                                                                    @else
                                                                    disabled>Select state...
                                                                    @endif
                                                                </option>
                                                                @foreach($states as $state)
                                                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @if ($errors->has('state'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('state') }}</strong>
                                                            </span><br><br>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <hr><label class="f-14 c-dark">Brief Description <small class="c-gray">(status : max of 180 characters)</small> </label>
                                                        <textarea type="text" name="status" class="form-control p-10 bd-3 h-100 input-alternate border-box md-textarea bg-white f-14">@if(strtolower(auth()->user()->role->name) === 'user'){{ $user_acc->status }} @else {{ $merchant->status }} @endif </textarea>
                                                        @if ($errors->has('status'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('status') }}</strong>
                                                            </span><br><br>
                                                        @endif
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-brand m-t-20 pull-right">UPDATE</button>
                                                
                                            </form>
                                        </div>
                                    </div>                     
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-md-4 col-sm-4">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="card c-dark">
                                    <div class="card-block">
                                        <div class="account-details">
                                            <form method="post" action="{{ route('change_pasword') }}">
                                            {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 m-b-30">
                                                    <span class="c-brand fa fa-cog fa-2x">&nbsp; </span>
                                                        <h4 class="dis-inline">PASSWORD SETTINGS</h4>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <label for="usr-password" data-error="wrong" data-success="right" class="f-14 c-dark">Old Password</label>
                                                        <input type="password" name="old_password" id="usr-password" class="form-control bd-3 h-40 validate input-alternate border-box bg-white f-14">
                                                        @if ($errors->has('old_password'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('old_password') }}</strong>
                                                            </span><br><br>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <label for="usr-password" data-error="wrong" data-success="right" class="f-14 c-dark">New Password</label>
                                                        <input type="password" name="password" id="usr-password" class="form-control bd-3 h-40 validate input-alternate border-box bg-white f-14">
                                                        @if ($errors->has('password'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span><br><br>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <label for="usr-password" data-error="wrong" data-success="right" class="f-14 c-dark">Confirm Password</label>
                                                        <input type="password" name="password_confirmation" id="usr-password" class="form-control bd-3 h-40 validate input-alternate border-box bg-white f-14">
                                                    </div>
                                                </div>
                                                
                                                <button type="submit" class="btn btn-brand m-t-20 pull-right">UPDATE</button>
                                                
                                            </form>
                                        </div>
                                    </div>                     
                                </div>
                            </div>
                        </div>
	    				
	    			</div>
	    			<div class="col-md-3 col-sm-3 h-200"></div>
	    		</div>
	    	</div>
    	</div>
    	
    </section>

    @endsection

    @section('scripts')
    <script type="text/javascript">
            $(document).ready(function () {
            var app2 = {
                imageHandler:function (){
                    $('#upload').on('change', function(){
                        var img_ref = $("#upload")[0].files[0];
                        // console.log(img_ref);
                        data = new FormData();
                        data.append('img_ref', img_ref);
                        $.ajax({
                            url: "/users/profile/edit/picture",
                            type:"POST",
                            eenctype: 'multipart/form-data', 
                            data: data,
                            processData: false,  // do not process the data as url encoded params
                            contentType: false,
                            success: function(data){
                                // console.log(data)
                                readUrl();
                                toastr.success("Profile picture has been updated!");
                            },
                            error: function (data) {
                                toastr.error("Somthing went wrong")
                            }
                        });
                    });
                    function readUrl(argument) {
                        var file = $("#upload")[0].files[0];
                        var reader = new FileReader();
                        reader.onloadend = function () {
                            $("#post").attr('src', reader.result);
                            $("#profile_picture_main").attr('src', reader.result);
                        }
                        if (file) {
                            reader.readAsDataURL(file);
                        }
                    }
                }
            }
            app2.imageHandler();
        });
       </script>
   @endsection