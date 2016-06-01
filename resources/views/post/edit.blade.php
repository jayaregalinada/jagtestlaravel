@extends('app')

@section('title', 'Edit Post')

@section('content')
    <div class="container">
        @include('templates.error_alert')
        @include('templates.success_alert')
    <form name="create_post_form" action="{{ route('post.update', $post->id) }}" method="POST">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="title" class="sr-only">Title</label>
                <input type="text" value="{{ $post->title }}" class="form-control input-lg" id="title" name="title" placeholder="title" />
            </div>
            <div class="form-group">
                <label for="body" class="sr-only">Body</label>
                <textarea rows="6" required class="form-control input-lg" id="body" name="body" placeholder="body">{{ $post->body }}</textarea>
            </div>
            <button class="btn btn-info btn-lg" type="submit">Update</button>
        </form>
    </div>
@stop
