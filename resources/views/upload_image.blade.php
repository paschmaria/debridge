@extends('layouts.master')
@section('content')
	<div class="container">
		<br>
		<form method="post" enctype="multipart/form-data" action="{{ route('upload') }}">
			{{ csrf_field() }}
			<input type="file" name="file[]" class="form-control" multiple>
			<input type="submit" value="upload" class="btn btn-success">
		</form>
		@forelse ($albums as $album)
			<p><h5><b>Album: {{ $album->id }}</b></h5></p>
			@forelse ($album->images as $image)
				<p>
					<img class="thumbnail col-sm-4" src="{{ route('image', [$image->image_reference, '']) }}">
					<form  method="post" class="col-sm-4" action="{{ route('delete_image', $image->id) }}">
						<input type="submit" value="Delete Image" class="btn-danger">
						{{ csrf_field() }}
					</form>
				</p>
			@empty
				<div><h4 class="text-danger">No Images Yet!</h4></div>
			@endforelse
			<form  method="post" action="{{ route('delete_album', $album->id) }}">
				<input type="submit" value="Delete" class="btn btn-danger">
				{{ csrf_field() }}
			</form>
		@empty
			{{-- empty expr --}}
		@endforelse
	</div>
@endsection