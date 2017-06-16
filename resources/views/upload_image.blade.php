@extends('layouts.master')
@section('content')
	<div class="container">
		<br>
		<p><h5><b>Hi {{ auth()->user()->first_name }} !</b></h5></p>
		<p>Add new alblum</p>
		<form method="post" enctype="multipart/form-data" action="{{ route('upload') }}">
			{{ csrf_field() }}
			<input type="file" name="file[]" class="form-control" multiple>
			<input type="submit" value="upload" class="btn btn-success">
		</form>
		@forelse ($albums as $album)
			<div class="col-sm-12 well well-default">
				<p><h6 class="text-default">Created at: {{ $album->created_at->diffForHumans() }}</h6></p>
					<div class="col-sm-12 row">
						@forelse ($album->images as $image)
							<div class="col-sm-3">
								<img class="thumbnail col-sm-12" src="{{ route('image', [$image->image_reference, '']) }}">
								<form  method="post" class="col-sm-12" action="{{ route('delete_image', $image->id) }}">
									<input type="submit" value="Delete Image" class="btn-warning col-sm-12">
									{{ csrf_field() }}
								</form>
							</div>
						@empty
							<div><h6 class="text-danger">No image!</h6></div>
						@endforelse
						<form  method="post" action="{{ route('delete_album', $album->id) }}">
							<input type="submit" value="Delete Album" class="btn btn-danger">
							{{ csrf_field() }}
						</form>
					</div>
			</div>
			<br>
		@empty
			<div><h4 class="text-danger">You have no album yet!</h4></div>
		@endforelse
	</div>
@endsection