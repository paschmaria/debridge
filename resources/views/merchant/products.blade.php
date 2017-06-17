@extends('layouts.master')
@section('content')	
	<div class="container">
		<h1 class="text-center">All Product</h1>
		<div class = 'row'>
			@forelse($products as $product)
				<div class="col-md-3 thumbnail jumbotron" >
					<p>name : {{ $product->name }}</p>
					<p>{{ $product->price }}</p>
					<a class="btn btn-success" href="{{ route('edit_product', $product->id) }}">edit</a>
					<a class="btn btn-danger" href="{{ route('delete', $product->id) }}">delete</a>
					@if($product_of_the_week != null)
						@if($diff_in_days==true)
							<form method="post" action="{{ route('product_of_the_week', $product->id) }}">
								{{ csrf_field() }}
								<button type="submit" class="btn btn-success btn-sm">Make Product Of The Week</button>
							</form>
						@endif
					@else
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