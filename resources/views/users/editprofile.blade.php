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
                                <div class="card">
                                    <div class="profile-img-holder bd-all width-185 h-261 m-r-40">
                                        <div class="photo_wrapper h-200 p-l-5 p-t-5">
                                            <img src="" id="post" class="h-200 width-100pf">
                                        </div>
                                       <div class="pos-rel">
                                            <button type="submit" class="btn btn-brand btn-flat m-l-18">
                                            <i class="fa fa-plus-circle"></i>
                                            Upload</button>
                                           <input type="file" class="pos-abs l-30 width-125 h-40 t-8 hide z-10" id="upload">
                                       </div> 
                                    </div>
                                </div>
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
                                                         <input type="text" name="first_name" id="usr-fname" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14" value="{{ auth()->user()->first_name }}" required>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-12 form-group">
                                                        <label for="usr-lname" class="c-dark f-14">Last Name <small class="c-gray ">(Surname)</small>*</label>
                                                        <input type="text" name="last_name" id="usr-lname" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14" value="{{ auth()->user()->last_name }}" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <label for="usr-email" class="c-dark f-14">Email*</label>
                                                        <input type="email" name="email" id="usr-email" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14" value="{{ auth()->user()->email }}" required>
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
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-12 form-group">
                                                        <label for="usr-dob" data-error="wrong" data-success="right" class="f-14">Date of Birth*</label>
                                                        <input type="date" name="date_of_birth" id="usr-dob" class="form-control bd-3 h-40 validate input-alternate border-box f-14" value="{{ auth()->user()->date_of_birth }}" required>
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
                                                    </div>
                                                </div>
                                                @if(strtolower(auth()->user()->role->name) === 'user')
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-12 form-group">
                                                            <label class="c-dark f-14">Address </label>
                                                            <input type="text" name="address" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14"
                                                            @if($user_acc->address_id != null)
                                                                value="{{ $user_acc->address->address }}" 
                                                            @endif>
                                                            <label class="c-dark f-14">State: </label>
                                                            <select name="state" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow f-14 p-l-10" required value = @if($user_acc->address_id != null)
                                                                value="{{ $user_acc->address->state_id }}" 
                                                            @endif>
                                                                <option disabled selected@if($user_acc->address_id != null) value="{{ $user_acc->address->state_id }}">
                                                                    @if($user_acc->address_id != null)
                                                                    {{ $user_acc->address->state->name }}
                                                                    @else
                                                                    Select state...
                                                                    @endif
                                                                </option>
                                                                @foreach($states as $state)
                                                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-12 form-group">
                                                            <p class="f-16 c-green m-t-10">Store Information</p><hr>
                                                            <label class="f-14 c-dark">Store Name</label>
                                                            <input type="text" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14" name="store_name" value="{{ $merchant->store_name }}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-12 form-group">
                                                            <label class="c-dark f-14">Store Address: </label>
                                                            <input type="text" name="address" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14"
                                                            @if($merchant->address_id != null)
                                                                value="{{ $merchant->address->address }}" 
                                                            @endif>
                                                            <label class="c-dark f-14">State: </label>
                                                            <select name="state" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow f-14 p-l-10" required value = @if($merchant->address_id != null)
                                                                value="{{ $merchant->address->state_id }}" 
                                                            @endif>
                                                                <option selected
                                                                    @if($merchant->address_id != null)
                                                                    value="{{ $merchant->address->state_id }}">
                                                                    {{ $merchant->address->state->name }}
                                                                    @else
                                                                    disabled>
                                                                    Select state...
                                                                    @endif
                                                                </option>
                                                                @foreach($states as $state)
                                                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <hr><label class="f-14 c-dark">Brief Description <small class="c-gray">(status)</small> </label>
                                                        <textarea type="text" name="status" class="form-control bd-3 h-150 input-alternate border-box md-textarea bg-white f-14"></textarea>
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
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <label for="usr-password" data-error="wrong" data-success="right" class="f-14 c-dark">New Password</label>
                                                        <input type="password" name="password" id="usr-password" class="form-control bd-3 h-40 validate input-alternate border-box bg-white f-14">
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
       var app = {
            imageHandler:function (){
                $('#upload').on('change', function(){
                    //alert("alert");
                    readUrl();
                });
                function readUrl(argument) {
                    var file = $("#upload")[0].files[0];
                    //console.log(file);
                    var reader = new FileReader();
                    reader.onloadend = function () {
                        //console.log(reader.result);
                        $('#post').attr('src', reader.result);
                    }
                    if(file){
                        reader.readAsDataURL(file);
                    }
                }
            }

        }
    app.imageHandler();
   </script>
   @endsection