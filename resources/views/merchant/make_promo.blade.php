<!DOCTYPE html>
<html lang="en">

<head>
    <title>De-Bridge</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="Description" content="An E-commerce site where users can meet socially and as well carry out businesses">
    <meta name="Keywords" content="social media, business, friends, buy, sell, contacts">
    
    <!-- fav icon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo/debridge-logo.png') }}"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset ('plugins/mdb/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
   <link rel="stylesheet" href="{{ asset('plugins/mdb/css/mdb.min.css') }}">

    <!-- font styles -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito">

    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>


<body>

<div class="container">

    <div class="card box m-t-80 m-b-40">
        <div class="card-block">

<h3 class="title text-center">Make Promo</h3>
               <p class="sub-title text-center">Please put promo price and description</p>
               <p class="sub-title text-center">Product price: {{ $product->price }}</p>
                 
                <form action="{{ route('update_promo', $product->id) }}" method="POST">
                    
                    <p>{{ csrf_field() }}</p>

                    <div class="col-md-6 col-sm-6 col-12 form-group{{ $errors->has('product_price') ? ' has-error' : '' }}">
                            <label for="last_name">Promo Price</label>
                            <input type="number" name="promo_price" id="usr-lname" class="form-control bd-3 h-40 input-alternate border-box" required value="{{ $product->promo_price }}">

                            @if ($errors->has('product->promo_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product->promo_price') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                       
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12 form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="email">Description</label>
        

                            <textarea name="description" class="form-control" rows="30" required>{{ $product->description }}</textarea>

                             @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 offset-md-3 col-sm-6 offset-md-4 col-12 m-b-20">
                            <button type="submit" class="btn btn-success  waves-effect m-0">Make Promo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('plugins/mdb/js/jquery-3.1.1.min.js') }}"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/tether.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/bootstrap.min.js') }}"></script>

    <!-- MDL core JavaScript -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/mdb.min.js') }}"></script>

    <!-- Main JS -->
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script>
        document.onreadystatechange = () => {
            if (document.readyState === "complete") {
                app.loginToggler();
                $('[data-toggle="tooltip"]').tooltip();
            }
        }
    </script>


</body>

</html>