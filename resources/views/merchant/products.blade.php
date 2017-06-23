@extends('layouts.master')
@section('content')	
	<div class="container">
		<h1 class="text-center">All Product</h1>
		<div class = 'row'>
			@forelse($products as $product)
				<div class="col-md-3 thumbnail jumbotron" >
					<p>name : {{ $product->name }}</p>
					@if($product->promo_price ==null)
						<p>{{ $product->price }}</p>
					@else
						<del>{{ $product->price }}</del>
						<p>{{ $product->promo_price }}</p>
					@endif
					@if(($product_of_the_week) && ($product_of_the_week->product_id == $product->id))
						<div class="col-sm-12 bg-warning">This product can't be edited or deleted because it is the product of the week</div>

						 @if (!in_array($product->id, $hyped))
                                    <a href="{{ route('product_hype', $product->id) }}"><button class="btn btn-primary">Hype&nbsp</button></a></button></a>
                                @endif
                                @if(!in_array($product->id, $admired))
                                    <a href="{{ route('admire', $product->id) }}"><button class="btn btn-success">Admire&nbsp<span class="badge">{{ $admired_count->where('product_id', $product->id)->count() }}</span></button></a>
                                @else
                                    <a href="{{ route('unadmire', $product->id) }}"><button class="btn btn-success">Unadmire<span class="badge">{{ $admired_count->where('product_id', $product->id)->count() }}</span></button></a>
                                    </button></a>
                                @endif
						<a href="{{ route('product_hype', $product->id) }}" class="btn btn-success">Hype</a>
						<a href="{{ route('product_hype', $product->id) }}" class="btn btn-success">Admire</a>

					@else
						<a class="btn btn-danger" href="{{ route('delete', $product->id) }}">delete</a>
						<a class="btn btn-success" href="{{ route('edit_product', $product->id) }}">edit</a>
						@if($product->hottest_product_id != null)
							<a class="btn btn-danger" href="{{ route('del_hottest', $product->id) }}">remove as hottest</a>
						@else
							@if ($hottest)
								<a class="btn btn-success" href="{{ route('add_hottest', $product->id) }}">add as hottest</a>
							@endif
						@endif
						<a href="{{ route('product_hype', $product->id) }}" class="btn btn-success">Hype</a>
						<a href="{{ route('product_hype', $product->id) }}" class="btn btn-success">Admire</a>
					@endif
					@if($product->promo_price ==null)
						<a class="btn btn-success" href="{{ route('promo', $product->id) }}">Make as promo</a>
					@else
						<a class="btn btn-success" href="{{ route('promo', $product->id) }}">Edit promo</a>
						<a class="btn btn-danger" href="{{ route('promo', $product->id) }}">Remove promo</a>
					@endif
					@if(empty($product_of_the_week) || ($diff_in_days == true))
						<form method="post" action="{{ route('product_of_the_week', $product->id) }}">
								{{ csrf_field() }}
								<button type="submit" class="btn btn-success btn-sm">Make Product Of The Week</button>
						</form>
					@endif

				</div>
			@empty
			<p>No products in inventory</p>
			@endforelse
		</div>
	</div>
@endsection('content')