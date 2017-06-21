@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Post</div>

                <div class="panel-body">
                    <form class="form-horizontal" id="postForm" role="form" enctype="multipart/form-data" method="POST" action="{{ route('create_post') }}">
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

                        <div class="form-group{{ $errors->has('file.*') ? ' has-error' : '' }}">
                            <label for="file" class="col-md-4 control-label">file</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file[]" multiple>

                                @if ($errors->has('file.*'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file.*') }}</strong>
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
                        @if(isset($post->images))
                            @foreach($post->images as $image)
                                <div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
                                    <a href="#" class="thumbnail">
                                        <img src="{{asset('images')."/".$image->image_reference}}">
                                    </a>
                                </div>
                            @endforeach
                        @endif
                            <p>
                                @if (!in_array($post->id, $hyped))
                                    <a href="{{ route('hype', $post->id) }}"><button class="btn btn-primary">Hype</button></a>
                                @endif
                                @if(!in_array($post->id, $admired))
                                    <a href="{{ route('admire', $post->id) }}"><button class="btn btn-success">Admire</button></a>
                                @else
                                    <a href="{{ route('unadmire', $post->id) }}"><button class="btn btn-success">Unadmire</button></a>
                                @endif
                                @if($post->user_id===auth()->user()->id)
                                <a href="{{ route('admire', $post->id) }}"><button class="btn btn-success">Edit</button></a>
                                <a href="{{ route('delete_post', $post->id) }}"><button class="btn btn-danger">Delete</button></a>
                                @endif
                            </p>
                            <p>Posted by: <b>{{ $post->user->first_name }}</b></p>
                            <p>Posted: <b>{{ $post->updated_at->diffForHumans() }}</b></p>
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
                                            @endif <br>
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
                                        <p>Commented by: <b>{{ $comment->user->first_name }} - [{{ $comment->created_at->diffForHumans() }}]</p>
                                        @if($comment->user_id === auth()->user()->id)
                                        <p>{{ $comment->content }} <a style="color: red;" href="{{ route('delete_comment', $comment->id ) }}">[ delete comment ]</a></p>
                                        @else
                                        <p>{{ $comment->content }}</p>
                                        @endif
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
