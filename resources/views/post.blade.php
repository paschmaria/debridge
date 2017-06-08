@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('success') }}
        </div>
    @endif
    @if (session('danger'))
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('danger') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Post</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('create_post') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}"  autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-4 control-label">Content</label>

                            <div class="col-md-6">
                                <textarea id="content" class="form-control" name="content">{{ old('content') }}</textarea> 
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label">image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image" >

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Post
                                </button>
                            </div>
                        </div>
                    </form>
                    <br><br><br><br><hr>

                    @foreach($posts as $post)
                        <div class="col-sm-12 well">
                            @foreach($post->images as $image)
                                <img src="{{$image}}">
                            @endforeach
                            <p>
                                <a href="{{ route('hype', $post->id) }}"><button class="btn btn-primary">Hype</button></a>
                                <a href="{{ route('admire', $post->id) }}"><button class="btn btn-success">Admire</button></a>
                            </p>
                            <p>Posted by: <b>{{ $post->user->name }}</b></p>
                            <p>Posted on: <b>{{ $post->updated_at }}</b></p>
                            <p>Title: <b>{{ $post->title }}</b></p>
                            <p>content: <b>{{ $post->content }}</b></p>
                            <div class="col-sm-8 well  pull-right">
                                <form method="POST" action="{{ route('create_comment', $post->id) }}">
                                {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                                        <label for="content" class="col-md-4 control-label">Content</label>

                                        <div class="col-md-6">
                                            <textarea id="content" class="form-control" name="content">{{ old('content') }}</textarea> 
                                            @if ($errors->has('content'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('content') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Post
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-sm-12">
                                    @foreach($post->comments as $comment)
                                        <br>
                                        <p><b>{{ $comment->user->name }} - [{{ $comment->created_at }}]</p>
                                        <p>{{ $comment->content }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
