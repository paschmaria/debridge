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
<<<<<<< HEAD
					@if(($product_of_the_week) && !($product_of_the_week->product_id != $product->id))
						<div class="col-sm-12 bg-warning">This prouct can't be edited or deleted because it is the product of the week</div>
=======


						
					
					@if($product_of_the_week != null)
					
							@if($diff_in_days==true)

									<a class="btn btn-success" href="{{ route('edit_product', $product->id) }}">edit</a>
				
									<a class="btn btn-danger" href="{{ route('delete', $product->id) }}">delete</a>

									@if($product->promo_price ==null)
									<a class="btn btn-success" href="{{ route('promo', $product->id) }}">Make as promo</a>
									@else

									<a class="btn btn-success" href="{{ route('promo', $product->id) }}">Edit promo</a>

									<a class="btn btn-danger" href="{{ route('promo', $product->id) }}">Remove promo</a>
									@endif

									<a class="btn btn-success" href="{{ route('product_hype', $product->id) }}">Hype</a>

								<form method="post" action="{{ route('product_of_the_week', $product->id) }}">
									{{ csrf_field() }}
									<button type="submit" class="btn btn-success btn-sm">Make Product Of The Week</button>
								</form>
							@else
								@if($product_of_the_week->product_id != $product->id)
								@if($product->promo_price ==null)
								<a class="btn btn-success" href="{{ route('promo', $product->id) }}">Make as promo</a>
								@else

								<a class="btn btn-success" href="{{ route('promo', $product->id) }}">Edit promo</a>

								<a class="btn btn-danger" href="{{ route('remove_promo', $product->id) }}">Remove promo</a>
								@endif

								<a class="btn btn-success" href="{{ route('edit_product', $product->id) }}">edit</a>
				
								<a class="btn btn-danger" href="{{ route('delete', $product->id) }}">delete</a>

								<a class="btn btn-success" href="{{ route('product_hype', $product->id) }}">Hype</a>

								@else
									<p>This is the product of the week, please wait till the next to change, edit, or delete</p>
								@endif
							@endif
						
>>>>>>> 593ddf79c78aab3b47dfc0edc77de35ac5fa83f6
					@else
						<a class="btn btn-danger" href="{{ route('delete', $product->id) }}">delete</a>
						<a class="btn btn-success" href="{{ route('edit_product', $product->id) }}">edit</a>
						@if($product->hottest_product_id != null)
							<a class="btn btn-remove" href="{{ route('del_hottest', $product->id) }}">remove as hottest</a>
						@else
							@if ($hottest)
								<a class="btn btn-success" href="{{ route('add_hottest', $product->id) }}">add as hottest</a>
							@endif
<<<<<<< HEAD
						@endif
					@endif
					@if($product->promo_price ==null)
						<a class="btn btn-success" href="{{ route('promo', $product->id) }}">Make as promo</a>
					@else
						<a class="btn btn-success" href="{{ route('promo', $product->id) }}">Edit promo</a>
						<a class="btn btn-danger" href="{{ route('promo', $product->id) }}">Remove promo</a>
					@endif
					@if(empty($product_of_the_week) || ($diff_in_days == true))
=======

							<a class="btn btn-success" href="{{ route('product_hype', $product->id) }}">Hype</a>
						
>>>>>>> 593ddf79c78aab3b47dfc0edc77de35ac5fa83f6
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