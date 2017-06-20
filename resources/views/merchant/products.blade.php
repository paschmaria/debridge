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
						
					@else

							<a class="btn btn-success" href="{{ route('edit_product', $product->id) }}">edit</a>
							
							<a class="btn btn-danger" href="{{ route('delete', $product->id) }}">delete</a>

							@if($product->promo_price ==null)
							<a class="btn btn-danger" href="{{ route('delete', $product->id) }}">Make as promo</a>
							@else
								<a class="btn btn-success" href="{{ route('promo', $product->id) }}">Edit promo</a>

								<a class="btn btn-danger" href="{{ route('promo', $product->id) }}">Remove promo</a>

							@endif

							<a class="btn btn-success" href="{{ route('product_hype', $product->id) }}">Hype</a>
						
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